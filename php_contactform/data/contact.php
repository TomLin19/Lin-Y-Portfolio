<?php

// var_dump($_GET);

//var_dump（$_post['name]);
if(empty($_POST)){
    echo 'No...';
    exit;
}
$name = '';
$email= '';
$message = '';
$recipient= 'Tom_lin@fanshtest.ca';

//some alidations
if (isset($_POST['user-name'])){
    $name = filter_var($_POST['user-name'],FILTER_SANITIZE_STRING);
}

if(isset($_POST['user-email'])){
    $email = str_replace(array("\r","\n","%0a","%0d"),'',$_POST['user-email']);
    $email=filter_var($email,FILTER_SANITIZE_STRING);
}

if(isset($_POST['message'])){
    $message = $_POST['message'];
}

// $headers = [
//     'From'=>'noreply@test.ca',
//     'reply-To'=>$name.'<'.$email.'>'
// ];

if (mail($recipient, $name, $message)) {
    echo '<p>Thank you for contacting me,'.$name.'You will get  a reply within 36 hours</p>';
}else{
    echo '<p>We are sorry but the email did not go through</p>';
}

