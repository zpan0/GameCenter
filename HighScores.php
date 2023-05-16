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

        <title>High Scores</title>
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
                    <a href="Game_Login.php" id="login" class="button nav">Log in</a>
                    <!--signup HTML-->
                    <a href="Game_Signup.php" id="signup" class="button nav">Sign up</a>
                    <!--checklist HTML-->
                    <a href="Checklist.php" class="button nav">Checklist</a>
                    <!--description HTML-->
				    <a href="Description.html" class="button nav">Description</a>
                    <!--aboutUs HTML-->
				    <a href="AboutUs.html" class="button nav">About us</a>
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
                        HIGH SCORES
                    </h1>
                </div>
            </div>

            <!--Third row : BODY-->
		    <div class="grid-x">
			    <div class="cell small-6 medium-6 large-6" id="body" style="position:absolute; left:320px;">
                    <!-- Login Form [uses POST] -->
                    <form method = "post" autocomplete="off" onsubmit="return(selectGame())">
                        <fieldset style="font-family:'Courier New', monospace; font-weight:bold;">
                            <!-- All inputs to form is required -->
                            <label for="game" style="color: greenyellow; font-size:20px;">CHOOSE A GAME:</label> 
                            <select id="game" name="game" style="border-radius:15px; padding-left:15px;" required>
                                <option disabled selected value> -- select an option -- </option>
                                <option value="Addition Game">Addition Game</option>
                                <option value="Multiplication Game">Multiplication Game</option>
                                <option value="Crossy Road">Crossy Road</option>
                            </select>
                            <!-- SUBMIT -->
                            <input type="submit" id="submitBtn" name="game" value="SUBMIT">
                        </fieldset>
                    </form>
                    <br>
                    <p style="font-family:'Courier New', monospace; color: greenyellow;">
                        ONLY TOP 5 SCORES ARE SHOWN <br>
                        * Scores are only recorded for users who are logged in *
                    </p>
                    <table>
                        <tr>
                            <th id="showGame" style="font-family:'Courier New', monospace; font-weight:bold; font-size:25px;"></th>
                        </tr>
                        <tr>
                            <td><div class="text-center" id="showajax" style="font-family:'Courier New', monospace; font-weight:bold;"></td>
                        </tr>
                    </table>
                    <script>
                        function selectGame(){
                            game = $("#game").val();
                            $.post("./score_Ajax.php", 
                                {"game" : game}, 
                                function(data){
                                    $("#showajax").html(data);
                                    $("#showGame").html(game);
                                }
                            );
                            $('#game').val('');
                            return(false);
                        }
                    </script>

                </div>
            </div>

        </div>

    </body>
</html>