<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db_name = "sled";

//create connection
$conn = new mysqli($host, $username, $password, $db_name);

//check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
  
<head>
  <title>EYeD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link href="css/style.css" rel="stylesheet" />

</head>

<body>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><title>EYeD</title>
  <link rel="stylesheet" href="./MobileKit UI_files/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Mobilekit HTML Mobile UI Kit">
  <meta name="keywords" content="bootstrap, mobile template, cordova, phonegap, mobile, html, responsive">
  <link rel="apple-touch-icon" sizes="180x180" href="http://v.bootstrapmb.com/2019/12/wmkyk7134/assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="http://v.bootstrapmb.com/2019/12/wmkyk7134/assets/img/favicon.png" sizes="32x32">
  <link rel="shortcut icon" href="http://v.bootstrapmb.com/2019/12/wmkyk7134/assets/img/favicon.png"></head><body>
      <!-- App Header -->
      <div class="appHeader bg-light text-light" style="position: relative; z-index: 0;">
        <div class="pageTitle">EYeD</div><div class="right"><a href="" class="headerButton">
        <i class=""></i></a></div></div>
      <!-- * App Header -->

      <?php
      if(isset($_POST['submit']))
      {
                  $sql_add1 = "INSERT INTO komen (nama, email, komen) VALUES ('".$_POST['nama']."', 
                  '".$_POST['email']."','".$_POST['komen']."')";
                  if($result_add1 = mysqli_query($conn, $sql_add1))
                  {
      
                      echo  ("<SCRIPT LANGUAGE='JavaScript'>
                      window.alert('Berjaya Dihantar! Terima Kasih');
                      window.location='index.html';
                      </SCRIPT>");
                  }
            
      }
      ?>

<h1 style="text-align:center">Review</h1>
<form name="contactform" method="post">
    Nama:<br>
    <input type="text" name="nama"><br>
        E-mail:<br>
            <input type="text" name="email" required><br>
                Komen anda:<br>
                    <textarea name="komen" rows="5" cols="30" required></textarea><br><br>
                    <input type="submit" class="btn btn-info btn-xl js-scroll-trigger" name="submit">
    </form>
                 
   <br>
   <!-- App Bottom Menu -->
   <div class="appBottomMenu">
     <a href="index.html" class="item"><div class="col"><i class="icon ion-ios-home"></i><strong>Home</strong></div></a>
     <a href="learn.html" class="item"><div class="col"><i class="icon ion-ios-book"></i><strong> Learn</strong></div></a>
     <a href="exercise.html" class="item active"><div class="col"><i class="icon ion-ios-eye"></i><strong>Exercise</strong></div></a>
     <a href="ar.html" class="item"><div class="col"><i class="icon ion-ios-camera"></i><strong>AR</strong></div></a>
    </div>
    <!-- * App Bottom Menu -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>