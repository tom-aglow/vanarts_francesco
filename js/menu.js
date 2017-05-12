var boxNamesList = ['salads', 'main-courses', 'desserts'];
var boxImgStr = '';

for (var i = 0; i < boxNamesList.length - 1; i++) {
    boxImgStr += "#" + boxNamesList[i] + "-img, ";
}
boxImgStr += "#" + boxNamesList[boxNamesList.length - 1] + "-img";

var $boxTarget = $(boxImgStr);
var boxClicked;

$(document).ready(function () {
    $boxTarget.click(function () {
        var box = this.id;
        var copy = "#" + box.replace('-img', '-copy');

        console.log(copy);
        for (var i = 0; i < boxNamesList.length; i++) {
            if (boxNamesList[i] + '-img' !== box) {
                $('#' + boxNamesList[i] + '-img').addClass('hide');
                // $('#' + boxNamesList[i] + '-img').animate({
                //     width: "0"
                // },500);
            }
        }

        $(this).css("z-index", "1");
        $('#' + box + ' > h1').animate({
            opacity: "0"
        }, 500);
        $(copy).css("z-index", "2");
        $(this).animate(
            {
                width: "100%",
                left: "0"
            },
            500,
            function () {
                $(copy).animate({opacity: 1}, 500);
            }
        );

    });


    // $(document).click(function (e) {
    //     var $elem = $("#" + boxClicked);
    //     var $text = $("#" + boxClicked + "-text");
    //     console.log($text);
    //     var posBox;
    //
    //     if (e.target != $elem[0] && !$elem.has(e.target).length &&
    //         e.target != $text[0] && !$text.has(e.target).length) {
    //         switch(boxClicked) {
    //             case "blue":
    //                 posBox = "0";
    //                 break;
    //             case "green":
    //                 posBox = "33.33%";
    //                 break;
    //             case "red":
    //                 posBox = "66.66%";
    //                 break;
    //         }
    //
    //         $elem.animate(
    //             {
    //                 width: "33.33%",
    //                 left: posBox
    //             },
    //             500,
    //             function () {
    //                 $text.animate({opacity: 0}, 500, function () {
    //                     $text.animate({
    //                             width: "33.33%",
    //                             left: 0
    //                         }, 0
    //                     );
    //                     $elem.css("z-index", "0");
    //                     $text.css("z-index", "0");
    //                 });
    //             }
    //         );
    //
    //     }
    // });
});