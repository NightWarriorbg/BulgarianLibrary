let $btnScrollUp = $('#button-back-to-top');
let $btnHeart = $('.heart');
let $btnRead = $('.read');

let base_url = "http://bulgarian-library.test";

$btnScrollUp.hide();

/**
 * Toggles scroll up button
 */
$(window).on('scroll', function () {
    scrollUp();
});

/**
 * Scrolls up when clicked on button
 */
$btnScrollUp.on('click', function () {
    $("html, body").animate({scrollTop: 0}, "slow");
});

/**
 * Scrolls Up
 */
function scrollUp() {
    if ($(window).scrollTop() > 20) {
        $("#button-back-to-top").fadeIn("slow");
    } else {
        $("#button-back-to-top").fadeOut("slow");
    }
}

/**
 * Add Favorite Hover
 */
$($btnHeart).on({
    'mouseenter': function () {
        $(this).attr("src", base_url + "img/fav-active.png");
    }, 'mouseleave': function () {
        $(this).attr("src", base_url + "img/fav-normal.png");
    }
});


/**
 * Bookmark Hover
 */
$($btnRead).on({
    'mouseover': function () {
        $(this).attr("src", base_url + "img/read-later-active.png");
    }, 'mouseleave': function () {
        $(this).attr("src", base_url + "img/read-later.png");
    }
});
