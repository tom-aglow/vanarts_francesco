$(document).ready(function () {
    console.log($(window).width());
    $(".page-container").css({
        "width": $(window).height() / 3 * 4,
        "height": $(window).height()
    })
});

