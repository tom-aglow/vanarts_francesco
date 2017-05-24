$(document).ready(function () {

    // event - click on mobile nav hamburger menu
    $(".mobile-nav-toggle").click(function () {
        $(this).toggleClass("is-open");
        $(this).parent().next().toggleClass("is-open");
        $(".arrow-down").toggleClass("hide-fast");
    });

    // event - scroll on mobile devices
    $(window).scroll(function () {
        $(".arrow-down").fadeOut(1000);
    });

    // adding custom scroll bar to the elements that contains text
    $('.scroll-pane').jScrollPane();
});
