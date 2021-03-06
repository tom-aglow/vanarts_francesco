$(document).ready(function () {
    //  array with image elements and its length
    var $imgs = $(".gallery-img");
    var picNum = $imgs.length;

    // define variables for index of active picture
    // get starting position - first image in the center
    var index = 0;
    distributeElelementsAround($imgs.eq(index));
    $imgs.eq(index).toggleClass("active");

    
    // define variables for arrows
    var $arrows = $(".controls-arrow-right, .controls-arrow-left");


    $arrows.click(function () {
        $imgs.eq(index).toggleClass("active");

        if (this.className == "controls-arrow-left") {
            if (index == 0) {
                index = picNum - 1;
            } else {
                index--;
            }
        } else if(this.className == "controls-arrow-right") {
            if (index == picNum - 1) {
                index = 0;
            } else {
                index++;
            }
        }

        $imgs.eq(index).toggleClass("active");
        distributeElelementsAround($imgs.eq(index));
    });

    
    
    // function for put elements in even space around central (active) picture

    function distributeElelementsAround ($centralElement) {
        // calculating the standard offset for inactive images
        var offset = ($(".gallery").width() - $centralElement.width()) / (picNum - 1);
        // define base offset for all images
        var base = $centralElement.width() / 2;
        // index of central element that currently active in array of all images
        var centralIndex = $imgs.index($centralElement);
        // arrays for indexes of images that will be on the left and on the right side from central element
        var rightIndexes = [];
        var leftIndexes = [];

        // put central element to its place
        placeElement($centralElement, ("- " + base));
        $centralElement.css("z-index", (picNum - 1) / 2 + 1);


        // find out that images should be in the left and that in the right
        for (var i = 0; i < picNum - 1; i++) {
            if (i < (picNum - 1) / 2) {
                if (centralIndex + i + 1 <= picNum - 1) {
                    rightIndexes.push(centralIndex + i + 1);
                } else {
                    rightIndexes.push(centralIndex + i + 1 - picNum);
                }
            } else {
                if (centralIndex + i + 1 <= picNum - 1) {
                    leftIndexes.push(centralIndex + i + 1);
                } else {
                    leftIndexes.push(centralIndex + i + 1 - picNum);
                }
            }

        }

        // put inactive images in its places
        for (var i = 0; i < rightIndexes.length; i++) {
            // calculate offset for each one
            var rightOffset = base - $imgs.eq(rightIndexes[i]).width() + offset * (i + 1);
            var leftOffset = base + offset * (rightIndexes.length - i);

            // ... right images
            placeElement($imgs.eq(rightIndexes[i]), ("+ " + rightOffset));
            $imgs.eq(rightIndexes[i]).css("z-index", rightIndexes.length - i);

            // ... left images
            placeElement($imgs.eq(leftIndexes[i]), ("- " + leftOffset));
            $imgs.eq(leftIndexes[i]).css("z-index", leftIndexes.indexOf(leftIndexes[i]) + 1);

        }

    }

    // function for put element in certain position from the center of container
    function placeElement ($element, offset) {
        var str = "calc(50% " + offset + "px)";
        $element.css("left", str);
    }
});




