function validateForm() {

    var n = document.myForm.preffered.value;
    var c = document.myForm.city.value;

    if (n == null || n == "") {
        alert("Name can't be blank");
        return false;
    } else if (c == null || c == "") {
        alert("Password must be at least 6 characters long.");
        return false;
    } else {
        return true;
    }
}