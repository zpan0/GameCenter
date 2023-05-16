<?php
    // grab all functions
    require("Game_Functions.php");

    // delete the cookie
    setcookie('userid', '', time() - 3600, '/');
    setcookie('username', '', time() - 3600, '/');

    // redirect the page to home page
    header('Location: Game_Member.php');
?>