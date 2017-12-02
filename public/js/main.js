$(document).ready(function() {
    // Variables
    var $headerH1 = $('.textArea h1');
    var $headerP = $('.textArea p');
    var $headerA = $('.textArea a');
    var $navMenuIcon = $('.navMenuIcon');
    var $mainNavMenu = $('.mainNavMenu');
    var $mainNavMenuLink = $('.mainNavMenu ul li a');
    var $contactingForm = $('.contactUsSecion #contactUsForm');
    var $quoteButton = $('.customerQuoteButton');
    var $customerQuote = $('.customerQuote');
    var $root = $('html, body');
    var $scheduleLink = $('.scheduleACall .scheduleForm h3 button');
    var $schedulePopUp = $('.popUpSchedule');
    var $exitButton = $('.exitButton');
    // Operations
    AOS.init();
    $contactingForm.fadeIn(1000);
    $headerH1.animate({left: '0'}, 2200);
    $headerP.animate({left: '0'}, 3000);
    $headerA.animate({left: '0'}, 3500);
    $navMenuIcon.on('click', function() {
        $mainNavMenu.slideToggle('fast');
    });
    /* $quoteButton.on('click', function() {
        $customerQuote.slideToggle('slow');
    }); */
    
    // Slowing Scroll Speed on Anchor Click
    $("a[href^='#']").click(function () {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 1500);
    
        return false;
    });
    $mainNavMenuLink.on('click', function() {
        $mainNavMenu.slideUp('slow');
    });
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('#timepicker1').timepicker();
    $scheduleLink.on('click', function(e) {
        e.preventDefault();
        $schedulePopUp.fadeIn('slow');
    });
    $exitButton.on('click', function(e) {
        e.preventDefault();
        $schedulePopUp.fadeOut('slow');
    });
});