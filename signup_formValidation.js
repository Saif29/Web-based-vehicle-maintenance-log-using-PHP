function validate_signup() {

    if( document.signupForm.name.value == "" ) {
        alert( "Please provide your name!" );
        document.signupForm.name.focus() ;
        return false;
    }
    if( document.signupForm.username.value == "" ) {
        alert( "Please provide your username!" );
        document.signupForm.username.focus() ;
        return false;
    }
    
    if( document.signupForm.email.value == "") {
        alert( "Please provide your Email!" );
        document.signupForm.email.focus() ;
        return false;
    }
    if( document.signupForm.psw.value == "") {
        alert( "Please provide your password" );
        document.signupForm.psw.focus() ;
        return false;
    }
    if( document.signupForm.repsw.value == "") {
        alert( "Please fill repeat password field!" );
        document.signupForm.repsw.focus() ;
        return false;
    }
    return( true );
}

function validateEmail() {
    var emailID = document.signupForm.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
    
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
    alert("Please enter correct email ID")
    document.signupForm.email.focus() ;
    return false;
    }
    return( true );
}

function validatePass() {
    if( document.signupForm.psw.value == document.signupForm.repsw.value) {
        return true;
    }
    else {
        alert( "Password and Repeat Password does not match!" );
        document.signupForm.repsw.focus() ;
        return false;
    }
}