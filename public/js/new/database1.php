<!DOCTYPE html>
<html>
<head>
	<title>Reg Info</title>
</head>
<body>
	<style>
		body{
			padding-top: 20px;
			background: lightpink;
		}
		#color{
			border:1px solid lightgreen;
			width:30%;
			border-radius: 25px;
			padding: 5px 0px;
			margin-top: 20px;
			padding-left: 15px;

		}
	</style>
	<form method="post" action="">

	ID:<input id="color" type="text" name="name"><br><br>
	Name:<input id="color" type="text" name="email"><br><br>
	Company:<input id="color" type="text" name="compny"><br><br>
	Price:<input id="color" type="text" name="price"><br><br>
	
	<input type="submit" name="submit">
	</form>
<?php
  // $con= mysqli_connect('localhost','root','','third');
  // if(isset($_POST['submit'])){
  // 	$nam=$_POST['name'];
  //   $mail=$_POST['email'];
  //   $query="INSERT INTO table4 (name , email) VALUES ('$nam','$mail')";
  //   $run=mysqli_query($con,$query);
  //   }
$bass= mysqli_connect('localhost','root','','student');
      if(isset($_POST['submit'])){
     	$nam=$_POST['name'];
        $cmpny=$_POST['compny'];
        $mail=$_POST['email'];
        $prce=$_POST['price'];
     
    $query="INSERT INTO product (pid , pname, pcompany, price) VALUES ('$nam','$mail','$cmpny','$prce')";
    $run=mysqli_query($bass,$query);
    }
?>
</body>
</html>