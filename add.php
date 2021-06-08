<?php 

    session_start();

    if($_SESSION['user']) {}
    else{
        header("location: index.php");
    }

    $user = $_SESSION['user'];

    if($_SERVER['REQUEST_METHOD'] = "POST") {

        $date = date("Y/m/d");
        $personalEntry = $_POST['personalEntry'];
        $workEntry = $_POST['workEntry'];

        $con = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

        mysqli_select_db($con, "journal") or die("Cannot connect to the database");

        // WE HAVE TO CHECK IF ONE ENTRY ALREADY EXISTS!!

        $query = mysqli_query($con, "SELECT * from journal.entries WHERE username='$username'");  // Retrieves all data belonging to the specified username

        // Check if user exists
        $exists = mysqli_num_rows($query);  // If it exits, the number that $exists will hold will be greater than 0

        mysqli_query($con, "INSERT INTO `journal`.`entries` (`username`, `personalEntry`, `workEntry`, `date`) VALUES ('$user', '$personalEntry', '$workEntry', '$date');");

        

        Print '<script>alert("Successfully inserted!!");</script>';
        Print '<script>window.location.assign("home.php");</script>';

    } else {
        header("location: home.php");
    }

?>


<!-- INSERT INTO `entries` (`username`, `entry`, `date`) VALUES ('Hello', 'This is a test entry from the database itself.', '2021-06-05'); -->