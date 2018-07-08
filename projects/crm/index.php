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
              CUSTOMER RELATION MANAGEMENT SYSTEM:
            </h1>
            
            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              CUSTOMER RELATION MANAGEMENT SYSTEM:
            </h1>
            
            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              CUSTOMER RELATION MANAGEMENT SYSTEM:
            </h1>
            
        </div>
          <div class="col s3"></div><!-- DUMMY -->
          <div class="col s6 divider">
          </div>
          <div class="col s3"></div><!-- DUMMY -->
      </div>

    
      <div style="position:relative; top: -15px;" class="col s12 row center">
        <h5 class="center hide-on-small-only">A tool for keeping track of resources and scheduling.</h5>
        <h5 style="font-size:18px;" class="center hide-on-med-and-up">A tool for keeping track of resources and scheduling.</h5>
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
                    
                        A simple tool to help a company keeping track of resources.
                        This includes booking meetings, with employees and business 
                        partners with the company. 
                        <br><br>
                        The tool keeps track of the different meeting groups and their
                        respective teams in the meetings. It also logs costs for meetings,
                        depending on what room and in what facility the group has booked.
                        The cost also scales with time. The longer the meeting, the more the cost.
                        
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
                    
                        This was one a project I built in the purpose of pursuing
                        my Bachelor's Degree in Computer Science at The Royal Institute
                        of Technology, in Stockholm.
                        <br><br>
                        However, I did go a little bit overboard when coding the project,
                        so I decided to share this gem on my website.
                        <br><br>
                        That being said, there may be some bugs here and there, since I
                        didn't want to put so much time in this, since that could affect
                        my other course grades negatively.
                        <br><br>
                        The product is therefore not optimized for mobile devices. Try
                        testing with a laptop instead.
                    
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
                    
                        Using HTML, CSS, JS, PHP and MySQL i built 
                        this CRM.
                        <br><br>
                        For local testing, I used XAMPP and hosted
                        a local Apache and MySQL server.
                        <br><br>
                        If you want to see the code to this project,
                        please visit my <a target="_blank" href="https://github.com/devmattb">Github</a>.
                        <br><br>
                        Otherwise, please enjoy the demo below:
                    
                    </p>
                
                </div>
                
            </div>
    
            
            <!-- DEMO LINK -->
            <div class="col s12 center">
                <a target="_blank" href="../../simple_meeting_scheduler">
                    <button class="btn-large webOrange waves-effect waves-light hoverable">
                        SHOW ME THE DEMO!
                    </button>
                </a>
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
          
                    <!-- TODO: See chipkit tetris!  -->
            </div>
          

        
      </div>
      
      
  </div>
    
</body>


</html>