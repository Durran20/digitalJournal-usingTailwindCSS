<?php
    session_start();
    if($_SESSION['user']) {

    } else {
        header("location: index.php");
    }
    $user = $_SESSION['user'];
    $date = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">

    

<!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  .form-group {
      padding: 20px;
  }
</style>


<!-- Custom styles for this template -->
<link href="homestyles.css" rel="stylesheet">
<link href="styles2.css" rel="stylesheet">
</head>
<body class="back-g">
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="d-block mx-auto" src="user.png" alt="" width="40" height="40">
        <span class="fs-4">Your Profile,&nbsp; <?php print "$user" ?></span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="displayEntries.php" class="nav-link active" aria-current="page">My Entries</a></li>
        <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="profile.php" class="nav-link">My Profile</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
      </ul>
    </header>
  </div>
  <div class="container">
  <span class="fs-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $date ?></span>
  </div>


  <!-- CARD USING BOOTSTRAP -->
  <div class="container">

<!-- <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 border textboxes"> -->
        <?php 
        // $con = mysqli_connect("localhost", "root", "", "journal") or die(mysqli_error());
        // mysqli_select_db($con, "journal") or die("Cannot connect to database");
        // $query = mysqli_query($con, "SELECT * from list WHERE username='$user'");
        // $string_version = mysqli_fetch_row($query);
        //     echo "First Name: ".$string_version[0];
        //     echo "<br>";
        //     echo "<br>";
        //     echo "Last Name: ".$string_version[1];
        //     echo "<br>";
        //     echo "<br>";
        //     echo "Email ID: ".$string_version[4];
        //     echo "<br>";
        //     echo "<br>";
        //     echo "Phone Number: ".$string_version[5];
        //     echo "<br>";
    // ?>
        <!-- </div>
      </div>
</div>    -->

          <!-- CARD COMPONENET USING TAILWIND -->
        <div class="max-w-sm mx-auto flex p-6 bg-yellow-100 rounded-lg shadow-xl">
            <div class="flex-shrink-0">
              <img src="user.png" alt="" class="h-12 w-12" />
            </div>
            <div class="ml-6 pt-1">
              <h4 class="text-xl text-gray-900 font-bold">User Details: </h4>
              <!-- <p class="text-base text-gray-600">You have a new message!</p> -->
                  <?php 
                      $con = mysqli_connect("localhost", "root", "", "journal") or die(mysqli_error());
                      mysqli_select_db($con, "journal") or die("Cannot connect to database");
                      $query = mysqli_query($con, "SELECT * from list WHERE username='$user'");
                      $string_version = mysqli_fetch_row($query);
                          echo "<br>";
                          echo "First Name: ".$string_version[0];
                          echo "<br>";
                          echo "<br>";
                          echo "Last Name: ".$string_version[1];
                          echo "<br>";
                          echo "<br>";
                          echo "Email ID: ".$string_version[4];
                          echo "<br>";
                          echo "<br>";
                          echo "Phone Number: ".$string_version[5];
                          echo "<br>";
                  ?>
                </div>
            </div>
          </div>
      </div>


    <div class="form-group">
        <a href="home.php"><button class="w-100 btn btn-lg btn-primary" >Home</button></a>
    </div>
  </div>
  
</body>
</html>