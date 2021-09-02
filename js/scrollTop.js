$(function ($) {
    $('#greenBtn').on('click',function(){
        const greenTop = $('#green').offset().top;
        $("html").animate({scrollTop: greenTop});
    });
});