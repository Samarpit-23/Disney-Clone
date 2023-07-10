<?php

$link = mysqli_connect("localhost","root","","demo");

if(!$link)
die("Error: Could not connect".mysqli_connect_error());

 $sql = "CREATE TABLE disney(name VARCHAR(20) PRIMARY KEY NOT NULL, password VARCHAR(20)NOT NULL)";

if(mysqli_query($link,$sql))
echo "table created successfully";
else
echo "Error: could not able to execute $sql".mysqli_error($link);

mysqli_close($link);
?>