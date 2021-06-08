<?php 

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Set connection variables
    $server = "localhost";

    // Create a connection
    $con = mysqli_connect($server, "root", "");

    // Check for connection success
    if(!$con) {
        die("connection to this database failed due to ".mysqli_connect_error());
    }

    $query = mysqli_query($con, "SELECT * from journal.list WHERE username='$username'");   // Retrieves data of the username given

    // Check if user exists
    $exists = mysqli_num_rows($query);  // If it exits, the number that $exists will hold will be greater than 0

    $table_users = "";
    $table_password = "";

    echo $exists;

    if($exists > 0) {   
        // Now we'll retrieve the data
        while($row = mysqli_fetch_assoc($query)) {  // extracting data stored
            $table_users = $row['username'];    // Putting the retrieved username in the table_users variable
            $table_password = $row['password']; // Putting the retrieved password in the table_password variable
        
            if (($username == $table_users) && ($password == $table_password)) {    // Checking if the username and password entered are the same as retrieved from the database
                if($password == $table_password) {
                    $_SESSION['user'] = $username;
                    header("location: displayEntries.php");
                }
            } else {
                Print '<script>alert("Incorrect Password!")</script>';
                Print '<script>window.location.assign("index.php")</script>';   
            }
        }
    } else {
        Print '<script>alert("Username Does not Exist!")</script>';
        Print '<script>window.location.assign("index.php")</script>';
     }

?> 
