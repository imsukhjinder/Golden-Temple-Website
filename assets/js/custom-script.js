$(document).ready(function(){

$('.loader').fadeOut(1200);
/*Menu show */
    $(".menubtn").click(function() {
      $(".block-menu li").toggle(500,"linear");
    });

    //resizing-cover text
    (function( $ ){
     $.fn.fitText = function( kompressor, options ) {
       // Setup options
       var compressor = kompressor || 1,
           settings = $.extend({
             'minFontSize' : Number.NEGATIVE_INFINITY,
             'maxFontSize' : Number.POSITIVE_INFINITY
           }, options);

       return this.each(function(){
         // Store the object
         var $this = $(this);
         // Resizer() resizes items based on the object width divided by the compressor * 10
         var resizer = function () {
           $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
         };
         // Call once to set.
         // Call on resize. Opera debounces their resize by default.
         resizer();
       });
         $(window).on('resize.fittext orientationchange.fittext', resizer);
     };
     })( jQuery );
    $(".herotext").fitText(1, { minFontSize: '35px', maxFontSize: '75px' });
    //form empty validation
  $('form').submit(function () {
  // Get the Login Name value and trim it
  var name = $.trim($('#name').val());
  var email = $('#email').val();
  var phone = $('#call').val();
  var msg = $('#mess').val();
  // Check if empty of not
  if (name  === '' || email  === '' || phone  === '' || msg  === '') {
    $('#myModal').css('display','block');
    $('.ermsg').text("Please Fill all Fields");
        return false;
  }
  //check that name has only letters
      if(!name.match(/^[A-Za-z\s]+$/)){
      $('#myModal').css('display','block');
      $('.ermsg').text("Name can have Only Alphabets");
        return false;
      }
  //check that email id is proper
        if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
          $('#myModal').css('display','block');
          $('.ermsg').text("E-mail address is not Valid");
          return false;
        }
  //check that phone has only Number
      if(!phone.match(/^[0-9]+$/)){
        $('#myModal').css('display','block');
        $('.ermsg').text("Phone Number can have Only Numbers");
        return false;
      }
  //check that writing script is not allowed
        if(msg.match(/<script>/i)||msg.match(/<\?php/i)){
          $('#myModal').css('display','block');
          $('.ermsg').text("Writing Script or Php code is not allowed ");
          return false;
        }
});
$('#clsbtn').click(function(){
  $('#myModal').css('display','none');

});
});
