<?php 
include '../../dbconnect.php'; 
session_start();
//error_reporting(0);

$sel = "select * from rewardtbl";
$res = mysqli_query($conn, $sel);
while ($row = mysqli_fetch_array($res)) {
		$im = $row['image'];
		$des = $row['desc'];
		$pts = $row['points'];
		?><br><br><img src="<?php echo"data:image/png;base64,".base64_encode($im); ?>" width="20%"><br><br><?php
		echo "Description: ".$des."<br>Points required: ".$pts." points<br><br><br>";
			}

?>


	<form method="POST" enctype="multipart/form-data">

	<input type="file" name="rewardImg"/>
	<br />
	Description:
	<input type="text" name="description"/>
	<br />
	Points needed:
	<input type="number" name="points"/>
	<br />
	<br />
	<input type="submit" name="submit_image" value="Add Rewards to List"/>	
	</form>


<?php

if(isset($_POST['submit_image'])) {

	$image = addslashes(file_get_contents($_FILES['rewardImg']['tmp_name']));
	$descr = $_POST['description'];
	$pts = $_POST['points'];

	header("Content-type: image/jpeg");
	$sql = "insert into rewardtbl VALUES('','$image','$descr','$pts') ";
	$search = mysqli_query($conn, $sql);

	

}

?>

