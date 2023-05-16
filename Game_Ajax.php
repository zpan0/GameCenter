<title>Game_Ajax.php</title>
<?php
    // grab all functions
    require("Game_Functions.php");

    $success = 1;
    // call InsertGameUser() function if no values are blank
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username != null || $password != null){
        $id = CheckUsername($username);
        if($id != ""){
            // if user not found, create alert    
            $success = 0;
            callAlert("USERNAME TAKEN");
        }else{
            InsertGameUser($username, $password);
            echo 
            "<script> 
                (window.confirm('USER CREATED')) 
                {
                window.location.href='Game_Login.php';
                };
            </script>";
        }
    }

    // calls the ShowGameUsers function to show all values within GameUsers table
    if ($success == 1 || $clicked == 1){
        ShowGameUsers();
    }
?>