<?php

$servername ="localhost"; $username="root"; $password="";

//connects msyql database to php
$conn = mysqli_connect($servername, $username, $password, 'cognizantdb');
if(!$conn)
{
	//display connection failed if the mysql database is not successfully connected 
		die("Connection failed: ".mysqli_connect_error());
}
else{
	ob_start();
	
}


?>