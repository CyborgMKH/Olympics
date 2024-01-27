
$(document).ready(function(){
    var navbar = $('#navbar');
    var scrollTop=$('#scrollToTop');
      function checkScrollPosition()
      {
        var scrollPos = $(window).scrollTop();

        if (scrollPos > 50 || scrollPos === $(document).height() - $(window).height())
        {
            scrollTop.css('opacity','1');
            navbar.addClass("shadow-lg");
            navbar.removeClass("py-2");
          }
          else
          {
            navbar.addClass("py-2");
            navbar.removeClass("shadow-lg");
            scrollTop.css('opacity','0');
          }
          
      }
      checkScrollPosition();
      $(window).scroll(function() {
        checkScrollPosition();
      });


    $('#scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

    $('.dropdown-btn .menu').click(function(event) {

      var $dropdownMenu = $(this).closest('.dropdown-btn').find('.dropdown-menu');
      var $icon = $(this).closest('.dropdown-btn').find('.dropdown-icon');

      $icon.toggleClass('fa-plus fa-minus');
      $dropdownMenu.toggleClass('active');
  });

    
});

function menuBtn() {
  var element = $('#mobnav');
  var mobileIcon = $('#mobile-icon');
  element.toggleClass("active");
  mobileIcon.toggleClass("active");
  $("body").toggleClass('overflow-hidden'); 
} 

