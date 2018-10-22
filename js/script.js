var j = jQuery.noConflict();

j('.js-main-nav-overlay').on('click',function(e){
  var target = j(e.target);
  if(target.is('.main-nav-cont') || target.parents().is('.main-nav-cont')){
    return;
  }else{
    hideNav();
  }
})

j('.js-menu-button').on('click',showNav);

j('.js-nav-close').on('click',hideNav)

function showNav(){


  j('.js-main-nav-cont').css('transform','translateX(0)');
    j('.js-main-nav-overlay').css('width','100%');
}

function hideNav(){

  j('.js-main-nav-cont').css('transform','translateX(280px)');
    j('.js-main-nav-overlay').css('width','auto');
}

j('.menu-item.has-children').after().on('click',function(e){
  j(e.target).children('.sub-menu').slideToggle();
});
