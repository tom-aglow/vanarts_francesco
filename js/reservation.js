$(document).ready(function () {
    // add datepicker styles and settings to the element
    $("#date")
        .datepicker({minDate: 0, maxDate: "+1M"})
        .datepicker("option", "dateFormat", "mm/dd/yy")
        .datepicker("setDate", new Date())
        .datepicker( "option", "showAnim", "slideDown" );

    // add select menu styles and settings to the elements
    $("#guests").selectmenu();
    $("#time").selectmenu();
});