<?php
if(isset($_POST['submit'])){
    $to = "noreply@Dogsite.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>

<!-- noreply@Dogsite.com -->
<!-- google form can be embedded too by adjusting width and height -->