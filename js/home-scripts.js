$(document).ready(function(){

  $("#homeNavItem").css("border-bottom", "2px solid #F93822");

  /**
  *  TRANSPARENT NAVBAR TRIGGER
  **/
  $(window).on('scroll', function() {
      var y_scroll_pos = window.pageYOffset;
      var scroll_pos_test = 0;             // set to whatever you want it to be

      if(y_scroll_pos > scroll_pos_test) {
        // SCROLL ICON
        $("#scrollReminderDiv").removeClass("animate-flicker");
        $("#scrollReminderDiv").addClass("hidden");

        // NAV
        $("nav").removeClass("transparent");
        $("nav").addClass("black");
        $("nav").addClass("z-depth-2");
        $(".brand-logo img").fadeIn("slow");
      } else {
        $("nav").addClass("transparent");
        $("nav").removeClass("black");
        $("nav").removeClass("z-depth-2");
        $("nav").removeClass("z-depth-2");
        $(".brand-logo img").fadeOut("fast");
      }
  });

  /**
  *  HEXAGON HANDLING
  **/

  $(".howIWorkCover").children().hide();

  $(".r-hex-inner-2").hover(
    function() {
      const type = $(this).attr("type");
      if ( type == "orange" ) {
          $(this).find(".r-hex-text h3").removeClass("white-text");
          $(this).find(".r-hex-text h3").addClass("webTextOrange");
      } else if ( type == "white" ) {
          $(this).find(".r-hex-text h3").removeClass("black-text");
          $(this).find(".r-hex-text h3").addClass("white-text");
      }

    }, function() {
      const type = $(this).attr("type");
      if ( type == "orange" ) {
          $(this).find(".r-hex-text h3").removeClass("webTextOrange");
          $(this).find(".r-hex-text h3").addClass("white-text");
      } else if ( type == "white" ) {
          $(this).find(".r-hex-text h3").removeClass("white-text");
          $(this).find(".r-hex-text h3").addClass("black-text");
      }

    }
  );


  // Controls How-I-Work-Cover
  function pgControl(pgNum){

      // Color fix:
      $(".breadcrumb").removeClass("webTextOrange"); //reset
      if ( pgNum == "1" ) {
          $(".evalTitle").addClass("webTextOrange");
      } else if ( pgNum == "2" ) {
          $(".orgTitle").addClass("webTextOrange");
      } else if ( pgNum == "3" ) {
          $(".execTitle").addClass("webTextOrange");
      } else if ( pgNum == "4" ) {
          $(".anaTitle").addClass("webTextOrange");
      }
      $(".allPgs").fadeOut(200);
      window.setTimeout(function(){$(".pg"+pgNum).fadeIn(200);}, 200);
  }

  $(".r-hex-inner-2").click(function(){

      $(".howIWorkCover").children().show();
      $(".howIWorkCover").css("width", "100%");
      const pgNum = $(this).attr("name");
      pgControl(pgNum);

  });

  $(".closeHowIWorkCover").click(function(){

      $(".howIWorkCover").children().hide();
      $(".howIWorkCover").css("width", "0px");

  });

  $(".closeHowIWorkCover2").click(function(){

      $(".howIWorkCover").children().hide();
      $(".howIWorkCover").css("width", "0px");

  });


  $(".breadcrumb").click(function(){

      const pgNum = $(this).attr("name");
      pgControl(pgNum);

  });

  // Qualifications functions:
$(".expQuaDiv").hover(
    function() {
      if(expQuaDivHoverable) {
          $(this).find(".fa").addClass("black-text");
          $(this).find(".fa").removeClass("webTextOrange");
      }
    }, function() {
      if(expQuaDivHoverable) {
          $(this).find(".fa").removeClass("black-text");
          $(this).find(".fa").addClass("webTextOrange");
      }
    }
  );

  var expQuaDivHoverable = true;
  $(".expQuaDiv").click(function(){

     const clicked  = $(this).attr("type");
     expQuaDivHoverable = false;
     $(".quaDivs").fadeOut("100");
     $(".quaDivs").find('div').addClass("hidden");

     window.setTimeout(function(){
      //Fix Icon (non clickable/hoverable)
      $(clicked).find(".expQuaDiv").css("transform","scale(1.1)");
      $(clicked).find(".expQuaDiv").css("cursor","default");
      $(clicked).find(".expQuaDiv .fa").removeClass("webTextOrange");
      $(clicked).find(".expQuaDiv .fa").addClass("black-text");

      $(clicked).removeClass("l4");
      $(clicked).addClass("l12");

      if( $(window).width() <= 320) {
          $("#myExpertise").animate({"height" : "1400px"}, 200);
      } else if ( $(window).width() <= 350 ) {
          $("#myExpertise").animate({"height" : "1200px"}, 200);
      } else if ( $(window).width() <= 440 ) {
          $("#myExpertise").animate({"height" : "1150px"}, 200);
      } else if ( $(window).width() > 440 ) {
          $("#myExpertise").animate({"height" : "1050px"}, 200);
      }
      $(clicked).find("div").removeClass("hidden");

     },300);

     window.setTimeout(function(){
      $(clicked).fadeIn("100");
     },400);

  });

  $(".goBackQuaBtn").click(function(){
      expQuaDivHoverable = true;
     $(".quaDivs").fadeOut("100");
     window.setTimeout(function(){
      // Reset Icons
      $(".expQuaDiv").css("cursor","pointer");
      $(".expQuaDiv").css("transform","scale(1)");
      $(".expQuaDiv .fa").addClass("webTextOrange");
      $(".expQuaDiv .fa").removeClass("black-text");

      $(".quaDivs").removeClass("l12");
      $(".quaDivs").addClass("l4");
      $("#myExpertise").animate({"height" : "750px"}, 200);
      $(".quaDivs").find("div").removeClass("hidden");
      $(".txtDiv").addClass("hidden");

     },300);

     window.setTimeout(function(){
      $(".quaDivs").fadeIn("100");
     },500);

  });

});
