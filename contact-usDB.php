<?php
    include('admin/include/config.php');
    if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn, "INSERT INTO `contact_us`(`name`,`phone`,`email`,`subject`,`message`) VALUES('$name','$phone','$email','$subject','$message')");

    if( $sql==1){
        echo "<script>window.location='contact-us.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>