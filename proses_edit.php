<?php
$id=$_GET['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone =$_POST['phone'];
$address=$_POST['address'];

include_once("koneksi.php");

$query = mysqli_query($conn ,"UPDATE customer SET first_name='$first_name', last_name='$last_name',email='$email',phone='$phone', 'address'='$address' where id ='$id';");

header("Location: index.php")
?>