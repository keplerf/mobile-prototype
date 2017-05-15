// $(window).scroll(function() {
//     var scroll = $(window).scrollTop();
//
//     if (scroll >= 500) {
//       $(".navbar").addClass("navbar-fixed-top");
//     }
// });

// new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
$( document ).ready(function() {

  $('.closeBtn').click(function(){
    // $( this ).slideUp();
    $(this).closest('.message').slideUp();
  });

// var height = $('#mp-pusher').height();
// $('#mypanel').css('height', height );
// console.log(height);


// Desktop Main nav
$('.mainNav a').on('click',function(evt){
  evt.preventDefault(evt);
  var link = $(this).data('menu');
  $('.dropdownMenu .menu-panel').removeClass('show')
  $('#desktop-nav .mainNav ul a').removeClass('selected')
  $(this).toggleClass('selected');

  $('.'+link+'-menu').toggleClass('show');

});

$('.shopbymenu .mainmenu a').on('click',function(evt){
  $(this).toggleClass('active');
  $('.shopbypanel').slideDown('fast');
});




//
// Main nav toggle
  $('.navbar-toggle').on('click' , function(evt){
    evt.preventDefault();
    var height = $('#mp-pusher').height();
    $('#mypanel').toggleClass('active');
    $('body').find('.mp-level').removeClass('active')
    $('#mp-menu').css('height', height );

  });


// Button btn-active for menu - find the .mp-level
  $('.btn-active').on('click' , function(evt){
    var element = $(this).parent().children('.mp-level:first').addClass('active');
    // console.log(element);
  })

  // Back button hide t
  $('.mp-back').on('click' , function(evt){
    $(this).parent().toggleClass('active');

  })

  // Button btn-simple for menu - find the .mp-level
    $('.btn-simple').on('click' , function(evt){
      evt.preventDefault();
      if ( $(this).hasClass('active') ) {

          $(this).parent().children('.mp-simple:first').hide('slow');
          $(this).removeClass('active');
          console.log('active');
      } else {

          $(this).parent().children('.mp-simple:first').show('slow');
          $(this).addClass('active');
          console.log('no active');

      }

      // console.log(element);
    }
  )


});
