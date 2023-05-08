<!DOCTYPE html>
<html>
<body>
<h1>Students Detail</h1>
<form action="" method="post">
 Enter roll no : <br>
 <input type="text" name="r1"><br>
 Enter your name : <br>
 <input type="text" name="t1"><br>
 <input type="submit" name="submit" value="submit">
</form>

<?php

 $host_name="localhost";
 $user_name="root";
 $password="";
 $connect = mysqli_connect($host_name,$user_name,$password);
 
if (isset($_POST['submit'])) 
{
 $roll_no=$_POST['r1'];
 $name=$_POST['t1'];  
 $sql = "insert into students_table values('".$roll_no."','".$name."')";
 $result = mysqli_query($connect,$sql);
 if ($result)
 {
  echo "Data inserted";
 }
 else{
  echo "Not inserted";
 }
}
?>

</body>

</html>