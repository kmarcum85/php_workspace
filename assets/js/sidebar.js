$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
        
    });
    $('#sidebarCollapse').on('click', function () {
        // open or close navbar
        $('#sidebar').toggleClass('active');
        // set header as active
        $('#header').toggleClass('active');
        // set content as active
        $('#content').toggleClass('active');
        // close dropdowns
        $('.collapse.in').toggleClass('in');
        // and also adjust aria-expanded attributes we use for the open/closed arrows
        // in our CSS
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});