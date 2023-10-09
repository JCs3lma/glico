$(document).ready(function() {
  var progressValue = 48;

  function setActivePosition() {    
    if (progressValue >= 10) {
      $($('.progress ul li')[0]).find('span').addClass('active');
    }
    if (progressValue >= 25) {
      $($('.progress ul li')[1]).find('span').addClass('active');
    }
    if (progressValue >= 40) {
      $($('.progress ul li')[2]).find('span').addClass('active');
    }
    if (progressValue >= 60) {
      $($('.progress ul li')[3]).find('span').addClass('active');
    }
    if (progressValue >= 75) {
      $($('.progress ul li')[4]).find('span').addClass('active');
    }
    if (progressValue >= 90) {
      $($('.progress ul li')[5]).find('span').addClass('active');
    }
  }
  

  function init() {
    $('#my-page #progressBar').val(progressValue)
    setActivePosition();
  }

  init();
})