var $j = jQuery.noConflict();
var apptInfo;
let counselorId = '-1';

$j(document).ready(function () {
    $j("#studentIDForm").submit(function(event) {
        event.preventDefault(); // prevent reload

        if (validateInput()) {
            $j.when(loadAppointmentInfo()).done( function(appointmentInfo) {
                apptInfo = appointmentInfo;
                if (apptInfo.success == 'success') {
                    loadCounselorSelector(apptInfo.counselors);
                    counselorId = $j("#counselorForm #selectCounselor").val();
                    loadDateSelector();
                }
                else {
                    let errorElement = '<div class="alert alert-danger input-width" role="alert">Could not load appointment data from server.</div>';
                    $j('.make-an-appointment').append(errorElement);
                }
            });
        }
    });

    $j("#counselorForm").on("change", function(event) {
        event.preventDefault();
        counselorId = $j("#counselorForm #selectCounselor").val();
        loadDateSelector();
        dateChanged(new Date());
    });
});

function submitAppt(counselor_id, hour) {
    let date = $j('#dateForm').val();
    let student_id = $j('#studentIDForm #IDInputVerify').val();
    let date_time = date + ' ' + hour + ':00:00';

    let parameters = {
        counselor_id: counselor_id,
        student_id: student_id,
        date_time: date_time,
        notes: ''
    };
    post(base_url + '/services/schedule-appointment/process', parameters);
}

function selectAppointment(counselor_id, hour) {
    console.log('counselor_id: ' + counselor_id + ', hour: ' + hour);
    event.preventDefault();
    confirmAppt(counselor_id, hour);
}

function validateInput() {
    let student_id = $j('#IDInputVerify').val();

    if (student_id.length != 9) {
        $j("#invalidInputAlert").show();
        $j("#datepicker").hide();
        $j("#counselorForm").hide();
        return false;
    }
    else {
        $j("#invalidInputAlert").hide();
        $j('#IDInputVerify').prop('readonly', true);
        $j('#studentIDForm #submitButton').prop('disabled', true);
        return true;
    }
}

function loadAppointmentInfo() {
    return $j.ajax({
        url: base_url + '/services/schedule-appointment/get-info',
        type: 'GET',
        success: function(data) {
            return data;
        },
        error: function(error) {
            return error;
        }
    });
}

function loadCounselorSelector(counselors) {
    let keys = Object.keys(counselors);
    let selector = $j('#counselorForm #selectCounselor');

    for (var i = 0; i < keys.length; i++) {
        let counselor = counselors[keys[i]];
        var optionElement = '<option value="' + counselor['id'] + '">' + counselor['name'] + '</option>';
        selector.append(optionElement);
    }

    $j('#counselorForm').show();
}

function loadDateSelector() {
    // load closed dates
    let datesFromServer = apptInfo.closedDates;
    let closedDates = [];
    for (var i = 0; i < datesFromServer.length; i++) {
        closedDates.push(datesFromServer[i].date);
    }

    closedDates.push((date) => {
        if (date.getDay() === 0) {
            return true;
        }
        else if (date.getDay() === 6) {
            return true;
        }
        else {
            return !isAvailableAppts(date);
        }
    });

    flatpickr("#dateForm", {
        minDate: 'today',
        maxDate: new Date().fp_incr(365),
        inline: true,
        defaultDate: new Date(),
        disable: closedDates,
        dateFormat: 'Y-m-d',
        onChange: (date) => dateChanged(date),
        onReady: (date) => initializeDatePicker(date)
    });

    $j("#dateForm").show();
}

function isAvailableAppts(date) {
    if (counselorId == '-1') {
        let keys = Object.keys(apptInfo.counselors);
        for (var i = 0; i < keys.length; i++) {
            let key = keys[i];
            let counselor = apptInfo.counselors[key];
            let counselor_id = counselor['id'];
            let availableAppts = getAvailableApptsForCounselor(date, counselor_id);
            if (availableAppts.includes('1')) {
                return true;
            }
        }
        return false;
    }
    else {
        return getAvailableApptsForCounselor(date, counselorId).includes('1'); 
    }
}

function dateChanged(date) {
    $j('#timeForm').empty();
    initializeDatePicker(date);
}

function initializeDatePicker(date) {
    if (counselorId == '-1') {
        // load results for all counselors
        var anyAppointmentsAvailable = false;
        let counselors = apptInfo.counselors;
        let keys = Object.keys(counselors);
        var apptElements = '';

        for (var i = 0; i < keys.length; i++) {
            let counselor = counselors[keys[i]];
            let availableTimes = getAvailableApptsForCounselor(date, counselor['id']);
            if (availableTimes.includes('1')) {
                anyAppointmentsAvailable = true;
                apptElements += getAppointmentElements(availableTimes, counselor['id']);
            }
        }

        if (!anyAppointmentsAvailable) {
            apptElements += '<p>No appointments available on this date.</p>';
        }
        $j('#timeForm').append(apptElements);
    }
    else {
        // load results for a single selected counselor
        let availableTimes = getAvailableApptsForCounselor(date, counselorId);
        if (availableTimes.includes('1')) {
            let apptElements = getAppointmentElements(availableTimes, counselorId);
            $j('#timeForm').append(apptElements);
        }
        else {
            let apptElements = '<p>No appointments available for ' + apptInfo.counselors[counselorId]['name'] + ' on this date.</p>';
            $j('#timeForm').append(apptElements);
        }
    }
}

function getAppointmentElements(availableTimes, counselor_id) {
    let counselor = apptInfo.counselors[counselor_id];
    var apptElements = '<p>' + counselor['name'] + '</p>';
    apptElements += '<div class="time-buttons">';

    for (var i = 0; i < availableTimes.length; i++) {
        if (availableTimes[i] == '1') {
            apptElements += '<button class="btn btn-primary btn-sm" type="button" ';
            apptElements += 'onclick="selectAppointment(' + counselor_id + ', ' + getCorresponding24Hour(i) + ')">';
            apptElements += getCorrespondingTime(i);
            apptElements += '</button>';
        }
    }

    apptElements += '</div>';
    return apptElements;
}

function getAvailableApptsForCounselor(date, id) {
    let counselor = apptInfo.counselors[id];
    let apptKeys = Object.keys(apptInfo.appointments);
    var conflictingAppts = [];

    for (var i = 0; i < apptKeys.length; i++) {
        let key = apptKeys[i];
        let appt = apptInfo.appointments[key];
        if (appt['counselor_id'] == id) {
            let apptDate = appt['date_time'];
            if (formatDate(apptDate) == formatDate(date)) {
                conflictingAppts.push(appt);
            }
        }
    }

    var availableTimes = counselor['availableTimes'].split("");

    // 8 9 10 11 12 1 2 3 4
    for (var i = 0; i < conflictingAppts.length; i++) {
        let appt = conflictingAppts[i];
        let apptDate = new Date(appt['date_time']);
        let apptHours = apptDate.getHours();
        let index = getCorrespondingIndex(apptHours);
        availableTimes[index] = '0';
    }
    return availableTimes;
}

function confirmAppt(counselor_id, hour) {
    let counselorName = apptInfo.counselors[counselor_id]['name'];
    let apptDate = $j('#dateForm').val();
    var modalText = 'You are about to reserve an appointment with ' + counselorName + ' on ' + apptDate + ' at ' + get12HourFrom24Hour(hour) + '. Are you sure?';
    var confirmed = confirm(modalText);

    if (confirmed) {
        submitAppt(counselor_id, hour);
    }
}

function formatDate(dateString) {
    let date = new Date(dateString);
    return date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear()
}

function getCorrespondingTime(index) {
    let hour = getCorrespondingHour(index);
    if (hour <= 4 || hour == 12) {
        return hour + ":00 PM";
    }
    else {
        return hour + ":00 AM";
    }
}

function getCorrespondingHour(index) {
    if (index <= 4) {
        return index + 8;
    }
    else {
        return index - 4;
    }
}

function getCorresponding24Hour(index) {
    let val = getCorrespondingHour(index);
    if (val <= 4) {
        val += 12;
    }
    return val;
}

function get12HourFrom24Hour(hour) {
    if (hour >= 13) {
        return (hour - 12) + ':00 PM';
    }
    else if (hour == 12) {
        return hour + ':00 PM';
    }
    else {
        return hour + ':00 AM';
    }
}

function getCorrespondingIndex(time) {
    if (time <= 4) {
        return time + 4;
    }
    else {
        return time - 8;
    }
}

// source: https://stackoverflow.com/questions/133925/javascript-post-request-like-a-form-submit
// Post to the provided URL with the specified parameters.
function post(path, parameters) {
    var form = $j('<form></form>');

    form.attr("method", "post");
    form.attr("action", path);

    $j.each(parameters, function(key, value) {
        var field = $j('<input></input>');

        field.attr("type", "hidden");
        field.attr("name", key);
        field.attr("value", value);

        form.append(field);
    });

    // The form needs to be a part of the document in
    // order for us to be able to submit it.
    $j(document.body).append(form);
    form.submit();
}