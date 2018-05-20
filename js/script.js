$('.js-main-nav-overlay').on('click',function(e){
  var target = $(e.target);
  if(target.is('.main-nav-cont') || target.parents().is('.main-nav-cont')){
    return;
  }else{
    hideNav();
  }
})

$('.js-menu-button').on('click',showNav);

$('.js-nav-close').on('click',hideNav)

function showNav(){


  $('.js-main-nav-cont').css('transform','translateX(0)');
    $('.js-main-nav-overlay').css('width','100%');
}

function hideNav(){

  $('.js-main-nav-cont').css('transform','translateX(280px)');
    $('.js-main-nav-overlay').css('width','auto');
}

$('.menu-item.has-children').after().on('click',function(e){
  $(e.target).children('.sub-menu').slideToggle();
});
