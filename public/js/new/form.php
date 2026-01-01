<!DOCTYPE html>
<html>
<head>
	<title>Form get and post</title>
</head>
<body>
	<form action="testform.php" method="post">
		Name : <input type="text" name="name"><br><br>
		Age : <input type="text" name="age"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	


  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>AGE</th>
    </tr>
    <tbody>
      <tr>
        <<!-- td><?php echo $_POST['id'];?></td>
        <td><?php echo $_POST['name'];?></td>
        <td><?php echo $_POST['age'];?></td> -->
      </tr>
    </tbody>
  </table>


	<?php
 
      $bass= mysqli_connect('localhost','root','','student');
        if(isset($_POST['submit'])){
     	$nam=$_POST['name'];
     	$age=$_POST['age'];
     

$form="SELECT*FROM student";

$result = $bass->query($form);

echo $result;
        $query="INSERT INTO form (name, age) 
        VALUES ('$nam','$age')";
    $run=mysqli_query($bass,$query);
    }

    ?>
   

</body>
</html>