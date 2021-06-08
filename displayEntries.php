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
</head>
<body class="back-g">
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="d-block mx-auto" src="user.png" alt="" width="40" height="40">
        <span class="fs-4">Hello!!&nbsp; <?php print "$user" ?></span>
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
  <h3>Hope You're Having a Great Day!</h3>
  <span class="fs-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $date ?></span>
  </div>
  <div class="container">
    <?php 
        $con = mysqli_connect("localhost", "root", "", "journal") or die(mysqli_error());
        mysqli_select_db($con, "journal") or die("Cannot connect to database");
        // $query = mysqli_query($con, "SELECT * from entries WHERE username='$user'");
        $query1 = mysqli_query($con, "SELECT * from personalentry WHERE username='$user'");
        $query2 = mysqli_query($con, "SELECT * from workentry WHERE username='$user'");

        // $exists = mysqli_num_rows($query);
        $exists1 = mysqli_num_rows($query1);
        $exists2 = mysqli_num_rows($query2);
        echo "<br>";
        echo "<br>";
        
    ?>
<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 border textboxes">
          <h2>Personal Entry</h2>
          <?php 
            if($exists1 > 0) {
              while ($row = $query1->fetch_assoc()) {
                echo $row['date']."<br>";
                echo $row['entry']."<br>";
                echo "<br>";
                echo "<br>";
              }
            }else {
              echo "No Entries";
            }
          ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 border textboxes">
          <h2>Work Entry</h2>
            <?php 
              if($exists2 > 0) {
                while ($row = $query2->fetch_assoc()) {
                  echo $row['date']."<br>";
                  echo $row['entry']."<br>";
                  echo "<br>";
                  echo "<br>";
                }
              }else {
                echo "No Entries";
              }
            ?>
        </div>
      </div>
    <div class="form-group">
        <a href="home.php"><button class="w-100 btn btn-lg btn-primary" >Add Entry</button></a>
    </div>
  </div>
  
</body>
</html>