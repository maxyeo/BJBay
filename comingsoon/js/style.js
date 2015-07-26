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
}