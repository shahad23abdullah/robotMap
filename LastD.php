<?php

$conn= mysqli_connect('127.0.0.1','root','','dir_distance');

$sql= mysqli_query($conn,"SELECT * FROM distancewithdirection ORDER BY ID DESC LIMIT 1 ");

$print_last_D = mysqli_fetch_row($sql);

echo $print_last_D[0];


echo "\n";
echo $print_last_D[1];

echo "\n";
echo $print_last_D[2];




?>