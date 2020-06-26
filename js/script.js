$=jQuery;


$('.cv-burgerBtn').click(function(){
  $('.cv-burgerContainer').show();
  $('.cv-burgerClose').show();
});
$('.cv-burgerClose').click(function(){
  $('.cv-burgerContainer').hide();
  $('.cv-burgerBtn').show();
  $('.cv-burgerClose').hide();
});

$(".woocommerce-input-wrapper").before('<br>');
