var $j = jQuery.noConflict();

$j(document).ready(function () {
    $j("#studentIDForm").submit(function(event) {
        event.preventDefault(); // prevent reload

        if (validateInput()) {
            $j.when(loadAppointmentInfo()).done( function(apptInfo) {
                console.log(apptInfo);
                // $j("#datepicker").show();
                // flatpickr("#datepicker", {
                //     minDate: 'today',
                //     maxDate: new Date().fp_incr(365)
                // });
                loadCounselorSelector(apptInfo.counselors);
            });
        }
    });
});

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
    // console.log(counselors);
    let keys = Object.keys(counselors);
    let selector = $j('#counselorForm #selectCounselor');

    for (var i = 0; i < keys.length; i++) {
        let counselor = counselors[keys[i]];
        var optionElement = '<option value="' + counselor['id'] + '">' + counselor['name'] + '</option>';
        selector.append(optionElement);
    }
    
    $j('#counselorForm').show();
}