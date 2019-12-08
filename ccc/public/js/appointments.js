$(document).ready(function () {
    $("#studentIDForm").submit(function (event) {
        event.preventDefault(); // prevent reload
        console.log("testing");
        validateInput();
        // textIsInappropriate(this); // form validation
    });
});

function validateInput() {
    var x;
    x = $('#IDInputVerify').val();
    if (x.length != 9) {
        $("#invalidInputAlert").show();
        return false;
    }
    else {
        $("#invalidInputAlert").hide();
    }
} 