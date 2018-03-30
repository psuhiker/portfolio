$(document).ready(function () {

    "use strict";
    $('.panels').each(function () {
        var highestBox = 0;

        $(this).find('.text').each(function () {
            if ($(this).height() > highestBox) {
                highestBox = $(this).height();
            }
        });

        $(this).find('.text').height(highestBox);
    });
    
    $('.panels').each(function () {
        var highestBox = 0;

        $(this).find('.title').each(function () {
            if ($(this).height() > highestBox) {
                highestBox = $(this).height();
            }
        });

        $(this).find('.title').height(highestBox);
    });


});