//this function will make the error alerts timeout after 3 seconds
window.setTimeout(function() {
  $("#alertMessage1,#alertMessage2,#alertMessage3,#alertMessage4,#alertMessage5,#alertMessage6").fadeTo(500, 0).slideUp(500, function(){
    $(this).remove(); 
  });
}, 3000);