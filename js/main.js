$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('button') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});