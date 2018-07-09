<!DOCTYPE html>
<html>

<head>
  <!-- Title SEO -->
  <title>devmattb - Home</title>
  <meta itemprop="name" content="devmattb - Home">
  <meta property="og:title" content="devmattb - Home">
  <meta name="twitter:title" content="devmattb - Home">

  <!-- Webpage Thumbnail pic SEO -->
  <meta itemprop="image" content="http://devmattb.com/img/thumbnail_website.PNG">
  <meta property="og:image" content="http://devmattb.com/img/thumbnail_website.PNG">
  <meta name="twitter:image" content="http://devmattb.com/img/thumbnail_website.PNG">

  <!-- STANDARD HEADER -->
  <?php include("includes/header.html") ?>

  <!-- DEVMATTB CSS -->
  <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
  <link type="text/css" rel="stylesheet" href="css/slider.css" />

  <script>

      $(document).ready(function(){


        $(window).on('scroll', function() {
            var y_scroll_pos = window.pageYOffset;
            var scroll_pos_test = 0;             // set to whatever you want it to be

            if(y_scroll_pos > scroll_pos_test) {
                $("#scrollReminderDiv").removeClass("animate-flicker");
                $("#scrollReminderDiv").addClass("hidden");
            }
        });

        $(".howIWorkCover").children().hide();

        // Init
        $(".modal").modal();
        $(".button-collapse").sideNav({'closeOnClick' : true});
        $(".brand-logo").attr("src", "img/logo_white_transparent.png");
        $("#homeNavItem").css("border-bottom", "2px solid #F93822");
        $('.parallax').parallax();

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

  </script>

</head>

<body>

    <?php

        include("includes/modals.html");
        include("includes/nav.html");

    ?>
  <div id="homeBkg"></div>
  <div class="col s12 row">

     <!-- SCROLL REMINDER -->
     <div id="scrollReminderDiv" class="animate-flicker hide-on-med-and-down grey-text text-lighten-1" style="position: absolute; left: 50%; bottom:10px;z-index: 10;">
        <div style="position: relative; left: -50%;">
            <h3 class="smallSubHeader">SCROLL</h3>
          <i alt="mouse" class="mouseIcon medium material-icons">mouse</i>
        </div>
    </div>


    <div class="col s12">
      <h3 alt="digital work" class="center hide-on-small-only white-text" style="position: relative; top: 30px;">

          THE DIGITAL BUSINESS ERA IS HERE.
          <br>
          <small style="font-size:26px;">And I'm here to document my process of pursuing it.</small>

      </h3>

      <h3 alt="digital work" style="font-size:26px; margin-top: 60px;" class="center hide-on-med-and-up white-text" style="position: relative; top: 30px;">

          THE DIGITAL BUSINESS ERA IS HERE.
          <br>
          <small style="font-size:18px;">And I'm here to document my process of pursuing it.</small>

      </h3>

    </div>

    <div class="col s12">

      <!-- LARGE/MEDIUM -->
      <h3 alt="browse" class="center hide-on-small-only white-text" style="position:relative; top: 30px;">

          VIEW MY:

      </h3>

      <!-- SMALL -->
      <h3 alt="browse" class="center hide-on-med-and-up white-text" style="position:relative; top: px; font-size: 26px; margin-bottom: -10px;">

          VIEW MY:

      </h3>
    </div>

    <a href="/projects">
        <!-- LARGE -->
        <div class="col s6 coreSubject techSubject hide-on-med-and-down">
            <h3 alt="developer activity" class="center">
                PROJECTS
            </h3>
        </div>
        <!-- MEDIUM -->
        <div class="col s6 coreSubject techSubject hide-on-large-only hide-on-small-only">
            <h3 alt="developer activity" style="font-size:9vmin" class="center">
                PROJECTS
            </h3>
        </div>
        <!-- SMALL -->
        <div class="col s12 coreSubject techSubject hide-on-med-and-up">
            <h3 alt="developer activity" style="top: 19vmin" class="center">
                PROJECTS
            </h3>
        </div>
    </a>

    <a href="/reflections">
        <!-- LARGE -->
        <div class="col s6 coreSubject leadershipSubject hide-on-med-and-down">
            <h3 alt="life philosophy" class="center">
                REFLECTIONS
            </h3>
        </div>
        <!-- MEDIUM -->
        <div class="col s6 coreSubject leadershipSubject hide-on-large-only hide-on-small-only">
            <h3 alt="life philosophy" style="font-size:9vmin" class="center">
                REFLECTIONS
            </h3>
        </div>
        <!-- SMALL -->
        <div class="col s12 coreSubject leadershipSubject hide-on-med-and-up">
            <h3 alt="life philosophy" style="top: 19vmin" class="center">
                REFLECTIONS
            </h3>
        </div>
    </a>

    <!-- LARGE/MEDIUM -->
    <div class="col s12 center breakBlock breakBlockLarge hide-on-small-only" style="height: 350px;">
        <h3 class="center white-text">
            <div alt="potential" style="margin-bottom: 18px;">TALENT:</div>
            <small class="smallHeader">
                What some people seem to have been born with, and others work to get. <br>
                However aquired, often percieved as given - not earned. <br>
                To me, always deserved. <br>
                - Matt Bergstrom, A.K.A. @devmattb
            </small>
        </h3>
    </div>

   <!-- SMALL -->
   <div class="col s12 center breakBlock breakBlockSmall hide-on-med-and-up" style="height: 370px;">
        <h3 class="center white-text">
            <div alt="potential" style="margin-bottom: 0px;" class="smallHeader">TALENT:</div>
            <small style="font-size: 15px; line-height: 0.01em!important;">
                What some people seem to have been born with, and others work to get. <br>
                However aquired, often percieved as given - not earned. <br>
                To me, always deserved. <br>
                - Matt Bergstrom, A.K.A. @devmattb
            </small>
        </h3>
   </div>

    <!-- MY EXPERTISE -->
    <div id="myExpertise" class="white col s12 row center">

        <div class="center hide-on-small-only">

            <img alt="developer programmer coder software engineer devmattb mattias bergström matt bergstrom" class="z-depth-3" style="margin-top: 30px; border-radius: 100%; width: 150px;" src="img/profilepic.jpg">
            <!-- LARGE -->
            <h3 alt="programmer competences" style="margin-top: 15px; margin-bottom: 55px; font-size: 30px;">
                QUALIFICATIONS:
            </h3>

        </div>

        <!-- SMALL -->
        <div class="col s12 center hide-on-med-and-up">
            <img alt="developer programmer coder software engineer devmattb mattias bergström matt bergstrom" class="z-depth-3" style="margin-top: 30px; border-radius: 100%; width: 90px;" src="img/profilepic.jpg">

            <h3 alt="programmer competences" style="margin-top: 15px; margin-bottom: 40px;"  class="smallSubHeader">
                 QUALIFICATIONS:
            </h3>

        </div>
            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory desDiv quaDivs">

                <!-- LARGE -->
                <div type=".desDiv" class="expQuaDiv hide-on-small-only">
                    <i class="projectCategoryIcon fa fa-cubes"></i>
                    <h3 alt="web design">DESIGN</h3>
                </div>

                <!-- SMALL -->
                <div type=".desDiv" class="expQuaDiv hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fa fa-cubes"></i>
                    <h3 alt="web design" class="smallHeader">DESIGN</h3>

                </div>

                <div class="txtDiv col s10 offset-s1 hidden">

                    <p class="flow-text">

                        I started designing websites four years ago, and have improved my skills ever since.
                        <br><br>
                        Besides studying Human and Computer Interaction as a part of my formal education, I have also self-educated
                        myself when it comes to design - through the experience of my four years within the web industry.
                        <div class="col s12"> <button class="goBackQuaBtn btn waves-effect waves-light webOrange"><i style="font-size: 16px; position: relative; left: -10px; " class="fa fa-arrow-left"></i>GO BACK</button></div>

                    </p>

                </div>

            </div>

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory devDiv quaDivs">

                <!-- LARGE -->
                <div type=".devDiv" class="expQuaDiv hide-on-small-only">
                    <i class="projectCategoryIcon fa fa-cogs"></i>
                    <h3 alt="software development">DEVELOPMENT</h3>
                </div>

                <!-- SMALL -->
                <div type=".devDiv" class="expQuaDiv hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fa fa-cogs"></i>
                    <h3 alt="software development" class="smallHeader">DEVELOPMENT</h3>
                </div>


                <div class="txtDiv col s10 offset-s1 hidden">

                    <p class="flow-text">

                        As part of my formal education I've been introduced to many concepts within Software Development, such as Object Oriented Programming, Algorithms and various Datastructures.
                        <br><br>
                        I have also been taught how software communicates with hardware,
                        all the way to the ones and zeros in the computer circuits. This has given me full understanding of how software really works.
                        <div class="col s12"> <button class="goBackQuaBtn btn waves-effect waves-light webOrange"><i style="font-size: 16px; position: relative; left: -10px; " class="fa fa-arrow-left"></i>GO BACK</button></div>

                    </p>

                </div>

            </div>

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory degDiv quaDivs">

                <!-- LARGE -->
                <div type=".degDiv" class="expQuaDiv hide-on-small-only">
                    <i class="projectCategoryIcon fa fa-graduation-cap"></i>
                    <h3 alt="computer science degree">DEGREE</h3>
                </div>

                <!-- SMALL -->
                <div type=".degDiv" class="expQuaDiv hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fa fa-graduation-cap"></i>
                    <h3 alt="computer science degree" class="smallHeader">DEGREE</h3>

                </div>

                <div class="txtDiv col s10 offset-s1 hidden">

                    <p class="flow-text">

                        I'm currently working on my Bachelor's Degree in Computer Science at The Royal Institute of Technology, in Stockholm, Sweden.
                        <br><br>
                        Besides my degree, I'm constantly looking for new things to learn when it comes to programming, leadership and management.
                        I do this through books, videos and podcasts.
                        <div class="col s12"> <button class="goBackQuaBtn btn waves-effect waves-light webOrange"><i style="font-size: 16px; position: relative; left: -10px; " class="fa fa-arrow-left"></i>GO BACK</button></div>
                    </p>

                </div>

            </div>

        <div class="langLibsAndFrameworks col s12">

            <div style="margin-bottom: 20px;" class="col s12 center">
                <div class="col s12 ">
                    <h3 style="font-size: 25px;" class="hide-on-small-only">
                         Languages, Libraries and Frameworks I've worked with:
                    </h3>
                </div>
                <div class="col s12">
                    <h3 style="margin-top: -100px;"  class="smallSubHeader hide-on-med-and-up">
                         Languages, Libraries and Frameworks I've worked with:
                    </h3>
                </div>
                <!-- LARGE -->
                <div class="col s6 offset-s3 divider hide-on-small-only">
                </div>
                <!-- SMALL -->
                <div style="margin-top: -40px;" class="col s6 offset-s3 divider hide-on-med-and-up">
                </div>
            </div>

            <div class="col s12 hide-on-small-only hide-on-med-and-down">
                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank"><img src="img/lang_and_lib_logos/html_and_css.png"></a>
                <a rel="nofollow" href="https://en.wikipedia.org/wiki/JavaScript" target="_blank"><img style="width: 50px;" src="img/lang_and_lib_logos/javascript.png"></a>
                <a rel="nofollow" href="http://getbootstrap.com/" target="_blank"><img style="width: 75px;" src="img/lang_and_lib_logos/bootstrap.jpg"></a>
                <a rel="nofollow" href="http://materializecss.com/about.html" target="_blank"><img style="width: 75px; " src="img/lang_and_lib_logos/materialize.png"></a>
                <a rel="nofollow" href="https://en.wikipedia.org/wiki/MongoDB" target="_blank"><img style="width: 140px;"  src="img/lang_and_lib_logos/mongodb.png"></a>
                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Node.js" target="_blank"><img src="img/lang_and_lib_logos/nodejs.png"></a>
                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Meteor_(web_framework)" target="_blank"><img style="width: 120px;" src="img/lang_and_lib_logos/meteorjs.png"></a>
                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Java_(programming_language)" target="_blank"><img style="width: 40px;" src="img/lang_and_lib_logos/java.png"></a>
            </div>

            <div class="col s12 hide-on-small-only hide-on-large-only">
                <div class="col m12 l0">
                    <a rel="nofollow" href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank"><img src="img/lang_and_lib_logos/html_and_css.png"></a>
                    <a rel="nofollow" href="https://en.wikipedia.org/wiki/JavaScript" target="_blank"><img style="width: 50px;" src="img/lang_and_lib_logos/javascript.png"></a>
                    <a rel="nofollow" href="http://getbootstrap.com/" target="_blank"><img style="width: 75px;" src="img/lang_and_lib_logos/bootstrap.jpg"></a>
                    <a rel="nofollow" href="http://materializecss.com/about.html" target="_blank"><img style="width: 75px; " src="img/lang_and_lib_logos/materialize.png"></a>
                </div>
                <div class="col m12 l0">
                    <a rel="nofollow" href="https://en.wikipedia.org/wiki/MongoDB" target="_blank"><img style="width: 140px;"  src="img/lang_and_lib_logos/mongodb.png"></a>
                    <a rel="nofollow" href="https://en.wikipedia.org/wiki/Node.js" target="_blank"><img src="img/lang_and_lib_logos/nodejs.png"></a>
                    <a rel="nofollow" href="https://en.wikipedia.org/wiki/Meteor_(web_framework)" target="_blank"><img style="width: 120px;" src="img/lang_and_lib_logos/meteorjs.png"></a>
                    <a rel="nofollow" href="https://en.wikipedia.org/wiki/Java_(programming_language)" target="_blank"><img style="width: 40px;" src="img/lang_and_lib_logos/java.png"></a>
                </div>
            </div>

            <div class="col s12 hide-on-med-and-up">

                <!-- MOBILE SLIDESHOW -->
                <div id="slider" style="margin: 0 auto; position: relative;" class="col s12"> <!-- Start tagg för bild slidern och används för att poistionera ut bild slidern rätt -->
                    <div id="mask"> <!-- Används för att dölja bilder utanför slidern -->

                        <ul> <!-- Lista med alla de bilder som ska visas i bild slidern -->
                            <li id="first" class="firstanimation"> <!-- Placerar första bilden som ska visas och animeras -->
                                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">
                                    <img style="width: 70px; position: relative; bottom: -40px; margin-right: 60px;" src="img/lang_and_lib_logos/html_and_css.png">
                                </a>
                                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Java_(programming_language)" target="_blank">
                                    <img style="width: 30px; position: relative; bottom: -10px;" src="img/lang_and_lib_logos/java.png">
                                </a>
                            </li>

                            <li id="second" class="secondanimation"> <!-- Placerar andra bilden som ska visas och animeras -->
                                <a rel="nofollow" href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">
                                    <img style="width: 40px; position: relative; bottom: -30px; margin-right: 50px;" src="img/lang_and_lib_logos/javascript.png">
                                </a>
                                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Meteor_(web_framework)" target="_blank">
                                    <img style="width: 90px; position: relative; bottom: -10px;" src="img/lang_and_lib_logos/meteorjs.png">
                                </a>
                            </li>

                            <li id="third" class="thirdanimation"> <!-- Placerar tredje bilden som ska visas och animeras -->
                                <a rel="nofollow" href="http://getbootstrap.com/" target="_blank">
                                    <img style="width: 55px; position: relative; bottom: -30px; margin-right: 50px;" src="img/lang_and_lib_logos/bootstrap.jpg">
                                </a>
                                <a rel="nofollow" href="http://materializecss.com/about.html" target="_blank">-->
                                    <img style="width: 75px;position: relative; bottom: -10px;" src="img/lang_and_lib_logos/materialize.png">
                                </a>
                            </li>

                            <li id="fourth" class="fourthanimation"> <!-- Placerar fjärde bilden som ska visas och animeras -->

                                <a rel="nofollow" href="https://en.wikipedia.org/wiki/MongoDB" target="_blank">
                                    <img style="width: 100px; position: relative; bottom: -10px; margin-right: 50px;"  src="img/lang_and_lib_logos/mongodb.png">
                                </a>

                                <a rel="nofollow" href="https://en.wikipedia.org/wiki/Node.js" target="_blank">
                                    <img style="width: 65px; position: relative; bottom: -70px;" src="img/lang_and_lib_logos/nodejs.png">
                                </a>

                            </li>

                            <!--li id="fifth" class="fifthanimation">

                            </li-->

                        </ul>
                    </div>
                </div>

            </div>

        </div>

      </div>

    <!-- CALL TO ACTION TODO: OVERLAY LEFTSIDE ONCLICK?-->
    <div class="col s12 webOrange" style="height: 150px!important;position: relative!important; top: 10px!important;">

            <div class="callToActionDiv col s12 center" style="top: 25px;" >
                <h5 class="center white-text"> NEED MY ASSISTANCE? </h5>
                <br>
                <a href="#contactModal">
                    <button class="callToActionBtn btn waves-effect waves-light">
                        GET IN TOUCH
                    </button>
                </a>
            </div>
    </div>

    <!-- HOW I WORK -->
    <!-- LARGE/MEDIUM -->
    <div class="howIWorkDiv col s12 center" style="overflow: hidden; position: relative; top: 10px;">

        <!-- COVER -->
        <div class="howIWorkCover white black-text">

          <nav class="white hide-on-small-only">
            <div class="nav-wrapper black-text">
              <div class="col s12" style="">
                <a href="#!" class="breadcrumb evalTitle" name="1">ANALYZE</a>
                <a href="#!" class="breadcrumb orgTitle" name="2">ORGANIZE</a>
                <a href="#!" class="breadcrumb execTitle" name="3">EXECUTE</a>
                <a href="#!" class="breadcrumb anaTitle" name="4">EVALUATE</a>
                <a class="right"> <i class="fa fa-times closeHowIWorkCover" style="font-size: 30px!important;"></i> </a>
              </div>
            </div>
          </nav>

            <div class="col s12">
                <div class="allPgs pg1 hidden">
                    <h3 class="hide-on-small-only"> "WHY CAN I HELP YOU?" </h3>
                    <h3 class="hide-on-med-and-up smallHeader" style="margin-top: 50px;"> "WHY CAN I HELP YOU?" </h3>
                    <div class="col s8 offset-s2 divider"></div>
                    <div class="col s10 offset-s1 ">

                        <p style="font-size: 15px;" class="hide-on-med-and-down">
                            Before discussing anything business-related with my future partners or clients, I always take a step back and ask myself that very question.
                            <br><br>
                            By carefully considering the situation, before I proceed, I ensure that I am always the right guy for the job. Any effort for production should
                            always be one where I truly believe I can make an impact. I've always loved creating complex software with silky smooth user interfaces. If the foundation to
                            do so is solid, then there is no question that amazing results are coming your way, produced by my hand.
                            <br><br>
                            If I happen to work with you one day, expect nothing less.
                        </p>

                        <p style="font-size: 18px;" class="hide-on-large-only hide-on-small-only">
                            Before discussing anything business-related with my future partners or clients, I always take a step back and ask myself that very question.
                            <br><br>
                            By carefully considering the situation, before I proceed, I ensure that I am always the right guy for the job. Any effort for production should
                            always be one where I truly believe I can make an impact. I've always loved creating complex software with silky smooth user interfaces. If the foundation to
                            do so is solid, then there is no question that amazing results are coming your way, produced by my hand.
                            <br><br>
                            If I happen to work with you one day, expect nothing less.
                        </p>

                        <p style="font-size: 11.5px;" class="hide-on-med-and-up">
                            Before discussing anything business-related with my future partners or clients, I always take a step back and ask myself that very question.
                            <br><br>
                            By carefully considering the situation, before I proceed, I ensure that I am always the right guy for the job. Any effort for production should
                            always be one where I truly believe I can make an impact. I've always loved creating complex software with silky smooth user interfaces. If the foundation to
                            do so is solid, then there is no question that amazing results are coming your way, produced by my hand.
                            <br><br>
                            If I happen to work with you one day, expect nothing less.
                            <br><br>
                            <button class="btn webOrange white-text waves-effect waves-light closeHowIWorkCover2 white-text">CLOSE</button>
                        </p>

                    </div>

                </div>

                <div class="allPgs pg2 hidden">
                    <h3 class="hide-on-small-only"> "HOW CAN I HELP YOU?" </h3>
                    <h3 class="hide-on-med-and-up smallHeader" style="margin-top: 50px;"> "HOW CAN I HELP YOU?" </h3>
                    <div class="col s8 offset-s2 divider"></div>
                    <div class="col s10 offset-s1 ">

                        <p style="font-size: 15px;" class="hide-on-med-and-down">
                            Let's presume that you're a perfect business partner or client for me. Now it's time to construct a plan of execution.
                            <br><br>
                            I start by mapping up all of the ways I can imagine myself helping you, and then present the very best ones to you.
                            I then proceed to investigate the resources needed for our agreed solution.
                            <br><br>
                            Finally, I present my resource qualifications to you, ensuring that my approach of assistance is crystal clear and approved upon.
                            I then construct a functional specification of the solution, according to said approach, which will describe the end-product thoroughly.
                        </p>

                         <p style="font-size: 18px;" class="hide-on-large-only hide-on-small-only">
                            Let's presume that you're a perfect business partner or client for me. Now it's time to construct a plan of execution.
                            <br><br>
                            I start by mapping up all of the ways I can imagine myself helping you, and then present the very best ones to you.
                            I then proceed to investigate the resources needed for our agreed solution.
                            <br><br>
                            Finally, I present my resource qualifications to you, ensuring that my approach of assistance is crystal clear and approved upon.
                            I then construct a functional specification of the solution, according to said approach, which will describe the end-product thoroughly.
                        </p>

                        <p style="font-size: 11.5px;" class="hide-on-med-and-up">
                            Let's presume that you're a perfect business partner or client for me. Now it's time to construct a plan of execution.
                            <br><br>
                            I start by mapping up all of the ways I can imagine myself helping you, and then present the very best ones to you.
                            I then proceed to investigate the resources needed for our agreed solution.
                            <br><br>
                            Finally, I present my resource qualifications to you, ensuring that my approach of assistance is crystal clear and approved upon.
                            I then construct a functional specification of the solution, according to said approach, which will describe the end-product thoroughly.
                            <br><br>
                            <button class="btn webOrange white-text waves-effect waves-light closeHowIWorkCover2 white-text">CLOSE</button>
                        </p>

                    </div>
                </div>

                <div class="allPgs pg3 hidden">
                    <h3 class="hide-on-small-only"> "PRODUCTION OF THE HELP YOU NEED." </h3>
                    <h3 class="hide-on-med-and-up smallHeader" style="margin-top: 50px;"> "PRODUCTION OF THE HELP YOU NEED." </h3>
                    <div class="col s8 offset-s2 divider"></div>
                    <div class="col s10 offset-s1 ">

                        <p style="font-size: 15px;" class="hide-on-med-and-down">
                            It's showtime.
                            <br><br>
                            Time to produce what was agreed upon. Most of the times, the solution will manifest itself as a website, a web app or platform, a embedded system or a native app,
                            which is an app specifically made for iOS or Android.
                            <br><br>
                            I work according to the <a href="https://en.wikipedia.org/wiki/Systems_development_life_cycle" target="_blank">SDLC</a>, which is an agile iterative design-process
                            that assures the result-production to be made as quickly, cost-efficiently and ambitiously as possible.
                            The <a href="https://en.wikipedia.org/wiki/Systems_development_life_cycle" target="_blank">SDLC</a> requires a continuous dialogue
                            between you and me during the production of the result, allowing your input to truly affect the solution.
                        </p>

                         <p style="font-size: 18px;" class="hide-on-large-only hide-on-small-only">
                            It's showtime.
                            <br><br>
                            Time to produce what was agreed upon. Most of the times, the solution will manifest itself as a website, a web app or platform, a embedded system or a native app,
                            which is an app specifically made for iOS or Android.
                            <br><br>
                            I work according to the <a href="https://en.wikipedia.org/wiki/Systems_development_life_cycle" target="_blank">SDLC</a>, which is an agile iterative design-process
                            that assures the result-production to be made as quickly, cost-efficiently and ambitiously as possible.
                            The <a href="https://en.wikipedia.org/wiki/Systems_development_life_cycle" target="_blank">SDLC</a> requires a continuous dialogue
                            between you and me during the production of the result, allowing your input to truly affect the solution.
                        </p>

                        <p style="font-size: 11.5px;" class="hide-on-med-and-up">
                            It's showtime.
                            <br><br>
                            Time to produce what was agreed upon. Most of the times, the solution will manifest itself as a website, a web app or platform, a embedded system or a native app,
                            which is an app specifically made for iOS or Android.
                            <br><br>
                            I work according to the <a href="https://en.wikipedia.org/wiki/Systems_development_life_cycle" target="_blank">SDLC</a>, which is an agile iterative design-process
                            that assures the result-production to be made as quickly, cost-efficiently and ambitiously as possible.
                            The <a href="https://en.wikipedia.org/wiki/Systems_development_life_cycle" target="_blank">SDLC</a> requires a continuous dialogue
                            between you and me during the production of the result, allowing your input to truly affect the solution.
                            <br><br>
                            <button class="btn webOrange white-text waves-effect waves-light closeHowIWorkCover2 white-text">CLOSE</button>
                        </p>
                    </div>
                </div>

                <div class="allPgs pg4 hidden">
                    <h3 class="hide-on-small-only"> "TO WHAT EXTENT DID MY EFFORT HELP?"  </h3>
                    <h3 class="hide-on-med-and-up smallHeader" style="margin-top: 50px;"> "TO WHAT EXTENT DID MY EFFORT HELP?"  </h3>
                    <div class="col s8 offset-s2 divider"></div>
                    <div class="col s10 offset-s1 ">

                        <p style="font-size: 15px;" class="hide-on-med-and-down">
                            I'm always looking to improve, and I secure my personal development by reflecting over the delivered product.
                            <br><br>
                            After presenting the final outcome to you - produced according to the functional specification - I will do follow-up.
                            This follow-up will include questions to you, relating to your opinion of my cooperation and level of satisfiability.
                            <br><br>
                            I will also reflect upon the result myself, and how I achieved it. Can I do it better or faster next time?
                            Are there more features that can be implemented in the future, that weren't included in the functional specification?
                            Is there an opportunity to follow up on these features?
                        </p>

                         <p style="font-size: 18px;" class="hide-on-large-only hide-on-small-only">
                            I'm always looking to improve, and I secure my personal development by reflecting over the delivered product.
                            <br><br>
                            After presenting the final outcome to you - produced according to the functional specification - I will do follow-up.
                            This follow-up will include questions to you, relating to your opinion of my cooperation and level of satisfiability.
                            <br><br>
                            I will also reflect upon the result myself, and how I achieved it. Can I do it better or faster next time?
                            Are there more features that can be implemented in the future, that weren't included in the functional specification?
                            Is there an opportunity to follow up on these features?
                        </p>

                        <p style="font-size: 11.5px;" class="hide-on-med-and-up">
                            I'm always looking to improve, and I secure my personal development by reflecting over the delivered product.
                            <br><br>
                            After presenting the final outcome to you - produced according to the functional specification - I will do follow-up.
                            This follow-up will include questions to you, relating to your opinion of my cooperation and level of satisfiability.
                            <br><br>
                            I will also reflect upon the result myself, and how I achieved it. Can I do it better or faster next time?
                            Are there more features that can be implemented in the future, that weren't included in the functional specification?
                            Is there an opportunity to follow up on these features?
                            <br><br>
                            <button class="btn webOrange white-text waves-effect waves-light closeHowIWorkCover2 white-text">CLOSE</button>
                        </p>

                    </div>
                </div>


            </div>

        </div>

        <!-- HEXAGONS -->
        <h3 class="howIWorkTitle center white-text hide-on-small-only">
            <div >HOW I WORK:</div>
        </h3>
        <h3 class="howIWorkTitle center white-text hide-on-med-and-up">
            <div class="smallHeader">HOW I WORK:</div>
        </h3>
        <div class="hexContainer col s12">

            <div style="position: relative; top: 50px;">

                <!-- HIDDEN -->
                <div class="col s0 hide-on-med-and-up hide-on-small-only">
                    <div class='r-hex' style="display:none;">
                      <div class='r-hex-inner'>
                        <div class='r-hex-inner-2'>
                          <h1></h1>
                        </div>
                      </div>
                    </div>
                </div>

                <div class='r-hex'>
                  <div class='r-hex-inner'>
                    <div class='r-hex-inner-2' type="orange" name="1"><div class="r-hex-text"><h3 class="white-text">ANALYZE</h3></div></div>
                  </div>
                </div>

                <div class='r-hex r-hex2'>
                  <div class='r-hex-inner r-hex-inner2'>
                    <div class='r-hex-inner-2 r-hex-inner-22' type="white" name="2"><div class="r-hex-text"><h3 class="black-text">ORGANIZE</h3></div></div>
                  </div>
                </div>
                <br class="hide-on-large-only">
                <div class='r-hex'>
                  <div class='r-hex-inner'>
                    <div class='r-hex-inner-2' type="orange" name="3"><div class="r-hex-text"><h3 class="white-text">EXECUTE</h3></div></div>
                  </div>
                </div>

                <div class='r-hex r-hex2'>
                  <div class='r-hex-inner r-hex-inner2'>
                    <div class='r-hex-inner-2 r-hex-inner-22' type="white" name="4"><div class="r-hex-text"><h3 class="black-text">EVALUATE</h3></div></div>
                  </div>
                </div>

            </div>


        </div>
    </div>

    <!-- I HAVE WORKED WITH -->
    <!-- TODOOOOOOOOOOOOOOOOOOOO LARGE -->
    <div style="height: 25vmin;" class="workedWith row col s12 center breakBlock breakBlockLarge black hide-on-med-and-down">

        <h5 class="left white-text">
            I HAVE WORKED WITH:
        </h5>

        <!-- LOGOS OF COMPANIES I HAVE WORKED WITH -->
        <div class="col s12 partnerLogoDiv left" style="top: 2vmin;">

            <div class="col s12 left-align">
                <a href="https://www.enigio.com/" target="_blank"><img style="width:300px;" src="img/enigio2.png"></a>
                <a href="https://tangar.io/" target="_blank"><img style="width:250px; position: relative; left: 50px; top: -45px;" src="img/tangar_logo.png"></a>
            </div>

        </div>

    </div>

   <!-- MEDIUM -->
    <div class="col s12 center breakBlock breakBlockMedium black hide-on-large-only hide-on-small-only">
        <h5 class="left white-text">
            I HAVE WORKED WITH:
        </h5>

        <!-- LOGOS OF COMPANIES I HAVE WORKED WITH -->
        <div class="col s12 partnerLogoDiv left" style="top: 2vmin;">

            <div class="col s12 left-align">
                <a rel="nofollow" href="https://www.enigio.com/" target="_blank"><img style="width:200px;" src="img/enigio2.png"></a>
                <a rel="nofollow" href="https://tangar.io/" target="_blank"><img style="width:150px; position: relative; left: 50px; top: -27px;" src="img/tangar_logo.png"></a>

        </div>
    </div>

   <!-- SMALL -->
   <div class="col s12 center breakBlock breakBlockSmall black hide-on-med-and-up">
        <h5 class="center white-text">
            I HAVE WORKED WITH:
        </h5>

               <!-- LOGOS OF COMPANIES I HAVE WORKED WITH -->
        <div class="col s12 partnerLogoDiv left" style="top: 2vmin;">

            <div class="col s12 left-align">
                <a rel="nofollow" href="https://www.enigio.com/" target="_blank"><img style="width:130px;" src="img/enigio2.png"></a>
                <a rel="nofollow" href="https://tangar.io/" target="_blank"><img style="width:100px; position: relative; left: 30px; top: -18px;" src="img/tangar_logo.png"></a>
            </div>

        </div>

   </div>

  </div>

</body>


</html>
