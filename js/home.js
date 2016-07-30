 function myFunction() {
    document.getElementsByClassName("nav1")[0].classList.toggle("responsive");
	}
 function myFunction1() {
	document.getElementsByClassName("login-block1")[0].classList.remove("responsive2");
    document.getElementsByClassName("login-block")[0].classList.toggle("responsive1");
	}
function myFunction2() {
	document.getElementsByClassName("login-block")[0].classList.remove("responsive1");
    document.getElementsByClassName("login-block1")[0].classList.toggle("responsive2");
	}
	
$('#cp').on('keyup', function () {
    if ($(this).val() == $('#p').val()) {
        $('#message').html('matching').css('color', 'green');
    } else $('#message').html('not matching').css('color', 'red');
})