$(document).ready(function(){

    $("#slider1 a").first().show();

    var index = 0;
    var count = 5;

    function bannerRotator() {
        $('#slider1 a').delay(4300).eq(index).fadeOut(function() { 
            if (index === count){
                index = -1;
            }
            
            $('#slider1 a').eq(index + 1).fadeIn(function() {
                index++;
                bannerRotator();
            });
        });
    }
    bannerRotator();

	});
