$(document).ready(function() {
    $("#register").click(function() {
        var name = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var cpassword = $("#password1").val();
        if (name == '' || email == '' || password == '' || password1 == '') {
            alert("Please fill all fields...!!!!!!");
            $('#formID').attr('onSubmit', 'return false');
        } else if ((password.length) < 8) {
            alert("Password should atleast 8 character in length...!!!!!!");
            $('#formID').attr('onSubmit', 'return false');
        } else if (!(password).match(password1)) {
            alert("Your passwords don't match. Try again?");
            $('#formID').attr('onSubmit', 'return false');
        } else {
            $('#formID').attr('onSubmit', 'return true');
        }
    });
});