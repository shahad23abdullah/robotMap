<?php 

$_GET['Right']='Right';
$te= $_GET['Right'];
$dis = 20 ;
$host = "localhost";
$dbname="dir_distance";
$username="root";
$password="";

$conn = mysqli_connect($host, $username , $password , $dbname);

if(mysqli_connect_errno()){
	die("connection error:".mysqli_connect_error());
}

$sql = " INSERT INTO distancewithdirection (direction, distance)
		values (?,?);";
		
$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt,$sql)){
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt , "si",
						$te,
                        $dis);

mysqli_stmt_execute($stmt);

?>