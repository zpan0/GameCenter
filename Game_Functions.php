<?php 
    // PHP to MySQL server
    define('DB_NAME', "zpan3");
    define('DB_USER', "zpan3");
    define('DB_PASSWORD', "zpan3");
    define('DB_HOST', "localhost");

    // Creates a connection wtih MySQL
    function Connection(){
        // Create connection
        $conn = mysqli_connect(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    // Checks the values of the User table and verifies if username and password exists
    function CheckGameUser($username, $password){
        // Create connection to MySQL
        $conn = connection();

        // Select values from table "GameUser"
        $select = "SELECT id, username, password FROM GameUser";
        // Execute the SQL statement
        $result = mysqli_query($conn, $select);

        // Iterate through the results
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                // if username and password combination is found in database, return the user's id
                if (($row["username"] == $username) && ($row["password"] == $password)){
                    return $row["id"];
                }
            }
        } else {
            echo "0 results";
        }

        // Close connection to MySQL
        mysqli_close($conn);
    }

    // Calls an alert with a message
    function callAlert($message){
        echo 
        "<script> 
            alert('$message');
        </script>";
    }

    // Inserts new users into GameUser table
    function InsertGameUser($username, $password){
        // Create connection to MySQL
        $conn = connection();

        // Insert values into table "GameUser"
        $insert = "INSERT INTO GameUser VALUES (null, '$username', '$password')";
        // Execute the SQL statement
        $result = mysqli_query($conn, $insert);

        // Close connection to MySQL
        mysqli_close($conn);
    }

    // Shows the values of GameUser table
    function ShowGameUsers(){
        // Create connection to MySQL
        $conn = connection();

        // Select values from table "People"
        $select = "SELECT id, username, password FROM GameUser";
        // Execute the SQL statement
        $result = mysqli_query($conn, $select);

        // Iterate through the results
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                echo "id: " . $row["id"]. 
                " - username: " . $row["username"]. 
                "<br>";
            }
        } else {
            echo "0 results";
        }

        // Close connection to MySQL
        mysqli_close($conn);
    }

     // Checks the values of the User table and verifies if username and password exists
     function CheckUsername($username){
        // Create connection to MySQL
        $conn = connection();

        // Select values from table "GameUser"
        $select = "SELECT id, username FROM GameUser";
        // Execute the SQL statement
        $result = mysqli_query($conn, $select);

        // Iterate through the results
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                // if username and password combination is found in database, return the user's id
                if ($row["username"] == $username){
                    return $row["id"];
                }
            }
        } else {
            echo "0 results";
        }

        // Close connection to MySQL
        mysqli_close($conn);
    }

    // Inserts new users into GameUser table
    function InsertScore($username, $game, $score){
        // Create connection to MySQL
        $conn = connection();

        // Insert values into table "GameUser"
        $insert = "INSERT INTO Scores VALUES ('$username', '$game', '$score')";
        // Execute the SQL statement
        $result = mysqli_query($conn, $insert);

        // Close connection to MySQL
        mysqli_close($conn);
    }

    // Shows the values of score table
    function ShowScores(){
        // Create connection to MySQL
        $conn = connection();

        // Select values from table "People"
        $select = "SELECT username, game, score FROM Scores";
        // Execute the SQL statement
        $result = mysqli_query($conn, $select);

        // Iterate through the results
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if ($row["username"] == null){
                    $row["username"] = "guest";
                }
                echo "username: " . $row["username"]. 
                " - game: " . $row["game"].
                " - score: " . $row["score"]. 
                "<br>";
            }
        } else {
            echo "0 results";
        }

        // Close connection to MySQL
        mysqli_close($conn);
    }

    function HighScores($game){
        $conn = connection();

        $other = "'".$game."'";
        $what = "'Addition Game'";
        // get to 2 scores
        $subquery = "SELECT * FROM `Scores` WHERE game = " .$other." ORDER BY score DESC LIMIT 5;";
        $select = $subquery;
        // Execute the SQL statement
        $result = mysqli_query($conn, $select);

        // Iterate through the results
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "username: " . $row["username"].
                " - score: " . $row["score"]. 
                "<br>";
            }
        } else {
            echo "0 results";
        }
        // Close connection to MySQL
        mysqli_close($conn);
    }