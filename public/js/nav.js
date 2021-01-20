
$(window).scroll(example);

function example() {
    console.log("error");
    var tempScrollTop = $(window).scrollTop();
    console.log(tempScrollTop);
    if (tempScrollTop > 200 ) {
        $("nav").css("background-color","white")
    }
    else{
        $("nav").css("background-color","rgba(255,0,0,0)").css("transition","1s")
    }


};

(function () {
$('.prevent-multi-submit').on('submit',function () {
$('.prevent-multi-submit-button').attr('disabled','true')
})
})();


$(window).on("load",function () {
    $(".container-fluid.load").fadeOut('50');
});





