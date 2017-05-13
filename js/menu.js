var boxNamesList = ['salads', 'main-courses', 'desserts'];
var boxImgStr = '';
var animationTime = 1000;

for (var i = 0; i < boxNamesList.length - 1; i++) {
    boxImgStr += "#" + boxNamesList[i] + "-img, ";
}
boxImgStr += "#" + boxNamesList[boxNamesList.length - 1] + "-img";

var $boxTarget = $(boxImgStr);
var boxClicked;

function changeBoxOpacity (box, opacity) {
    // box - opacity will be changed for all boxes in the list except 'box'
    // opacity - value of opacity

    for (var i = 0; i < boxNamesList.length; i++) {
        if (boxNamesList[i] + '-img' !== box) {
            $('#' + boxNamesList[i] + '-img').animate({
                opacity: opacity
            },animationTime);
        }
    }
}

$(document).ready(function () {
    $boxTarget.click(function () {
        var box = this.id;
        var copy = "#" + box.replace('-img', '-copy');

        changeBoxOpacity(box, 0);

        $(this).css("z-index", "1");
        $('#' + box + ' > h1').animate({
            opacity: "0"
        }, animationTime);
        $(copy).css("z-index", "2");
        $(this).animate(
            {
                width: "100%",
                left: 0
            },
            animationTime,
            function () {
                $(copy).animate({opacity: 1}, animationTime);
            }
        );

        boxClicked = this.id;
    });


    $(document).click(function (e) {
        var $box = $("#" + boxClicked);
        var $copy = $("#" + boxClicked.replace('-img', '-copy'));

        if (e.target != $box[0] && !$box.has(e.target).length &&
            e.target != $box[0] && !$box.has(e.target).length) {

            var pos = boxNamesList.indexOf(boxClicked.replace('-img', '')) * 100 / 3;

            $box.animate(
                {
                    width: 100 / 3 + "%",
                    left: pos + "%"
                },
                animationTime
            );
            $copy.animate({opacity: 0}, animationTime, function () {
                $box.css("z-index", "0");
                $copy.css("z-index", "0");
                changeBoxOpacity(boxClicked, 1);
                $('#' + boxClicked + ' > h1').animate({
                    opacity: "1"
                }, animationTime);
            });

        }
    });
});