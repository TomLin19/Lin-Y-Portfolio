<?php

// var_dump($_GET);

//var_dump（$_post['name]);
if(empty($_POST)){
    echo 'No...';
    exit;
}
$myName = '';
$myEmail= '';
$myMessage = '';
$recipient= 'Tom_lin@fanshtest.ca';

//some alidations
if (isset($_POST['myName'])){
    $Myname = filter_var($_POST['myName'],FILTER_SANITIZE_STRING);
}

if(isset($_POST['myEmail'])){
    $myEmail = str_replace(array("\r","\n","%0a","%0d"),'',$_POST['myEmail']);
    $myEmail=filter_var($myEmail,FILTER_SANITIZE_STRING);
}

if(isset($_POST['myMessage'])){
    $message = $_POST['myMessage'];
}

// $headers = [
//     'From'=>'noreply@test.ca',
//     'reply-To'=>$name.'<'.$email.'>'
// ];

if (mail($recipient, $myName, $myMessage,$myEmail)) {
    echo '<p>Thank you for contacting me,'.$myName.'You will get  a reply within 36 hours</p>';
}else{
    echo '<p>We are sorry but the email did not go through</p>';
}


