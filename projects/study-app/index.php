<!DOCTYPE html>
<html>

<head>
  <title>@devmattb - Study App</title>    

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
              STUDY APP:
            </h1>
            
            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              STUDY APP:
            </h1>
            
            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              STUDY APP:
            </h1>
            
        </div>
          <div class="col s3"></div><!-- DUMMY -->
          <div class="col s6 divider">
          </div>
          <div class="col s3"></div><!-- DUMMY -->
      </div>

    
      <div style="position:relative; top: -15px;" class="col s12 row center">
        <h5 class="center hide-on-small-only">An app designed to help you schedule your studies, and do so efficiently and intelligently.</h5>
        <h5 style="font-size:18px;" class="center hide-on-med-and-up">An app designed to help you schedule your studies, and do so efficiently and intelligently</h5>
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
                    
                        An app that helps you improve your study technique in a fun manner.
                        After all, life's all about learning, so we might aswell make the most of it.
                        <br><br>
                        The app will schedule you between the hours of 16.00 - 22.00, with regard to your own
                        afternoon schedule.
                        <br><br>
                        Depending what school-year you're in, what class you want to excel in, at what level you want to perform,
                        and when the examination is due, this app will automatically generate the schedule and apply a suiting study technique.
                    
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
                
                <!-- SMALL -->
                <div class="hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fa fa-question-circle-o"></i>
                    <h3 class="smallHeader">WHY</h3>
                </div>
                
            
                <div class="col s10 offset-s1">
                
                    <p class="flow-text">
                    
                        Some old basketball teammates of mine realized how bad their study technique was before attending college/university.
                        They felt like they could've performed better had they only known what they know today. 
                        <br><br> 
                        Even though I've never complained
                        about my own performance, I now have also come to realize that I could've produced the exact same results - in way less time.
                        <br><br>
                        We have now decided to share our experiences and exciting study techniques through an app. 
                        Maybe, someone else won't struggle as much as we did, because of this app. If so, we have succeeded.
                    
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
                    
                        A computer and some creativity and I'm good to go.
                        Seriously, thats almost everything you need to create something wonderful today (besides internet connection).
                        <br><br>
                        However, language-wise I will be using HTML, CSS and Javascript.
                        When it comes to libraries/frameworks I will be using MaterializeCSS and MeteorJS.
                    
                    </p>
                
                </div>
                
            </div>
          
          
            <div style="position: relative; top: 20px;" class="col s12 row">
                
                <div class="col s12">
                    
                    <!-- LARGE -->
                    <h3 style="margin-left: 30px;" class="left hide-on-small-only">
                        VIDEOS RELATED TO THIS CONTENT:
                    </h3>
                    
                    <!-- SMALL -->
                    <h3 style="margin-left: 30px;" class="smallSubHeader left hide-on-med-and-up">
                        VIDEOS RELATED TO THIS CONTENT:
                    </h3>
                    
                </div>
              <div style="margin-left: 30px;" class="col l7 m11 s9 divider"></div>
          
                <div style="position:relative; top: 20px; left: 30px;" class="col s11 left">
                    
                    <!-- LARGE -->
                    <h5 class="left hide-on-small-only">
                        No videos published yet.
                    </h5>
                    
                    <!-- SMALL -->
                    <h5 class="center smallSubHeader left hide-on-med-and-up">
                        No videos published yet.
                    </h5>
                
                </div>
            </div>
          

        
      </div>
      
      
  </div>
    
</body>


</html>