function fillup_validation() {
    if( document.fillup_form.v_ID.value == "" ) {
        alert( "Please select a vehicle!" );
        document.fillup_form.v_ID.focus() ;
        return false;
    }
    if( document.fillup_form.date.value == "" ) {
        alert( "Please enter date!" );
        document.fillup_form.date.focus() ;
        return false;
    }
    if( document.fillup_form.odometer.value == "" ) {
        alert( "Please enter the odometer reading!" );
        document.fillup_form.odometer.focus() ;
        return false;
    }
    if( document.fillup_form.quantity.value == "" ) {
        alert( "Please enter quantity of fuel!" );
        document.fillup_form.quantity.focus() ;
        return false;
    }
    if( document.fillup_form.price.value == "" ) {
        alert( "Please enter fuel price!" );
        document.fillup_form.price.focus() ;
        return false;
    }
    if( document.fillup_form.cost.value == "" ) {
        alert( "Please enter total cost" );
        document.fillup_form.cost.focus() ;
        return false;
    }
    if( document.fillup_form.station.value == "" ) {
        alert( "Please enter filling station name!" );
        document.fillup_form.station.focus() ;
        return false;
    }
    return( true );
}

function expense_validation() {
    if( document.expense_form.v_ID.value == "" ) {
        alert( "Please select a vehicle!" );
        document.expense_form.v_ID.focus() ;
        return false;
    }
    if( document.expense_form.date.value == "" ) {
        alert( "Please enter date!" );
        document.expense_form.date.focus() ;
        return false;
    }
    if( document.expense_form.odometer.value == "" ) {
        alert( "Please enter the odometer reading!" );
        document.expense_form.odometer.focus() ;
        return false;
    }
    if( document.expense_form.expense.value == "" ) {
        alert( "Please select type of expense!" );
        document.expense_form.expense.focus() ;
        return false;
    }
    if( document.expense_form.cost.value == "" ) {
        alert( "Please enter total cost" );
        document.expense_form.cost.focus() ;
        return false;
    }
    return( true );
}

function service_validation() {
    if( document.service_form.v_ID.value == "" ) {
        alert( "Please select a vehicle!" );
        document.service_form.v_ID.focus() ;
        return false;
    }
    if( document.service_form.date.value == "" ) {
        alert( "Please enter date!" );
        document.service_form.date.focus() ;
        return false;
    }
    if( document.service_form.odometer.value == "" ) {
        alert( "Please enter the odometer reading!" );
        document.service_form.odometer.focus() ;
        return false;
    }
    if( document.service_form.service.value == "" ) {
        alert( "Please enter type of service!" );
        document.service_form.service.focus() ;
        return false;
    }
    if( document.service_form.center.value == "" ) {
        alert( "Please enter service center name!" );
        document.service_form.center.focus() ;
        return false;
    }
    if( document.service_form.cost.value == "" ) {
        alert( "Please enter total cost" );
        document.service_form.cost.focus() ;
        return false;
    }
    return( true );
}

function add_validation() {
    if( document.add_form.make.value == "" ) {
        alert( "Please enter vehicle make!" );
        document.add_form.make.focus() ;
        return false;
    }
    if( document.add_form.model.value == "" ) {
        alert( "Please enter vehicle model!" );
        document.add_form.model.focus() ;
        return false;
    }
    if( document.add_form.year.value == "" ) {
        alert( "Please enter vehicle registration year!" );
        document.add_form.year.focus() ;
        return false;
    }
    return( true );
}