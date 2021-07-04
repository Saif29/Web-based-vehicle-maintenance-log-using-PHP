function validate_login() {

    if( document.login_form.username.value == "" ) {
        alert( "Please provide your username!" );
        document.login_form.username.focus() ;
        return false;
    }
    if( document.login_form.psw.value == "" ) {
        alert( "Please provide your password!" );
        document.login_form.psw.focus() ;
        return false;
    }
    return( true );
}
