<?php
    // checks if cookie 'login' is set
    if(isset($_COOKIE['userid'])){
        // if set, go to Game_Member
        header('Location: Game_Member.php');
    }

    // grab all functions
    require("Game_Functions.php");
?>


<html>
    <head>
        <!--JQuery JS-->
        <script src="./jquery/jquery-3.6.3.min.js"></script>
        <!--Foundation CSS and JS-->
        <link rel="stylesheet" href="./foundation/css/foundation.css">
        <!--My stuff-->
        <link rel="stylesheet" href="Game_Style.css">
        <script src="app.js"></script>
        <title>GAME</title>
    </head>

    <body>

        <div id="entire">
            <!--First row : NAVIGATION-->
            <div class="grid-x">
                <div id="navbar" class="cell small-12 medium-12 large-12 text-right">
                    <!--login HTML-->
                    <a href="Game_Login.php" class="button nav">Log in</a>
                    <!--signup HTML-->
                    <a href="Game_Signup.php" class="button nav">Sign up</a>
                    <!--checklist HTML-->
                    <a href="Checklist.php" class="button nav">Checklist</a>
                    <!--description HTML-->
				    <a href="Description.html" class="button nav">Description</a>
                    <!--aboutUs HTML-->
				    <a href="AboutUs.html" class="button nav">About us</a>
                    <!--highscores-->
				    <a href="HighScores.php" class="button nav">High Scores</a>

                </div>
            </div>

            <!--Second row : HEADER-->
            <div class="grix-x">
                <div class="cell small-12 medium-12 large-12" id="header">

                </div>
            </div>

            <!--Third row : BODY-->
            <div class="grid-x">
                <div class="cell small-12 medium-12 large-12" id="body">
                    <h1 id="bodyText">
                        WELCOME
                    </h1>
                    <p id="loginText" style="font-size: 20px;">
                        ENJOY OUR FREE GAMES
                    </p>
                    <div class="text-center">
                        <a href="regularPlay.php" id="homeBtnReg" class="button nav" style="font-size: 18px;">PLAY</a>
                    </div>
                    <p id="loginText" style="font-size: 20px;">
                        </br></br>
                        SIGN UP OR LOG IN FOR PREMIUM GAMES
                    </p>
                    <div class="text-center">
                        <a href="Game_Signup.php" id="homeBtnReg" class="button nav" style="font-size: 18px;">SIGN UP</a>
                        <a href="Game_Login.php" id="homeBtnReg" class="button nav" style="font-size: 18px;">LOG IN</a>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>