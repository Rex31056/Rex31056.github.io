<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300, 700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="css/main copy4.css" />
  <script src="js/modernizr.custom.js"></script>
  <title>SIGMA: Home</title>
  <style>
.container {
  text-align:center;
  color:#fff;
  padding-top:220px;
}
#button1 {
  display:inline-block;
  width:140px;
  height:140px;
  background:#B94C4C;
}
#button2 {
  display:inline-block;
  width:140px;
  height:140px;
  background:#61A85F;
}
#button3 {
  display:inline-block;
  width:140px;
  height:140px;
  background:#494A7A;
}
#button4{
  display:inline-block;
  width:140px;
  height:140px;
  background:#C8A76B;
}
#button1:hover{
  background:#FF7A7A;
}
#button2:hover{
  background:#83F87F;
}
#button3:hover{
  background:#9799FF;
}
#button4:hover{
  background:#FFD68B;
}
.buttonOne{
  color:#fff;
  float:left;
  text-align:center;
  float:left;
  margin-left:17%;
  margin-right:none;
margin-top:200px;
}
.buttonTwo{
  color:#fff;
  float:left;
  text-align:center;
  margin-top:200px;
  margin-left:17%;
}
.buttonThree{
color:#fff;
float:right;
text-align:center;
margin-top:200px;
margin-right:17%;
}

.buttonFour{
  color:#fff;
 text-align:center;
 float:right;
 margin-top:200px;
 margin-left:none;
 margin-right:15%;
 }
  </style>
</head>
<!---------------------------TOP---------------------------->
<body id = "bghome" class="cbp-spmenu-push">
  <div id="blackBar">
    <div class = "wrapperz">
      <button class = "buttonStyle" id = "showLeftPush">&#x3a3;</button>
      <text id = "hugeheader">HOME </text> 
         <form action="search.php" method="post" enctype="multipart/form-data">
    </div>
  </div>
        <div class = "buttonOne">
          <button  id = "button1" onclick = "window.location='backgroundinfo.html';"><img src = "img/BGinfo.png"></button>
          <p > BACKGROUND INFO</p>
        </div>

        <div class="buttonTwo">
          <button  id = "button2" onclick ="window.location='matchinput.html'"><img src = "img/Joystick.png"></button>
          <p>MATCH INPUT</p>
        </div>

        <div class = "buttonThree">
          <button   id = "button3" onclick="window.location='overview.php'"><img src = "img/Data2.png"></button>
          <p>OVERVIEW</p>
        </div> 
    
    <!---------------------------------------SIDEBAR-------------------------------------------->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
  <a href="home.html" style="text-decoration:none;">HOME</a>
  <a href="backgroundinfo.html" style="text-decoration:none;">BACKGROUND INFO</a>
  <a href="matchinput.html" style="text-decoration:none;">MATCH INPUT</a>
  <a href = "overview.php" style="text-decoration:none;">OVERVIEW</a>
</nav>
          <p>
            <body id = "question">SEARCH FOR A TEAM</body>
            <input  data-progression type="text" name="search" value="" placeholder ="search for a team"> 
             
          </p> 
          <div class = "wrapper">
      <a href = "search.php" id = "hugeheader" >SEARCH</a><text id = "hugeheader">></text>
</a>
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
  </body>
  </html>
