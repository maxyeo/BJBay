$(document).ready(function() {  
    sizeitup();
});

$(window).resize(function() {
  sizeitup();
});

function sizeitup() {
  var bodyh = $(window).height() * .9;
  var bodyw = $(window).width();
  if (bodyw > 610) {
    $(".top").css("height",bodyh);
  } else {
    $(".top").css("height","inherit");
  }
}