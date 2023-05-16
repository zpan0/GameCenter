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
	<script src="app.js"></script>
    <title>Member Games</title>

</head>

<body>
	<div id="entire">
		<!--First row : NAVIGATION-->
		<div class="grid-x">
			<div id="navbar" class="cell small-12 medium-12 large-12 text-right">
				<!--homepage-->
				<a href="Game_Member.php" class="button nav">Home</a>
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

			</div>
		</div>

		<!--Second row : HEADER-->
		<div class="grix-x">
			<div class="cell small-12 medium-12 large-12" id="header">
				<h1 style="font-family:'Courier New', monospace; 
						font-size: 90px; 
						text-align: center; 
						color: greenyellow; 
						margin-top: 20px;
						margin-bottom: 20px;">
					PREMIUM GAMES
				</h1>
			</div>
		</div>

		<!--Third row : BODY-->
		<div class="grid-x">
			<div class="cell small-12 medium-12 large-12" id="body">
				<div class="text-center" style="font-family:'Courier New', monospace; color: greenyellow;">
					<a href="AdditionGame.php"> <img src="additionGame.png" alt="additionGame" style="width:50%; height:auto;"> </a>
					<br>
					<a href="AdditionGame.php" id="homeBtnReg" class="button nav" style="font-size: 18px;">ADDITION GAME</a>
					<br>
					----------------------------------------------------------------------------------------------------
					<br>
					<a href="MultiplicationGame.php"> <img src="multiplicationGame.png" alt="multiplicationGame" style="width:50%; height:auto;"> </a>
					<br>
					<a href="MultiplicationGame.php" id="homeBtnReg" class="button nav" style="font-size: 18px;">MULTIPLICATION GAME</a>
					<br>
					----------------------------------------------------------------------------------------------------
					<br>
					<a href="crossyroad.php"> <img src="crossyroad.png" alt="crossyroad" style="width:50%; height:auto;"> </a>
					<br>
					<a href="crossyroad.php" id="homeBtnReg" class="button nav" style="font-size: 18px;">CROSSY ROAD</a>
					<br>
				</div>
			</div>
		</div>

	</div>
</body>

</html>