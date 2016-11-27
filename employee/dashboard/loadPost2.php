<?php
include '../../dbconnect.php';session_start();
$_SESSION["succ"]='';
$_SESSION["fail"]='';
echo$_SESSION["search"] ='';

?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Umak Alumni Tracker</title>
        <meta http-equiv="x-ua-compatible" content="IE=edge" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.  0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
<meta name="HandheldFriendly" content="true">
        <meta name="mobile-web-app-capable" content="yes">


        </head>
        <body>

<center>
<?php

            
            $un = $_SESSION["userLoggedIn"];



                 $sql = 'SELECT * FROM post order by id desc';
                 $result = $conn->query($sql);
                 
                    if ($result->num_rows > 0) {
                    // output data of each row
   
                    while($row = $result->fetch_assoc()) {
                        $post = $row['post'];
                        $userName = $row['employee_id'];
                        $date = $row['dateAndTime'];
                        $postId = $row['id'];
                        $image = $row['image'];

                        $sql1 = 'SELECT * FROM employeetb where employee_id="'.$userName.'"';
                        $result1 = $conn->query($sql1);
                        
                        if ($result1->num_rows > 0) {
                        // output data of each row
   
                        while($row = $result1->fetch_assoc()) {

                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $profile = $row['image'];
                        $fullname = $fname." ".$lname;
                    }
                    
                    }

                    
                        echo "<div class='wallpost2' id='wp2'>";
                        echo "<div class='profileContainer'>";
                         echo "<div class='profilePic'><img src="."data:image/png;base64,".base64_encode($profile)." width='50px' height = '50px'></div>";
                        echo "<div id='nameA' class='name' align='left'>$fullname</div>";
                        echo "<div class='timeContainer1' align='left'>$date</div>";
                        echo "</div>";
                        
                        echo "<div class='post' align='left'>$post</div>";

                        if($image != ""){
                            echo "<br>";
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" width="50%">';
                        }

                        


                        echo "</div>";
                        
                     }
   
                     } 
                    else {
    
                    }

   

                    
                

            ?>
</center>
        
            <br>

            </body>
</html>