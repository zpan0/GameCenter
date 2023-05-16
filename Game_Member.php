<?php
    // checks if cookie 'login' is set
    if(!isset($_COOKIE['userid'])){
        // if not set, go to game_regular
        header('Location: Game_Regular.php');
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

                </div>
            </div>

            <!--Third row : BODY-->
            <div class="grid-x">
                <div class="cell small-12 medium-12 large-12" id="body">
                    <h1 id="bodyText">
                        WELCOME
                        <p id="helloUser" style="font-size: 40px;">
                            <?php
                            print($_COOKIE['username']);
                            ?>
                        </p>
                    </h1>
                    <div class="text-center">
                        <a href="memberPlay.php" id="homeBtnReg" class="button nav" style="font-size: 18px;">PLAY</a>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>