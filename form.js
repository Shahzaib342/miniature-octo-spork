


function myFunction(variab) {
  //alert(variab);
  //console.log(formsName.addClass('display-hide'))
  var formsName = $('.form-container');
  var activeMenue = $('.icon-body-wrapper');
  
  formsName.removeClass('display-show')
  activeMenue.removeClass('active-border')
  $(".fa-check").css("visibility", "hidden")
  
  formsName.addClass('display-hide')
  $('#'+variab+'-form').addClass('display-show')
  $('#'+variab+'-menu').addClass('active-border')
  $('#'+variab+'-tick').css("visibility", "visible")
}
