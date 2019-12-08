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