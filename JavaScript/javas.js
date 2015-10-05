var bla = 0;
var updateClock = function() {
    //vary
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();
    bla = bla + 1;
    var celkem = currentHours + ":" + currentMinutes + ":" + currentSeconds;
    $("#clock").html(celkem);
    $("#text").html(bla);
};

$(document).ready(function() {
    setInterval("updateClock()", 1);
});