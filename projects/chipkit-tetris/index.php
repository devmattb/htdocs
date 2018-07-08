<!DOCTYPE html>
<html>

<head>
  <title>devmattb - ChipKit Tetris</title>

  <!-- STANDARD HEADER -->
  <?php include("../../includes/header.html") ?>

  <!-- DEVMATTB CSS -->
  <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css">

  <script>

      $(document).ready(function(){

        // Init
        $(".button-collapse").sideNav({'closeOnClick' : true});
        $(".parallax").parallax();
        $(".modal").modal();
        $("#projectNavItem").css("border-bottom", "2px solid #F93822");
        $(".brand-logo").attr("src", "logo_white_transparent.png");

      });

  </script>

</head>

<body>

    <?php

        include("../../includes/modals.html");
        include("../../includes/nav.html");

    ?>

  <!-- PROJECT HOLDER -->
  <div class="col s12 row">

      <div class="col s12 row">
        <div class="col s12">

            <!-- LARGE -->
            <h1 class="center hide-on-med-and-down">
              CHIPKIT TETRIS:
            </h1>

            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              CHIPKIT TETRIS:
            </h1>

            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              CHIPKIT TETRIS:
            </h1>

        </div>
          <div class="col s3"></div><!-- DUMMY -->
          <div class="col s6 divider">
          </div>
          <div class="col s3"></div><!-- DUMMY -->
      </div>


      <div style="position:relative; top: -15px;" class="col s12 row center">
        <h5 class="center hide-on-small-only">A Tetris Game On A "Mini Computer."</h5>
        <h5 style="font-size:18px;" class="center hide-on-med-and-up">A Tetris Game On A "Mini Computer."</h5>
      </div>

      <div class="col s12 row center">

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory">

                <!-- LARGE -->
                <div class="hide-on-small-only">
                    <i class="projectCategoryIcon fa fa-lightbulb-o"></i>
                    <h3>WHAT</h3>
                </div>

                <!-- SMALL -->
                <div class="hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fa fa-lightbulb-o"></i>
                    <h3 class="smallHeader">WHAT</h3>

                </div>

                <div class="col s10 offset-s1">

                    <p class="flow-text">

                        A simple Tetris game using four buttons on a chipset (in this case, two connnected computerchips) with a display.

                    </p>

                </div>

            </div>

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory">

                <!-- LARGE -->
                <div class="hide-on-small-only">
                    <i class="projectCategoryIcon fa fa-question-circle-o"></i>
                    <h3>WHY</h3>
                </div>

                <div class="hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fa fa-question-circle-o"></i>
                    <h3 class="smallHeader">WHY</h3>

                </div>

                <!-- SMALL -->
                <div class="col s10 offset-s1">

                    <p class="flow-text">

                        Im doing this mainly to move further towards my Bachelors Degree in Computer Science.
                        <br><br>
                        HOWEVER! I've always found programming computers and machines quite intriguing.
                        I'm pretty sure I'll stay in the "web-world", but this sure is fun too!

                    </p>

                </div>

            </div>

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory">

                <!-- LARGE -->
                <div class="hide-on-small-only">
                    <i class="projectCategoryIcon fa fa-code"></i>
                    <h3>HOW</h3>
                </div>

                <!-- SMALL -->
                <div class="hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fa fa-code"></i>
                    <h3 class="smallHeader">HOW</h3>

                </div>

                <div class="col s10 offset-s1">

                    <p class="flow-text">

                        A chipset and a laptop is all I need for this project. That's the beauty of coding.
                        <br><br>
                        When it comes the the software I'll be writing, I will use the C programming language, combined with Assembler.

                    </p>

                </div>

            </div>


            <div style="position: relative; top: 20px;" class="col s12 row">

                <div class="col s12">

                    <!-- LARGE -->
                    <h3 style="margin-left: 30px;" class="left hide-on-small-only">
                        VIDEOS RELATED TO THIS CONTENT:
                        <div style="margin-left: 30px; margin-top: 10px;" class="col l11 m11 s9 offset-s2 offset-m1 divider"></div>
                    </h3>

                    <!-- SMALL -->
                    <h3 style="margin-left: 30px;" class="smallSubHeader center hide-on-med-and-up">
                        VIDEOS RELATED TO THIS CONTENT:
                        <div style="margin-left: 6vmin; margin-top: 10px;" class="col l7 m11 s9 offset-s2 offset-m1 divider"></div>
                    </h3>

                </div>

                <div style="position:relative; top: 20px; left: 30px;" class="col s11 left">

                        <div class="col l12 m12 s12 row center hide-on-small-only">

                            <!-- LARGE/MEDIUM -->
                            <a target="_blank" href="https://www.youtube.com/watch?v=a56wzoTroG4&t=7s">

                                <div style="height: 230px" class="col m12 l4 projectBox z-depth-4 orangeOpacity parallax-container">
                                    <h3 style="top: 30%;" class="center">
                                        TETRIS SHOWCASE
                                    </h3>
                                    <div class="parallax">
                                        <img src="../../img/chipkit_tetris/tetris-background.jpg">
                                    </div>
                                </div>
                            </a>

                          </div>

                          <div class="col s12 row center hide-on-med-and-up center">

                              <a target="_blank" href="https://www.youtube.com/watch?v=a56wzoTroG4&t=7s">
                                <!-- PROJECT ITEM #1 SMALL -->
                                <div style="height: 100px" class="col s12 projectBoxSmall z-depth-4 parallax-container">

                                    <h3 style="top: 22px; font-size: 14px;" class="center">
                                        TETRIS SHOWCASE
                                    </h3>
                                    <div class="parallax">
                                        <img src="../../img/chipkit_tetris/tetris-background.jpg">
                                    </div>
                                </div>
                              </a>

                          </div>

                </div>
            </div>



      </div>


  </div>

</body>


</html>
