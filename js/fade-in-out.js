jQuery(function(){
  $(window).on('scroll', function(){
    if (jQuery(window).scrollTop() > 70) {
      jQuery('.p-header__title__wrapper').css('visibility','hidden');
    } else {
      jQuery('.p-header__title__wrapper').css('visibility','');
    }
  });
});