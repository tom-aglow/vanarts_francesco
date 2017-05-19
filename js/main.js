$(document).ready(function () {
    $(".mobile-nav-toggle").click(function () {
        $(this).toggleClass("is-open");
        $(this).parent().next().toggleClass("is-open");
        $(".arrow-down").toggleClass("hide-fast");
    });

    $(window).scroll(function () {
        $(".arrow-down").fadeOut(1000);
    });
});
