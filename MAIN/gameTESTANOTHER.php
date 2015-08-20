<!-- THE GAME PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Game | SHARK PROJECT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- must be on top for Jcrop to work -->
  <script src="indexing.js"></script>
  <script src="jcrop/2/js/Jcrop.js"></script>
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="sharkcss/game.css" rel="stylesheet">
  <link rel="stylesheet" href="jcrop/2/demo_files/main.css">
  <link rel="stylesheet" href="jcrop/2/demo_files/demos.css">
  <link rel="stylesheet" href="jcrop/2/css/Jcrop.css">
  <link rel="stylesheet" href="style.css" />
  <style>/
/*#text-inputs { /*margin: 10px 8px 0;*/ /*}*
.input-group { margin-right: 1.5em; }
.nav-box { margin: 0px 0; /*background-color: #f8f8f7;*/ /*}*/

</style>
</head>
<body>
  <header class="top" role="header">
    <div class="container">
      <a href="about.html" class="navbar-brand pull-left">
        SHARK PROJECT
      </a>
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" type="button">
        <span class="glyphicon glyphicon-align-justify"></span>
      </button>
      <nav class="navbar-collapse collapse" role="navigation">
        <ul class="navbar-nav nav">
          <li><a href="game.html">Game</a></li>
          <li><a href="sguide.html">Shark Guide</a></li>
          <li><a href="leaderboard.html">Leaderboard</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="main_signin.php">Sign In</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-6">
        <div class="jc-demo-box">

          <!-- <div id="interface" class="page-interface"> -->


          <img src="images/1.jpg" id="target" alt="[Shark]" class="img-responsive img" /><!--/div> --><!-- needed for the image in browser -->
          <input type="text" id="name" style="display:none; position:absolute" />


          <div class="nav-box">
            <form onsubmit="return false;" id="text-inputs"><span class="input-group"><b>X</b>
              <input type="text" name="cx" id="crop-x" class="span1"></span><span class="input-group"><b>Y</b>
              <input type="text" name="cy" id="crop-y" class="span1"></span><span class="input-group"><b>W</b>
              <input type="text" name="cw" id="crop-w" class="span1"></span><span class="input-group"><b>H</b>
              <input type="text" name="ch" id="crop-h" class="span1"></span>
            </form>
          </div> <!-- /nav box -->

          <div class="clearfix"></div>
        </div> <!-- /jc demo box -->
      </div> <!-- /span12 -->
    </div> <!-- /row -->
  </div> <!-- /container -->

  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>