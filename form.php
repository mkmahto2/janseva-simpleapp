<?php

$sql = "CREATE TABLE `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL
)";

$host='localhost';
$username='root';
$password='';
$dbase='test_sample';

$conn = mysqli_connect($host,$username,$password,$dbase);

if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>