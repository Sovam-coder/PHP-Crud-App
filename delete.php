<?php
$con = mysqli_connect('localhost', 'root', '','phoenix');
if ($con == false) {
    echo "Error in database connection!!";
    
} 
else

{
     $del=$_GET['cd'];
     
    $sql="DELETE FROM `register` WHERE `id`='$del' ";

    if(mysqli_query($con,$sql))
    {
        echo " Deleted from database";
    }
    else
    {
        echo "Error";
    }

}
?>