<?php
if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $addr=$_POST['addr'];
    $gender=$_POST['gender'];
    
    $con=mysqli_connect('localhost','root','','phoenix');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        $imgDir = "./images";

        $tempName = $_FILES['image']['tmp_name'];
        $imgName = basename($_FILES['image']['name']);

        move_uploaded_file($tempName, "$imgDir/$imgName");

        
        $insert="INSERT INTO `register`(`uname`,`email`,`contact`,`addr`, `gender`,`image` ) VALUES ('$uname','$email','$contact','$addr','$gender','$imgName')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script>
                 alert("Registed Succesfully In Phoenix Portal");
                 window.open('index.html','_self');
                </script>
                
                
            <?php
            }
            else{
                echo "error";
            }
        
    }
        
}
?>
    