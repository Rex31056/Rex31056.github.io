<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300, 700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="css/main copy2.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
  <link rel="stylesheet" href="css/style2.css"> <!-- Gem style -->
  <link href="css/bootstrap-editable.css" rel="stylesheet">
  <script src="js/bootstrap-editable.js"></script>
  <script src="js/carousel.js"></script>
  <script src="assets/x-editable/inputs-ext/address/address.js"></script>
  <script>
  var c = window.location.href.match(/c=inline/i) ? 'inline' : 'popup';
  $.fn.editable.defaults.mode = c === 'inline' ? 'inline' : 'popup';
  $(function(){
    $('#f').val(f);
    $('#c').val(c);
    $('#frm').submit(function(){
      var f = $('#f').val();
      if(f === 'jqueryui') {
        $(this).attr('action', 'demo-jqueryui.html');
      } else if(f === 'plain') {
        $(this).attr('action', 'demo-plain.html');
      } else if(f === 'bootstrap2') {
        $(this).attr('action', 'demo.html');
      } else {
        $(this).attr('action', 'demo-bs3.html');
      }
    });
  });
  </script>
  <title>SIGMA: Performance</title>
</head>
<!---------------------------TOP---------------------------->
<?php
$host = "localhost";
$db = "sigma";
$user = "admin";
$pass = "team3473";
$godswork = $_GET["teamNum"];
$teamNum = "t" . $godswork;
$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
die( "con failed");
}
 $q ="SELECT * FROM $teamNum";
//$row = mysqli_fetch_array(mysqli_query($con, $q));
$r= mysqli_query($con, $q);
$team = array();
while ($row = mysqli_fetch_array($r)) {
$team[] = $row;
}
$pit = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM pit WHERE teamNum = $godswork"));
?>
<body id = "bgteleoperated" class="cbp-spmenu-push">
    <form action="photoUpload.php" method="post" enctype="multipart/form-data">
    <div id="blackBar">
        <div class = "wrapperz">
        <button class = "buttonStyle" id="showLeftPush" onchange="return false;">&#x3a3;</button>
        <a href = "home.html" id = "hugeheader" style="text-decoration:none;font-weight: 500;">HOME</a>
        <text id = "hugeheader">></text>
        <text id = "hugeheader">PERFORMANCE</text>
        <span id = "formmove" class="btn btn-primary fileinput-button"><span>UPLOAD IMAGE</span>
        <input type="file" name="fileToUpload" class="btn btn-primary fileinput-button" onchange="this.form.submit();">
        <input type="hidden" value="<?php echo $godswork; ?>" name="teamNum" >
        </span>
        </form>
  </div>
  </div>

  <div id = "bottomBar">
  <?php
    echo '<p id ="barText" style="margin-left:30px;">TEAM NUMBER: ' . $godswork.'</p>'; 
    ?>
    <p id = "barText2">STANDING: </p>
    
    <p id = "barText3">NEXT ROUND:</p>
    
  </div>
  
    <!-------------------------------LEFT TABLE------------------------------>

<section id="cd-table2" style = "float:right; max-height:30px;">

    <div class="cd-table-container">
      <div class="cd-table-wrapper">
              <header class="cd-table-column">
                <ul>
                  <li>team name</li>
                  <li>city of origin</li>
                  <li>rookie</li>
                  <li>robot type</li>
                  <li>drive train</li>
                  <li>upside down totes</li>
                  <li>previous regional</li>
                  <li>general gameplan</li>
                  <li>avg totes</li>
                  <li>avg stacked</li>
                  <li>avg bins</li>
                  <li>avg points</li>
                  <li>avg trips</li>
                  <li>overall totes</li>
                  <li>overall stacked</li>
                  <li>overall bins</li>
                  <li>overall points</li>
                  <li>overall trips</li>
                </ul>
              </header>

            <div class="cd-table-column-wow">
              <ul>
              <?php
                echo '<li>'. $pit[teamName] . '</li>';
                echo '<li>'. $pit[cityOfOrigin].'</li>';
                if($pit[isRookie]==0){
                  echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                } else {
                  echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                }
                
                echo '<li>'. $pit[robotType] .'</li>';
                echo '<li>'. $pit[driveTrain] .'</li>';
                  if($pit[handlesUpsideDownTotes]==0){
                  echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                } else {
                  echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                }
               echo '<li>'. $pit[previousRegional].'</li>';
               echo '<li>'. $pit[gamePlan].'</li>';
               echo '<li>'. $pit[avgTotes].'</li>';
               echo '<li>'. $pit[avgStacked].'</li>';
               echo '<li>'. $pit[avgBins].'</li>';
               echo '<li>'. $pit[avgPoints].'</li>';
               echo '<li>'. $pit[avgTrips].'</li>';
               echo '<li>'. $pit[overallTotes].'</li>';
               echo '<li>'. $pit[overallStacked].'</li>';
               echo '<li>'. $pit[overallBins].'</li>';
               echo '<li>'. $pit[overallPoints].'</li>';
               echo '<li>'. $pit[overallTrips].'</li>';
                ?>
              </ul>
            </div> <!-- cd-table-column -->
      </div> <!-- cd-table-wrapper -->
    </div> <!-- cd-table-container -->
    <em class="cd-scroll-right"></em>
  </section> <!-- cd-table -->


  <!---------------------------CAROUSEL---------------------------->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false" style="width: 35%; height: 438px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <?php
      for ($count = 1; $count<count(glob($teamNum.'*')); $count++) {
        echo '<li data-target="#carousel-example-generic" data-slide-to="'.$count.'"></li>'."\n";
      }
      ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo $teamNum.'_0'; ?>" alt="...">
        <div class="carousel-caption">
          <h3>Team <?php echo $godswork; ?></h3>
        </div>
      </div>
      <?php
      for ($count = 1; $count<count(glob($teamNum.'*')); $count++) {
        $filename=$teamNum.'_'.$count;
        echo '<div class="item">';
        echo '<img src="'.$filename.'" alt="...">';
        echo '<div class="carousel-caption">';
        echo '<h3>Team '.$godswork.'</h3>';
        echo '</div>';
        echo '</div>';
      }
      ?>
      <!--<div class="item">
        <img src="img/test2.png" alt="...">
        <div class="carousel-caption">
          <h3>Caption Text</h3>
        </div>
      </div>
      <div class="item">
        <img src="img/test3.png" alt="...">
        <div class="carousel-caption">
          <h3>Caption Text</h3>
        </div>
      </div>-->
      <div style="height:0px;overflow:hidden">
        <input type="file" id="fileInput" name="fileInput" />
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

  </div> <!-- Carousel -->
    <div id = "bottomBarr">
    <p id = "barText">MATCH OVERVIEW</p>
  </div>
    <!----------------------------TABLE------------------------------------>

<section id="cd-table">
  <div class="cd-table-container">
    <div class="cd-table-wrapper">  
    <header class="cd-table-column">
    <h2>MATCH NUMBER</h2>
    <ul>
    <?php
    foreach($team as $value){
      echo '<li><a data-toggle="modal" data-target="#Q'. $value[matchNumber] .'" href="#Q'. $value[matchNumber] .'">Q'. $value[matchNumber] .'</a></li>'; 
    }
  ?>
    </ul>
  </header>

      <div class="cd-table-column">
        <h2>TOTES</h2>
        <ul>
        <?php
          foreach($team as $value){
          echo'<li>'.$value[teleTotes].'</li>';
          }
        ?>
        </ul>
      </div> <!-- cd-table-column -->

      <div class="cd-table-column">
        <h2>POINTS</h2>
        <ul>
        <?php
          foreach($team as $value){
          echo'<li>'.$value[telePoints].'</li>';
          }
        ?>
         
        </ul>
      </div> <!-- cd-table-column -->

      <div class="cd-table-column">
        <h2>TRIPS</h2>
        <ul> 
        <?php
          foreach($team as $value){
          echo'<li>'.$value[teleTrips].'</li>';
          }
        ?>
        </ul>
      </div> <!-- cd-table-column -->

      <div class="cd-table-column">
        <h2>BINS</h2>
        <ul>
        <?php
          foreach($team as $value){
          echo'<li>'.$value[teleBins].'</li>';
          }
        ?>
   

        </ul>
      </div> <!-- cd-table-column -->

      <div class="cd-table-column">
        <h2>FRIENDLY STACK</h2>
        <ul>
        <?php
          foreach($team as $value){
          echo'<li>'.$value[teleStackedTimes].'</li>';
          }
        ?>
          
           </ul>
      </div> <!-- cd-table-column -->
    </div> <!-- cd-table-wrapper -->
  </div> <!-- cd-table-container -->

  <?php
  foreach($team as $match){
    echo  '<div class="modal fade" id="Q'.$match[matchNumber].'" tabindex="-1" role="dialog" aria-labelledby="Q'.$match[matchNumber].'" aria-hidden="true">';
    echo    '<div class="modal-dialog">';
    echo      '<div class="modal-content">';
    echo        '<div class="modal-header">';
    echo          '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo          '<h1 class="modal-title" style="font-size: 35px;" id="Q'.$match[matchNumber].'">Q'.$match[matchNumber].'</h1>';
    echo        '</div>';
    echo        '<div class="modal-body"style="padding: 0px;">';
    echo          '<div id = "bottomBarr"><p id = "barText">AUTONOMOUS</p></div>';
    echo          '<section id="cd-table2" style = "float:right; max-width:100%;">';
    echo            '<div class="cd-table-container" style="min-height: 254px;">';
    echo              '<header class="cd-table-column" style="width:40%;">';
    echo                '<ul>';
    echo                  '<li>Mobility</li>';
    echo                  '<li>Moves Tote</li>';
    echo                  '<li>Moves Bin</li>';
    echo                  '<li>Stacks Totes</li>';
    echo                  '<li>Moves Stacked Totes</li>';
    echo                  '<li>Comments</li>';
    echo                '</ul>';
    echo              '</header>';
    echo            '<div class="cd-table-column-wow" style="width:60%;">';
    echo              '<ul>';
                        if($match[autoMobility]==0){
                          echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                        } else {
                          echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                        }
                        if($match[autoMovesYellow]==0){
                          echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                        } else {
                          echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                        }
                        if($match[autoMovesContainer]==0){
                          echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                        } else {
                          echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                        }
                        if($match[autoStacks]==0){
                          echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                        } else {
                          echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                        }
                        if($match[autoMovesStack]==0){
                          echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                        } else {
                          echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                        }
                       echo '<li>'. $match[autoComments].'</li>';
    echo              '</ul>';
    echo            '</div> <!-- cd-table-column -->';
    echo        '</div> <!-- cd-table-container -->';
    echo      '</section> <!-- cd-table -->';
    echo          '<div id = "bottomBarr"><p id = "barText">TELEOPERATED</p></div>';
    echo          '<section id="cd-table2" style = "float:right; max-width:100%;">';
    echo            '<div class="cd-table-container" style="min-height: 520px;">';
    echo              '<header class="cd-table-column" style="width:40%;">';
    echo                '<ul>';
    echo                  '<li>Mobility</li>';
    echo                  '<li>Driver Skill</li>';
    echo                  '<li>Robot Ability</li>';
    echo                  '<li>Upside Down Totes</li>';
    echo                  '<li>Points Earned</li>';
    echo                  '<li>Number of Totes</li>';
    echo                  '<li>Number of Trips</li>';
    echo                  '<li>Number of Bins</li>';
    echo                  '<li>Recycling Bin Level</li>';
    echo                  '<li>Number of Times Stacked</li>';
    echo                  '<li>Comments</li>';
    echo                '</ul>';
    echo              '</header>';
    echo            '<div class="cd-table-column-wow" style="width:60%;">';
    echo              '<ul>';
                        if($match[teleMobility]==0){
                          echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                        } else {
                          echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                        }
                         echo '<li>'. $match[teleDriverSkill].'/5</li>';
                         echo '<li>'. $match[teleRobotAbility].'/5</li>';
                        if($pit[teleUpsideDown]==0){
                          echo '<li class="cd-unchecked"><span>'. No .'</span></li>';
                        } else {
                          echo '<li class="cd-checked"><span>'. Yes .'</span></li>';
                        }
                       echo '<li>'. $match[telePoints].'</li>';  
                       echo '<li>'. $match[teleTotes].'</li>';  
                       echo '<li>'. $match[teleTrips].'</li>';  
                       echo '<li>'. $match[teleBins].'</li>';
                       echo '<li>'. $match[teleBinLevel].'/6</li>';
                       echo '<li>'. $match[teleStackedTimes].'</li>';
                       echo '<li>'. $match[teleComments].'</li>';
    echo              '</ul>';
    echo            '</div> <!-- cd-table-column -->';
    echo        '</div> <!-- cd-table-container -->';
    echo      '</section> <!-- cd-table -->';
    echo        '</div>';
    echo      '</div>';
    echo    '</div>';
    echo  '</div>';
  }
 ?>   

  <em class="cd-scroll-right"></em>
</section> <!-- cd-table -->
  <!---------------------------------------SIDEBAR-------------------------------------------->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
  <a href="home.html" style="text-decoration:none;">HOME</a>
  <a href="backgroundinfo.html" style="text-decoration:none;">BACKGROUND INFO</a>
  <a href="matchinput.html" style="text-decoration:none;">MATCH INPUT</a>
  <a href = "overview.php" style="text-decoration:none;">OVERVIEW</a>
</nav>

    <!---------------------------------------JAVASCRIPT---------------------------------------->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
      interval: 3000
    })
    $(function() {
      $('.carousel').each(function(){
        $(this).carousel({
          interval: false
        });
      });
    });â€‹
    </script>
    <script>
    function chooseFile() {
      $("#fileInput").click();
    }
    </script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
      menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      menuTop = document.getElementById( 'cbp-spmenu-s3' ),
      menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
      showLeft = document.getElementById( 'showLeft' ),
      showRight = document.getElementById( 'showRight' ),
      showTop = document.getElementById( 'showTop' ),
      showBottom = document.getElementById( 'showBottom' ),
      showLeftPush = document.getElementById( 'showLeftPush' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/main.js"></script> <!-- Gem jQuery -->
  </body>
  </html>