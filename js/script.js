$(document).ready(function(){
    $("#banner").css({"height":$(window).height() + "px"});

    var x = false;
    var scroll;

    $(window).scroll(function(){
        scroll = $(window).scrollTop();

        if(scroll > 200){
            if(!x){
                $("h1").css({"margin-top": "24px", "font-size": "25px"});
                $("header").css({"background-color": "rgba(0, 0, 0, 0.5)"});

                x=true;
            }
        }else if (scroll < 50){
            if(x){
                $("h1").css({"margin-top": "150px", "font-size": "150px"});
                $("header").css({"background-color": "rgba(0, 0, 0, 0.5)"});
                x = false;
            }
        }
    });
});
