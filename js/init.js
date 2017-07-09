$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $('.slider').slider();
    $(".dropdown-button").dropdown({hover: true, belowOrigin:true});

    $(".expanded").hide();

    $(".expanded a, .collapsed a").click(function(eve) {
        var $container = $(this).parents("div");
        eve.preventDefault();
        $container.children(".expanded, .collapsed").toggle();
    });
      $('.carousel.carousel-slider').carousel();
            $('.carousel').carousel();
                $('.materialboxed').materialbox();

    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

    $('.timepicker').pickatime({
    default: 'now', // Set default time
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker  
  });

})