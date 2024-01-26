var emri = document.forms['form']['emri'];
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];
var ConfirmPassword = document.forms['form']['Confirm_password']; 

var emri_error = document.getElementById('emri_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var ConfirmPassword_error = document.getElementById('ConfirmPassword_error');

emri.addEventListener('input', emri_Verify);
email.addEventListener('input', email_Verify);
password.addEventListener('input', password_Verify);
ConfirmPassword.addEventListener('input', ConfirmPassword_Verify);

function validated(){
    if (emri.value.length < 3) {
        emri.style.border = "1px solid red";
        emri_error.style.display = "block";
        emri.focus();
        return false;
    }
    else if (email.value.length < 9) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    else if (password.value.length < 6) {
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        password.focus();
        return false;
    }    
    else if (password.value !== ConfirmPassword.value) {
        password.style.border = "1px solid red";
        ConfirmPassword_error.style.display = "block";
        ConfirmPassword.focus();
        return false;
    } else {
        return true;
    }
}

function emri_Verify() {
    if (emri.value.length < 3) {
        emri.style.border = "1px solid silver";
        emri_error.style.display = "none";
        return true;
    } else {
        emri.style.border = "1px solid red";
        emri_error.style.display = "block";
        return false;
    }
}

function email_Verify() {
    if (email.value.length >= 8) {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;
    } else {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        return false;
    }
}

function password_Verify() {
    if (password.value.length >= 5) {
        password.style.border = "1px solid silver";
        password_error.style.display = "none"; 
        return true;
    } else {
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        return false;
    }
}

function ConfirmPassword_Verify() {
    if (password.value === ConfirmPassword.value) {
        password.style.border = "1px solid silver";
        ConfirmPassword_error.style.display = "none"; 
        return true;
    } else {
        password.style.border = "1px solid red";
        ConfirmPassword_error.style.display = "block"; 
        return false;
    }
}
