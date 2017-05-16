$(document).ready(function () {
    $("#date")
        .datepicker({minDate: 0, maxDate: "+1M"})
        .datepicker("option", "dateFormat", "mm/dd/yy")
        .datepicker("setDate", new Date())
        .datepicker( "option", "showAnim", "slideDown" );
    $("#guests").selectmenu();
    $("#time").selectmenu();
});