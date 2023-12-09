
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

email.addEventListener('input', email_Verify);
password.addEventListener('input', pass_Verify);



function validated(){
	var emailValue = email.value.trim();
	if (email.value.length < 4 || !isValidEmail(emailValue)) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (password.value.length < 7) {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}

}

function isValidEmail(email) {
	return /\S+@\S+\.\S+/.test(email);
}

function email_Verify(){
	var emailValue = email.value.trim();
    if (email.value.length >= 4 && isValidEmail(emailValue)) {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;
    }
}
function pass_Verify() {
    if (password.value.length >= 7) {
        password.style.border = "1px solid silver";
        pass_error.style.display = "none";
        return true;
    }
}

