$(document).ready(function() {
    var data = [
        "Aurangabad",
        "Pune"

    ];

    //create AutoComplete UI component
    $("#city").kendoAutoComplete({
        dataSource: data,
        filter: "startswith",
        placeholder: "Select city...",
        separator: ", "
    });
});
$(document).ready(function() {
    var data = [
        "wedding",
        "Birthday Party",
        "Wedding anniversary",
        "Family Get together"

    ];

    //create AutoComplete UI component
    $("#preffered").kendoAutoComplete({
        dataSource: data,
        filter: "startswith",
        placeholder: "Select event type..",
        separator: ", "
    });
});