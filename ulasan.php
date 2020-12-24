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

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SLeD</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav"> 
          <center><img class="img-fluid" src="img/logo.png" width="100"></center>
          <center><em><p class="mb-1">SLeD</p></em></center>
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Menu</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="index.html">Utama</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="page1.html">Bahasa Isyarat</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="ulasan.php">Ulasan</a>
      </li>
    </ul>
  </nav>

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

  <!-- Portfolio -->
  <section class="footer text-white text-center bg-primary" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-center">
          <h2 class="mb-5">Ulasan</h2>
      </div>

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
        <br>
        <br>
      </div>
    </div>
    <footer class="footer text-center">
      <p class="text small mb-0">Copyright &copy; Zugon 2020</p>
  </footer>
  </section>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
