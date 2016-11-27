<?php
include '../../dbconnect.php';session_start();
$_SESSION["succ"]='';
$_SESSION["fail"]='';
echo$_SESSION["search"] ='';

$loggedin = $_SESSION['userLoggedIn'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>i-reCOGNIZANT</title>
</head>


<body><form method="POST" enctype="multipart/form-data">
                    <br>
                    <textarea name="teka" class="statusTB" rows="4" cols="100" placeholder="Insert Question"></textarea>
                      <input type='hidden' id='date' name='date'>
                       <div class="line"></div>
                <label class="custom-file-upload">
                <input type="file" name="uploadfile" id="take-picture" accept="image/*"/>
                <i class="fa fa-cloud-upload"></i> Choose Image
                </label>
                <img src="about:blank" alt="" id="show-picture" width="95%" style="display:none">
                    
                   <!-- <input type="button" value="Post" class="btn btn-primary" id="postBtn" onClick="get()" style="width: 90px">-->
                     <input type="submit" value="Post" class="btn btn-primary" id="postSubmit" name="submit" onClick="get()" style="width: 90px;">
 </form>

     <?php

                    if(isset($_POST['submit'])){
                       // $un1 = $loggedin;
                        $un1 = $_SESSION['userLoggedIn'];
                        $user = mysql_real_escape_string($un1);
                        $post2 = mysql_real_escape_string($_POST['teka']);
                        $date = mysql_real_escape_string($_POST['date']);
                        $type= "event";
                        $college = "general";
                       // $imageData = addslashes(file_get_contents($_FILES['uploadfile']['tmp_name']));
                        $imageName = mysql_real_escape_string($_FILES["uploadfile"]["name"]);
                      // $imageData = mysql_real_escape_string(file_get_contents($_FILES["uploadfile"]["tmp_name"]));

                        $sql2=mysqli_query($conn,"INSERT into games VALUES ('','$un1','$date','','$imageName')");
                        echo $un1."<br />";
                        echo $post2."<br />";
                        echo $date;
                       /* if ($conn->query($sql) === TRUE) {
                        echo("OK!");
                            }
                        else{
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        }*/
                    }

                ?>

</body>
</html>