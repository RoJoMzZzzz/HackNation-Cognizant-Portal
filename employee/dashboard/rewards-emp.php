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

