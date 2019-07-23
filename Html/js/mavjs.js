$(document).ready(function() {
    // create DatePicker from input HTML element
    $("#datepicker").kendoDatePicker();
    var datepicker = $("#datepicker").data("kendoDatePicker");
    var value = datepicker.value();
    kendo.toString(value, "yyyy/mm/dd")

    $("#monthpicker").kendoDatePicker({
        // defines the start view
        start: "month",

        // defines when the calendar should return date
        depth: "year",

        // display month and year in the input
        format: "MMMM yyyy",

        // specifies that DateInput is used for masking the input element
        dateInput: true
    });
});