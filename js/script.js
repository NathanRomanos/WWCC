$=jQuery;


$('.cv-sidebarButton').click(function(){
  $('.cv-sidebarSecondary').show();
  $('.cv-sidebarButton').hide();
  $('.cv-sidebarClose').show();
});
$('.cv-sidebarClose').click(function(){
  $('.cv-sidebarSecondary').hide();
  $('.cv-sidebarButton').show();
  $('.cv-sidebarClose').hide();
});
