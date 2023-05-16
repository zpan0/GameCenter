<title>Game_Ajax.php</title>
<?php
    // grab all functions
    require("Game_Functions.php");

    $flag = 1;

    // call InsertScore() function if no values are blank
    $username = $_POST['username'];
    $game = $_POST['game'];
    $score = $_POST['score'];
    if ($username != null){
        InsertScore($username, $game, $score);
        $flag = 0;
    }
    // call HighScores() function if user inputs a game
    if ($username == null && $game != null){
        HighScores($game);
        $flag = 0;
    }

    // calls the ShowScores function to show all values within Scores table
    if($flag == 1){
        ShowScores();
    }
?>