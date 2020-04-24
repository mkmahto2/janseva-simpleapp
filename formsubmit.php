<?php
$con = mysqli_connect('127.0.0.1','root','');
if (!$con) {
  echo "Not connected to the server";
  // code...
}
if (!mysqli_select_db($con,'test_sample'))
{
  echo "Database not selected";


  // code...
}
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$sql = "INSERT INTO detail (name, email, mobile, age, gender) VALUES ('$name','$email','$mobile','$age','$gender')";
if (!mysqli_query($con,$sql)) {
  // code...
  echo "not inserted";}
  else {
    echo "inserted";

  }
  header("refresh:2; url=index.php");

 ?>
