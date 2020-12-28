<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db_name = "spectral";

//create connection
$conn = new mysqli($host, $username, $password, $db_name);

//check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
			$sql_add1 = "INSERT INTO product (picture, name, description) VALUES ('".$_POST['product_name']."', 
            '".$_POST['description']."', product_image = '".$_FILES['picture']['name']."')";
			if($result_add1 = mysqli_query($conn, $sql_add1))
			{

				echo  ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Success');
				window.location='index.html';
				</SCRIPT>");
			}
}
?>

<form name="contactform" method="post">
<div class="form-group">
				<b><center><label>Product Image</label></center></b>
				<center><input class="form-control" type="file" name="picture" /></center> 
			</div>	
        Product Name:<br>
        <input type="text" name="name"><br>
                    Description:<br>
                        <textarea name="description" rows="5" cols="30" required></textarea><br><br>
                        <input type="submit" class="btn btn-info btn-xl js-scroll-trigger" name="submit">
        </form>
