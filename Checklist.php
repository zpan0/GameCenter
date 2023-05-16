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
    <title>Checklist</title>

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

		<!--Second row : HEADER-->
		<div class="grix-x">
			<div class="cell small-12 medium-12 large-12" id="header">
				<h1 style="font-family:'Courier New', monospace; 
						font-size: 90px; 
						text-align: center; 
						color: greenyellow; 
						margin-top: 20px;
						margin-bottom: 20px;">
					CHECKLIST
				</h1>
			</div>
		</div>

		<!--Third row : BODY-->
		<div class="grid-x">
			<div class="cell small-12 medium-12 large-12" id="body">
				<div class="checklist_items" style="font-family:'Courier New', monospace; color: greenyellow;">
                    <dl>
                        <dt>Database usage</dt>
                            <dd>&nbsp;&nbsp;&nbsp;&nbsp;
								- Database is used in this project to login and sign up. It is also used to save scores 
								into the database and to view them in a highscore list.</dd>
								<br>
                        <dt>Ajax usage</dt>
                            <dd>&nbsp;&nbsp;&nbsp;&nbsp;
								- Ajax is used to insert new users via sign up. <a href="Game_Ajax.php">VIEW HERE.</a> 
								For some security, passwords are not visable. On signup, it implements a check to see whether the 
								username has already been taken by another user. Also, after playing a game, the score is saved 
								automatically into the database through Ajax. <a href="score_Ajax.php">VIEW HERE.</a> The high 
								score list uses Ajax to view the scores without needing to refresh the page. 
								<a href="HighScores.php">VIEW HERE.</a>
							</dd>
								<br>
						<dt>Theme</dt>
                            <dd>&nbsp;&nbsp;&nbsp;&nbsp;
								- The general theme of this website is Sci-Fi. I wanted a more futuristic look to the website and
								 its games.</dd>
								<br>
                        <dt>New library usage</dt>
                            <dd>&nbsp;&nbsp;&nbsp;&nbsp;
								- A new library, Three.js, is used to create Crossy Road. It allows us to use elements to create and animate
								figures on the screen.</dd>
								<br>
                        <dt>Javascript usage</dt>
                            <dd>&nbsp;&nbsp;&nbsp;&nbsp;
								- Javascript is used to implement the games. I've also used it to check cookies instead of PHP in some 
								cases. Javascript is also used to implement Ajax functions.</dd>
								<br>
                        <dt>Membership area</dt>
                            <dd>&nbsp;&nbsp;&nbsp;&nbsp;
								- The membership area contains exclusive games for members only. <a href="memberPlay.php">VIEW HERE.</a> 
								You would not be able to access the premium games unless you're logged in. In the case that you try to access 
								this page when you're not logged in or your log in expired, you will be redirected to the login page.</dd>
								<br>
                        <dt>General user</dt>
                            <dd>&nbsp;&nbsp;&nbsp;&nbsp;
								- General users have access to games, but they are limited. However, signup is easy and free! As a general 
								user, login and signup buttons are made avaliable. To play regular games, <a href="regularPlay.php">VIEW HERE.</a>
								If you are logged in, you will be automatically redirected to the premium games.</dd>
                      </dl>
                </div>
			</div>
		</div>

	</div>
	<script src="app.js"></script>
</body>

</html>