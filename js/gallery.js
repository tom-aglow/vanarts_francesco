$(document).ready(function () {
    //  array with image elements
    var $pictures = $(".gallery-img");
    // calculate offset for images
    var offset = ($(".gallery").width() - $(".gallery-img:last-child").width()) / ($pictures.length - 1);

    // apply offset for every image in gallery
    for (var i = 0; i < $pictures.length; i++) {
        $pictures.eq(i).css("left", offset * i);
        $pictures.eq(i).css("z-index", $pictures.length - i)
    }

    // define variables for arrows
    var $arrowLeft = $(".controls-arrow-left");
    var $arrowRight = $(".controls-arrow-right");

    // define variables for active picture and its index
    var $activePicture = $(".gallery-img.active");
    var index = $pictures.index($activePicture);


    $arrowLeft.click(function () {
        $activePicture = $(".gallery-img.active");
        index = $pictures.index($activePicture);

        $activePicture.toggleClass("active");
        if (index == 0) {
            $pictures.eq($pictures.length - 1).toggleClass("active");
            for (var i = 0; i < $pictures.length; i++) {
                $pictures.eq(i).css("z-index", i)
            }
        } else {
            $activePicture.css("z-index", $pictures.length - index);
            $activePicture.prev().toggleClass("active");
            $activePicture.prev().css("z-index", $pictures.length);
        }
    });

    $arrowRight.click(function () {
        $activePicture = $(".gallery-img.active");
        index = $pictures.index($activePicture);

        $activePicture.toggleClass("active");
        if (index == $pictures.length - 1) {
            $pictures.eq(0).toggleClass("active");
            for (var i = 0; i < $pictures.length; i++) {
                $pictures.eq(i).css("z-index", $pictures.length - i)
            }
        } else {
            $activePicture.css("z-index", index);
            $activePicture.next().toggleClass("active");
            $activePicture.next().css("z-index", $pictures.length);
        }
    })
});


