<?php

print_r($_POST);
 if( isset ( $_POST ['name'] ) && isset ( $_POST['email'] )){
     $to = "sakibsaad102@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name']; 
    $headers = "From: $from"; 
    $subject = "Message via nstumuna"; 
 
    $fields = array(); 
    $fields{"name"} = "name"; 
 
    $fields{"email"} = "email"; 
    $fields{"phone"} = "phone"; 
    $fields{"message"} = "message";
 
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
    if($send){
        echo "thank you";
    }else echo "sorry";
}
else echo "error"; 
?>