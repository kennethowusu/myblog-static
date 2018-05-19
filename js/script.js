$('.js-main-nav-overlay').on('click',function(e){
  var target = $(e.target);
  if(target.is('.main-nav-cont') || target.parents().is('.main-nav-cont')){
    return;
  }else{
    $('.main-nav-overlay').hide();
  }
})
