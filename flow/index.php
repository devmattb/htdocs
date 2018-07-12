<!DOCTYPE html>
<html>

<head>
  <!-- MAKE SURE WE DONT LOSE PAGE RANK TO ANY OF THE LINKS ON THIS PAGE! -->
  <meta name="robots" content="nofollow" />

  <!-- Title SEO -->
  <title>devmattb - Flow</title>
  <meta itemprop="name" content="devmattb - Flow">
  <meta property="og:title" content="devmattb - Flow">
  <meta name="twitter:title" content="devmattb - Flow">

  <!-- STANDARD HEADER -->
  <?php include("../includes/header.html") ?>

  <!-- DEVMATTB CSS -->
  <link type="text/css" rel="stylesheet" href="../css/stylesheet.css">

  <!-- STANDARD INIT -->
  <script src="../js/init.js" type="text/javascript"></script>

  <script>

      $(document).ready(function(){
        // Init
        $("#flowNavItem").css("border-bottom", "2px solid #F93822");
        $(".projectBox").hover(
          function() {
            $(this).children("h3").addClass("hidden");
          }, function() {
            $(this).children("h3").removeClass("hidden");
          });

      });

  </script>

</head>

<body>

  <?php include_once("../includes/nav.php"); ?>

  <!-- BKG IMG & OVERLAY -->
  <div class="bkgPageImg"><div class="bkgPageOverlay"></div></div>

  <!-- PROJECT HOLDER -->
  <div class="col s12 row white-text">

      <div class="col s12 row">
        <div class="col s12">

            <!-- LARGE -->
            <h1 class="center hide-on-med-and-down">
              FLOW:
            </h1>

            <h1 style="font-size: 35px;" class="center hide-on-large-only hide-on-small-only">
              FLOW:
            </h1>

            <!-- SMALL -->
            <h1 style="font-size: 26px;" class="center hide-on-med-and-up">
              FLOW:
            </h1>

        </div>
          <div class="col s3"></div><!-- DUMMY -->
          <div class="col s6 divider">
          </div>
          <div class="col s3"></div><!-- DUMMY -->
      </div>


      <div style="position:relative; top: -15px;" class="col s12 row center">
        <h5 class="center hide-on-small-only">See what's going on in the community!</h5>
        <h5 style="font-size:18px;" class="center hide-on-med-and-up">See what's going on in the community!</h5>
      </div>

      <div class="col s12 row center">

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory">

                <!-- LARGE -->
                <div class="hide-on-small-only">
                    <i class="projectCategoryIcon fab fa-twitter-square"></i>
                    <h3>HASHTAG MENTIONS</h3>
                </div>

                <!-- SMALL -->
                <div class="hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fab fa-twitter-square"></i>
                    <h3 class="smallHeader">HASHTAG MENTIONS</h3>

                </div>

                <div class="col s10 offset-s1">

                    <a class="twitter-timeline"  href="https://twitter.com/hashtag/devmattb" data-widget-id="928303012002574336">#devmattb Tweets</a>
                    <script>
                        !function(d,s,id){
                            var js,fjs=d.getElementsByTagName(s)[0],
                                p=/^http:/.test(d.location)?'http':'https';
                            if(!d.getElementById(id)){
                                js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);
                            }
                        }(document,"script","twitter-wjs");
                    </script>

                </div>

            </div>

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory">

                <!-- LARGE -->
                <div class="hide-on-small-only">
                    <i class="projectCategoryIcon fab fa-instagram"></i>
                    <h3>RECENT POSTS</h3>
                </div>

                <div class="hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fab fa-instagram"></i>
                    <h3 class="smallHeader">RECENT POSTS</h3>

                </div>

                <!-- SMALL -->
                <div class="col s10 offset-s1">

                    <p class="flow-text">

                     <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/0c96c7d6363450e980a9c65ddb1db2a3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

                    </p>

                </div>

            </div>

            <!-- IDEA, WHY, HOW? -->
            <div class="col s12 l4 row center projectCategory">

                <!-- LARGE -->
                <div class="hide-on-small-only">
                    <i class="projectCategoryIcon fab fa-facebook-square"></i>
                    <h3>PAGE ACTIVITY</h3>
                </div>

                <!-- SMALL -->
                <div class="hide-on-med-and-up">
                    <i class="projectCategoryIconSmall fab fa-facebook-square"></i>
                    <h3 class="smallHeader">PAGE ACTIVITY</h3>

                </div>

                <div class="col s10 offset-s1">

                    <p class="flow-text">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/devmattb/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/devmattb/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/devmattb/">Devmattb</a></blockquote></div>

                    </p>

                </div>

            </div>

      </div>
  </div>

</body>


</html>
