<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#example').dataTable();
  } );
</script>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300, 700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="css/main copy3.css" />
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#example').dataTable();
      } );
    </script>
  <title>SIGMA: Overview</title>
</head>


<!---------------------------TOP---------------------------->
<body id = "bgviewing" class="cbp-spmenu-push">
  <div id="blackBar">
    <div class = "wrapperz">
      <button class = "buttonStyle" id = "showLeftPush">&#x3a3;</button>
      <a href = "home.html" id = "hugeheader" style="text-decoration:none;">HOME</a><text id = "hugeheader">></text><text id = "hugeheader">OVERVIEW</text>
    </div>


    <!---------------------------------------SIDEBAR-------------------------------------------->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
  <a href="home.html" style="text-decoration:none;">HOME</a>
  <a href="backgroundinfo.html" style="text-decoration:none;">BACKGROUND INFO</a>
  <a href="matchinput.html" style="text-decoration:none;">MATCH INPUT</a>
  <a href = "overview.php" style="text-decoration:none;">OVERVIEW</a>
</nav>
  <div class="container" style="
    margin-top: 40px;
    color: #000;
">
  <table id="example" class="display" cellspacing="0" width="100%"><thead><tr><th>TEAM NUMBER</th><th>TEAM NAME</th><th>AVG TOTES</th><th>AVG BINS</th><th>AVG POINTS</th><th>AVG STACKED</th><th>AVG TRIPS</th><th>TOTES</th><th>BINS</th><th>POINTS</th><th>STACKED</th><th>TRIPS</th></tr></thead>
  <tbody>
  <?php
$host = "localhost";
$db = "sigma";
$user = "admin";
$pass = "team3473";
$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
die( "con failed");
}
$results = mysqli_query($con,'SELECT * FROM sigma.pit');
while($row = mysqli_fetch_array($results)){
 echo' <tr><td><a href="performance.php?teamNum='.$row['teamNum'].'">'.$row[teamNum].'</a></td><td><a href="performance.php?teamNum='.$row['teamNum'].'">'.$row[teamName].'</a></td><td>'.$row[avgTotes].'</td><td>'.$row[avgBins].'</td><td>'.$row[avgPoints].'</td><td>'.$row[avgStacked].'</td><td>'.$row[avgTrips].'</td><td>'.$row[overallTotes].'</td><td>'.$row[overallBins].'</td><td>'.$row[overallPoints].'</td><td>'.$row[overallStacked].'</td><td>'.$row[overallTrips].'</td></tr>';
}
  ?>
  </tbody></table>
      </div>
    <!---------------------------------------JAVASCRIPT---------------------------------------->
    <script src="js/classie.js"></script>
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
    <script type="text/javascript">
  // For demo to fit into DataTables site builder...
  $('#example')
    .removeClass( 'display' )
    .addClass('table table-striped table-bordered');
</script>
  </body>
  </html>
