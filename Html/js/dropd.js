$(document).ready(function() {
    var data = [
        "Aurangabad",
        "Pune",
        "nashik",
        "mumbai",
        "Nagpur"
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
        "Wedding",
        "Wedding Anniversary",
        "Birthday Parties",
        "Get together"

    ];

    //create AutoComplete UI component
    $("#event").kendoAutoComplete({
        dataSource: data,
        filter: "startswith",
        placeholder: "Select event..",
        separator: ", "
    });
});