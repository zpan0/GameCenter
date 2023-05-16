<?php
    // checks if cookie 'login' is set
    if(!isset($_COOKIE['userid'])){
        // if not set, go to game_regular
        header('Location: Game_Login.php');
    }

    // grab all functions
    require("Game_Functions.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crossy Road</title>
  <!--JQuery JS-->
	<script src="./jquery/jquery-3.6.3.min.js"></script>
	<!--Foundation CSS and JS-->
	<link rel="stylesheet" href="./foundation/css/foundation.css">
	<!--My stuff-->
	<link rel="stylesheet" href="Game_Style.css">
	<script src="app.js"></script>
  <link rel="stylesheet" href="./crossyroad.css">
  

</head>
<body>
    <!--First row : NAVIGATION-->
		<div class="grid-x">
			<div id="navbar" class="cell small-12 medium-12 large-12 text-right" style="margin-top: 20px; padding-right: 20px;">
				<!--homepage-->
				<a href="Game_Member.php" class="button nav">Home</a>
        <!--login HTML-->
				<a href="Game_Login.php" id="login" class="button nav">Log in</a>
				<!--signup HTML-->
				<a href="Game_Signup.php" id="signup" class="button nav">Sign up</a>
				<!--checklist HTML-->
				<a href="Checklist.php" class="button nav">Checklist</a>
				<!--description HTML-->
				<a href="Description.html" class="button nav">Description</a>
				<!--aboutUs HTML-->
				<a href="AboutUs.html" class="button nav">About us</a>
				<!--highscores-->
				<a href="HighScores.php" class="button nav">High Scores</a>
				<!--play-->
				<a href="memberPlay.php" id="play" class="button nav">Play</a>
			</div>
		</div>

    <!--Second row : BODY-->
		<div class="grid-x">
			<div class="cell small-12 medium-12 large-12" id="body">
          <!-- partial:index.partial.html -->
          <div id="counter">0</div>
          <div id="controlls">
            <div>
              <button id="forward">
                <svg width="30" height="30" viewBox="0 0 10 10">
                  <g transform="rotate(0, 5,5)">
                    <path d="M5,4 L7,6 L3,6 L5,4" />
                  </g>
                </svg>
              </button>
              <button id="left">
                <svg width="30" height="30" viewBox="0 0 10 10">
                  <g transform="rotate(-90, 5,5)">
                    <path d="M5,4 L7,6 L3,6 L5,4" />
                  </g>
                </svg>
              </button>
              <button id="backward">
                <svg width="30" height="30" viewBox="0 0 10 10">
                  <g transform="rotate(180, 5,5)">
                    <path d="M5,4 L7,6 L3,6 L5,4" />
                  </g>
                </svg>
              </button>
              <button id="right">
                <svg width="30" height="30" viewBox="0 0 10 10">
                  <g transform="rotate(90, 5,5)">
                    <path d="M5,4 L7,6 L3,6 L5,4" />
                  </g>
                </svg>
              </button>
            </div>
          </div>

          <div id="end">
            <button id="retry">Retry</button>
          </div>
          <!-- partial -->
            <script src='./three.min.js'></script><script  src="./crossyroad.js"></script>

      </div>

</body>
</html>
