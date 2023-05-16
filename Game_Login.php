<?php
    // grab all functions
    require("Game_Functions.php");

    // if login button is clicked
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // save username and password inputs and check if they exist using CheckGameUser()
        $username = $_POST['username'];
        $password = $_POST['password'];
        // if matched, CheckGameUser() returns the user's id, otherwise ""
        $id = CheckGameUser($username, $password);
        if($id == ""){
            // if user not found, create alert
            callAlert("USERNAME OR PASSWORD IS INCORRECT");
            // and delete cookie
            setcookie('userid', '', time() - 3600, '/');
        } else{
            // if user found, set cookie - lasts 1hr = 3600
            setcookie('userid', $id, time() + 3600, '/');
            setcookie('username', $username, time() + 3600, '/');
            // and set header back to original page
            header('Location: Game_Member.php');
        }
    }
?>

<html>
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

        <title>GAME LOGIN</title>
        <style>
            #submitBtn{
                margin-top: 10px;
            }
        </style>
    </head>

    <body>
        <div id="entire">
            <!--First row : NAVIGATION-->
            <div class="grid-x">
                <div id="navbar" class="cell small-12 medium-12 large-12 text-right">
                    <!--homepage-->
                    <a href="Game_Member.php" class="button nav">Home</a>

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

            <!--Second row : HEADER-->
            <div class="grix-x">
                <div class="cell small-12 medium-12 large-12" id="header">
                    <h1 style="font-family:'Courier New', monospace; 
                            font-size: 90px; 
                            text-align: center; 
                            color: greenyellow; 
                            margin-top: 20px;
                            margin-bottom: 20px;">
                        LOG IN
                    </h1>
                </div>
            </div>

            <!--Third row : BODY-->
		    <div class="grid-x">
			    <div class="cell small-6 medium-6 large-6" id="body" style="position:absolute; left:320px;">
                    <!-- Login Form [uses POST] -->
                    <form method = "post" autocomplete="off">
                        <fieldset>
                            <!-- All inputs to form is required -->
                            <!-- USERNAME -->
                            <label for="username" id="inputLabels"> USERNAME: </label>
                            <input type="text" id="username" name="username" style="font-family:'Courier New', monospace; font-weight:bold" required>
                            <br>
                            <!-- PASSWORD -->
                            <label for="password" id="inputLabels"> PASSWORD: </label>
                            <input type="text" id="password" name="password" style="font-family:'Courier New', monospace; font-weight:bold" required>
                            <p style="font-family:'Courier New', monospace; color: greenyellow;"> 
                                * BOTH USERNAME AND PASSWORD ARE CASE SENSITIVE 
                            </p>
                            <br>
                            <!-- SUBMIT -->
                            <input type="submit" id="submitBtn" name="login" value="LOG IN">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </body>
</html>