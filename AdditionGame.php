<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--JQuery JS-->
	<script src="./jquery/jquery-3.6.3.min.js"></script>
	<!--Foundation CSS and JS-->
	<link rel="stylesheet" href="./foundation/css/foundation.css">
	<!--My stuff-->
	<link rel="stylesheet" href="Game_Style.css">
	<link rel="stylesheet" href="MultiplicationGame.css">
    <script src="AdditionGame.js"></script>
	<script src="app.js"></script>
    <title>Addition Game</title>
</head>

<body>
	<div id="entire">
		<!--First row : NAVIGATION-->
		<div class="grid-x">
			<div id="navbar" class="cell small-12 medium-12 large-12 text-right">
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
				<!--logout-->
				<a href="logout.php" id="logout" class="button nav">Log out</a>
				<!--play-->
				<a href="memberPlay.php" id="play" class="button nav">Play</a>
			</div>
		</div>

		<!--Second row : BODY-->
		<div class="grid-x">
			<div class="cell small-12 medium-12 large-12" id="body">
				<div id="container">
					<div id="title" 
						style="font-family:'Courier New', monospace; 
							   font-size: 60px; 
							   text-align: center; 
							   color: white; 
							   margin-top: 50px;
							   margin-bottom: 50px;">
						ADDITION GAME <br>
					</div>
					<div id="score" style="font-family:'Courier New', monospace; font-weight: bold;">
						SCORE: <span id="scorevalue" style="font-weight: 900">0</span>
					</div>
					<div id="correct" style="font-family:'Courier New', monospace;">
						CORRECT!
					</div>
					<div id="wrong" style="font-family:'Courier New', monospace;">
						TRY AGAIN!
					</div>
					<div id="question"></div>
					<div id="instruction" style="font-family:'Courier New', monospace; font-weight: bold;">
						CLICK ON THE CORRECT ANSWER
					</div>
					<div id="choices" style="font-family:'Courier New', monospace; color:black; font-weight: bold;">
						<div id="box1" class="box"> </div>
						<div id="box2" class="box">	</div>
						<div id="box3" class="box">	</div>
						<div id="box4" class="box">	</div>	
					</div>
					<div id="start" style="font-family:'Courier New', monospace; font-weight: bold;">
						START GAME
					</div>
					<div id="reset" style="font-family:'Courier New', monospace; font-weight: bold;">
						RESET GAME
					</div>
					<div id="timeremaining" style="font-family:'Courier New', monospace; font-weight: bold;">
						Time remaining: <span id="timeremainingvalue" style="font-weight: bold;">60</span>
					</div>
					<div id="gameOver"></div>
				</div>
			</div>
		</div>

		<!--Last row : Footer-->
		<div class="grid-x">
			<div id="navbar" class="cell small-12 medium-12 large-12">
				<p id="mathGameCredits" style="color: white; font-family:'Courier New', monospace; margin-top: 90px;">
					Credits:
					https://codepen.io/bobbidigi34/pen/rWzZgQ
				</p>
			</div>
		</div>
	</div>
</body>

</html>