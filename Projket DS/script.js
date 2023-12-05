

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
    var emailValue = email.value.trim();
    if (email.value.length < 4 || !isValidEmail(emailValue)) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    else if (password.value.length < 7) {
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
    } 
}

function emri_Verify() {
    if (emri.value.length > 3) {
        emri.style.border = "1px solid green";
        emri_error.style.display = "none";
        return true;
    } else {
        emri.style.border = "1px solid red";
        emri_error.style.display = "block";
        return false;
    }
}

function email_Verify() {
    var emailValue = email.value.trim();
    if (email.value.length >= 4 && isValidEmail(emailValue)) {
        email.style.border = "1px solid green";
        email_error.style.display = "none";
        return true;
    } else {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        return false;
    }
}

function password_Verify() {
    if (password.value.length >= 8) {
        password.style.border = "1px solid green";
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
        password.style.border = "1px solid green";
        ConfirmPassword_error.style.display = "none"; 
        return true;
    } else {
        password.style.border = "1px solid red";
        ConfirmPassword_error.style.display = "block"; 
        return false;
    }
}



function isValidEmail(email){
    return /\S+@\S+\.\S+/.test(email);
}