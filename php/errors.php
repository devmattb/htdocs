<!-- Error Handling visualization -->
  <?php
      // Start the session if it doesn't exist.
      if(session_id() == '' || !isset($_SESSION)) {
          // session isn't started
          session_start();
      }

      if ( isset($_SESSION["error"]) ) {

        if ( $_SESSION["error"] == 0 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Inloggad!', classes: 'green'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 1 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Misslyckades att logga in!', classes: 'red'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 2 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Misslyckades att skapa inlägg!', classes: 'red'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 3 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Inlägg Skapat!', classes: 'green'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 4 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Misslyckades att radera inlägg!', classes: 'red'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 5 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Inlägg Raderat!', classes: 'green'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 6 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Misslyckades att skapa konto!', classes: 'red'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 7 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Konto skapat!', classes: 'green'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 8 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Misslyckades att radera konto!', classes: 'red'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 9 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Konto raderat!', classes: 'red'}, 8000);
          });
      </script>
  <?php
      } else if ( $_SESSION["error"] == 10 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Några obligatoriska fält lämnades tomma!', classes: 'red'}, 8000);
          });
      </script>
  <?php
      } else if ( $_SESSION["error"] == 11 ) {
  ?>
      <script>
          $(document).ready(function(){
             M.toast({html: 'Lösenorden matchade inte!', classes: 'red'}, 8000);
          });
      </script>
  <?php
        } else if ( $_SESSION["error"] == 12 ) {
    ?>
        <script>
            $(document).ready(function(){
               M.toast({html: 'Jobb Skapat!', classes: 'green'}, 8000);
            });
        </script>
    <?php
        } else if ( $_SESSION["error"] == 13 ) {
    ?>
        <script>
            $(document).ready(function(){
               M.toast({html: 'Misslyckades att radera jobb!', classes: 'red'}, 8000);
            });
        </script>
    <?php
        } else if ( $_SESSION["error"] == 14 ) {
    ?>
        <script>
            $(document).ready(function(){
               M.toast({html: 'Jobb Raderat!', classes: 'green'}, 8000);
            });
        </script>
    <?php
  } else if ( $_SESSION["error"] == 15 ) {
    ?>
        <script>
            $(document).ready(function(){
               M.toast({html: 'Framsidan Uppdaterad!', classes: 'green'}, 8000);
            });
        </script>
  <?php
  } else if ( $_SESSION["error"] == 16 ) {
        ?>
            <script>
                $(document).ready(function(){
                   M.toast({html: 'Ansökan Skickad!', classes: 'green'}, 8000);
                });
            </script>
        <?php
            }
      }
      unset($_SESSION["error"]); // Error has been displayed.
  ?>
