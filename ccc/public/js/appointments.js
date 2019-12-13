var $j = jQuery.noConflict();

// Global variables for the appointment information
// from the server and the selected counselor ID.
var apptInfo;
let counselorId = '-1';

$j(document).ready(function () {

    // When the student ID is submitted, validate input.
    // If the input is valid, load the counselor selector and the date selector.
    $j("#studentIDForm").submit(function(event) {
        event.preventDefault(); // prevent reload

        // If the input is valid...
        if (validateInput()) {
            // Load appointment info and then show the calendar.
            $j.when(loadAppointmentInfo()).done( function(appointmentInfo) {
                apptInfo = appointmentInfo;
                if (apptInfo.success == 'success') {
                    loadCounselorSelector(apptInfo.counselors);
                    counselorId = $j("#counselorForm #selectCounselor").val();
                    loadDateSelector();
                }
                else {
                    // Appointment info could not be loaded from the server. Show an error.
                    let errorElement = '<div class="alert alert-danger input-width" role="alert">Could not load appointment data from server.</div>';
                    $j('.make-an-appointment').append(errorElement);
                }
            });
        }
    });

    // When the user changes which counselor they would like to see,
    // reload the calendar. Then, select the current date.
    $j("#counselorForm").on("change", function(event) {
        event.preventDefault();
        counselorId = $j("#counselorForm #selectCounselor").val();
        loadDateSelector();
        dateChanged(new Date());
    });
});

// User has finalized the appointment they would like to reserve.
// Send the data to the server.
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

// User has clicked on an appointment time. Show a confirmation message
// and make them confirm before it's finalized.
function selectAppointment(counselor_id, hour) {
    event.preventDefault();
    confirmAppt(counselor_id, hour);
}

// Validate the student ID and make sure it's 9 digits long.
function validateInput() {
    let student_id = $j('#IDInputVerify').val();

    if (student_id.length != 9) {
        // Student ID invalid.
        $j("#invalidInputAlert").show();
        $j("#datepicker").hide();
        $j("#counselorForm").hide();
        return false;
    }
    else {
        // Student ID valid. Disable further changes.
        $j("#invalidInputAlert").hide();
        $j('#IDInputVerify').prop('readonly', true);
        $j('#studentIDForm #submitButton').prop('disabled', true);
        return true;
    }
}

// Load data from the server about available counselors,
// dates where the university is closed, and a list of
// appointments that have already been made.
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

// Using the data from the server, load the list of counselors
// so the user can select between them or "First Available."
function loadCounselorSelector(counselors) {
    let keys = Object.keys(counselors);
    let selector = $j('#counselorForm #selectCounselor');

    // Add each counselor as an option for the <select> element.
    for (var i = 0; i < keys.length; i++) {
        let counselor = counselors[keys[i]];
        var optionElement = '<option value="' + counselor['id'] + '">' + counselor['name'] + '</option>';
        selector.append(optionElement);
    }

    $j('#counselorForm').show();
}

// Load the appointment date selector, then unhide it.
function loadDateSelector() {
    // Load closed dates from the data from the server.
    let datesFromServer = apptInfo.closedDates;
    let closedDates = [];
    for (var i = 0; i < datesFromServer.length; i++) {
        closedDates.push(datesFromServer[i].date);
    }

    // Also disable weekends and days for which the currrent
    // counselor has no available appointments.
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

    // Initialize calendar element. Disallow dates before today
    // and dates greater than a year today. Set the default-selected
    // date to today.
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

// Returns whether there are any available appointments given the date
// and the chosen counselor ID. If the counselor "First Available" is
// selected, it will check whether any counselors have appointments
// on that date.
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

// When the selected date on the calendar changes,
// reload the available times shown.
function dateChanged(date) {
    $j('#timeForm').empty();
    initializeDatePicker(date);
}

// Initialize the date picker based on the counselor selected.
function initializeDatePicker(date) {
    if (counselorId == '-1') {
        // "First Available" selected; load results for all counselors
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
        // Load results for a single selected counselor
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

// Get elements for the available appointments per
// counselor (given their available times).
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

// Gets the available appointments per counselor given the
// date chosen and the counselor's ID.
function getAvailableApptsForCounselor(date, id) {
    // Start with the counselor's working hours. These are stored in
    // the database as a string of 9 digits, with a 1 or a 0 in each
    // place indicating whether the counselor is available.
    // The order of the digits represent the times: 8 9 10 11 12 1 2 3 4.
    let counselor = apptInfo.counselors[id];
    let apptKeys = Object.keys(apptInfo.appointments);
    var conflictingAppts = [];

    // Load other appointments that may be conflicting. This includes
    // appointments that are on the same date with the same counselor.
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

    // For each conflicting appointment, change the corresponding value
    // for that 'available time' to zero, indicating that the counselor is
    // not available at that time.
    for (var i = 0; i < conflictingAppts.length; i++) {
        let appt = conflictingAppts[i];
        let apptDate = new Date(appt['date_time']);
        let apptHours = apptDate.getHours();
        let index = getCorrespondingIndex(apptHours);
        availableTimes[index] = '0';
    }
    return availableTimes;
}

// When the user has clicked on a time for an appointment, send a
// confirmation box to make sure that they want to schedule the appointment.
// If they confirm, submit the appointment to the database.
function confirmAppt(counselor_id, hour) {
    let counselorName = apptInfo.counselors[counselor_id]['name'];
    let apptDate = $j('#dateForm').val();
    var modalText = 'You are about to reserve an appointment with ' + counselorName + ' on ' + apptDate + ' at ' + get12HourFrom24Hour(hour) + '. Are you sure?';
    var confirmed = confirm(modalText);

    if (confirmed) {
        submitAppt(counselor_id, hour);
    }
}

// Formats a given date string as dd-mm-yyyy
function formatDate(dateString) {
    let date = new Date(dateString);
    return date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear()
}

// Gets the corresponding time (including the AM/PM)
// given the index in the available times" array for a counselor.
function getCorrespondingTime(index) {
    let hour = getCorrespondingHour(index);
    if (hour <= 4 || hour == 12) {
        return hour + ":00 PM";
    }
    else {
        return hour + ":00 AM";
    }
}

// Gets the corresponding hour given the index in the
// "available times" array for a counselor.
function getCorrespondingHour(index) {
    if (index <= 4) {
        return index + 8;
    }
    else {
        return index - 4;
    }
}

// Gets the corresponding hour (within 24 hours) given the index
// in the "available times" array for a counselor.
function getCorresponding24Hour(index) {
    let val = getCorrespondingHour(index);
    if (val <= 4) {
        val += 12;
    }
    return val;
}

// Gets a 12-hour timestamp including the ":00 AM/PM" given
// an hour 0-23.
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

// Gets the index in the "available times" array for a counselor
// given the time 1-12.
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
// This is used to mock out an input since we actually have multiple forms on this page.
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