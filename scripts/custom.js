$(document).ready(function() {     
  $("#hamburger-menu").click(function(event) {
    event.preventDefault();
    event.stopPropagation();  
    $(this).next().slideToggle("200");
  });
  
  if($("#hamburger-menu").is(":visible")) {
    $("body").click(function(event) {
      event.preventDefault();
      event.stopPropagation();  
      $("#hamburger-menu").next().slideUp("100");
    });
  }

});