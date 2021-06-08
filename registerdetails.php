<?php 
if(isset($_POST['username'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con) {
        die("connection to this database failed due to ".mysqli_connect_error());
    }

    // Collect post variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `journal`.`list` (`fname`, `lname`, `username`, `password`, `email`, `phone`) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$phone');";

    // Execute the Query
    if($con->query($sql) == true) {
        // echo "Successfully inserted";
        Print '<script>alert("Successfully Registered!");</script>';
        Print '<script>window.location.assign("index.php");</script>';
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Closing the DB connection
    $con->close();
} 
?>