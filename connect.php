<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gnd'];
$city=$_POST['city'];

$connect=new mysqli('localhost','root','','myphp');
if($connect->connect_error) 
    {echo 'Error while registering'. $connect->connect_error; }
else{
    $sql="INSERT INTO `dataentries` (`name`, `email`, `gender`, `city`) VALUES ('$name','$email','$gender','$city')";
    $result=$connect->query($sql);
    echo '<p style="background: url(back.jpg); background-size: cover;">';
    echo '<p style="color: red; padding:3px;  text-align: center;">Congratulations</p>';
    echo '<p style="color: green; font-size: 25px; padding:3px;  text-align: center; ">Registration successful</p>';
    echo '<p style="color: blue; font-size: 25px;padding:3px;  text-align: center; ">All your details will be sent to you via Email</p>';
    echo '</p>';
}
   
?>