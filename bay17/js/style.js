$(document).ready(function() {  
    sizeitup();
});

$(window).resize(function() {
    sizeitup();
});

function sizeitup() {
    var bodyh = $(window).height();
    var bodyw = $(window).width();
    if (bodyw > 676) {
        $(".top").css("height",bodyh);
    } else {
        $(".top").css("height","inherit");
    }
    if (bodyh > $('body').height()) {
        $('footer').addClass('sticky');
    }
}

$(window).scroll(function() {
    var bodyh = $(window).height();
    var pos = $(window).scrollTop();
    // var ent = $("#enterprises").offset().top + 185;
    // var tea = $("#team").offset().top - 140;
    if (pos > 0) {
        $('header').addClass('up');
    } else {
        $('header').removeClass('up');
    }
    // if (pos < ent) {
    //  $("#ent-menu").removeClass().addClass("top");
    // } else if (pos > ent && pos < tea) {
    //  $("#ent-menu").removeClass().addClass("move");
    // } else if (pos > tea) {
    //  $("#ent-menu").removeClass().addClass("bot");
    // }
});

//SMOOTH SCROLLING
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 70
                }, 500);
                return false;
            }
        }
    });
});

$("header i").click(function(){
    $("body").toggleClass("shift");
});

var item = $("h1").text();
$("#buy-item input").attr("value", item);

var item = document.URL;
$("#buy-item-link input").attr("value", item);