$("#ame").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".main").offset().top
    }, 1000);
});

$("#hob").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".main1").offset().top
    }, 1000);
});
$("#con").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact").offset().top
    }, 1000);
});

$(".see").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".main").offset().top
    }, 1000);
});

document.getElementById('send').addEventListener('click',function(){
	alert('Thanks you');
});