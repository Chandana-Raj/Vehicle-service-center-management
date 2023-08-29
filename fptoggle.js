/* Show login form on button click */
 
$('.customerBtn').click(function(){
  $('.customerLogin').show();
  $('.admin').hide();
  /* border bottom on button click */
  $('.customerBtn').css({'border-bottom' : '2px solid #ff4141'});
  /* remove border after click */
  $('.adminBtn').css({'border-style' : 'none'});
});
 
 
/* Show sign Up form on button click */
 
$('.adminBtn').click(function(){
  $('.customerLogin').hide();
  $('.admin').show();
  /* border bottom on button click */
  $('.adminBtn').css({'border-bottom' : '2px solid #ff4141'});
   /* remove border after click */
   $('.customerBtn').css({'border-style' : 'none'});
});