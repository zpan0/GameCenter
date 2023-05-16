<?php
    // grab all functions
    require("Game_Functions.php");
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

        <title>GAME SIGNUP</title>
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
                    <!--login HTML-->
                    <a href="Game_Login.php" class="button nav">Log in</a>
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
                        SIGN UP
                    </h1>
                </div>
            </div>

            <!--Third row : BODY-->
		    <div class="grid-x">
			    <div class="cell small-6 medium-6 large-6" id="body" style="position:absolute; left:320px;">
                    <form id="insert" method = "post" onsubmit="return(insertGameUser())" autocomplete="off">
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
                            <input type="submit" id="submitBtn" value="SIGN UP">
                        </fieldset>
                    </form>
            
                    <div id="showajax"></div>
            
                    <script>
                        function insertGameUser(){
                            user = $("#username").val();
                            pass = $("#password").val();
                            $.post("./Game_Ajax.php", 
                                {"username" : user, 
                                "password" : pass}, 
                                function(data){
                                    $("#showajax").html(data);
                                }
                            );
                            $('#username, #password').val('');
                            //location.replace("Game_Login.php");
                            return(false);
                        }
                        /*
                        function showGameUsers(){
                            $.post("./Game_Ajax.php", function(data) {
                                $("#showuser").html(data);
                            });
                            return(false);
                        }
                        showGameUsers();
                        */
                    </script>
                </div>
            </div>

        </div>
    </body>
</html>