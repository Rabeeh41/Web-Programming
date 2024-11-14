<?php
$email = $_POST['email']; 
$username = '';  
$atpos = -1; 
for($i = 0; $i < strlen($email); $i++){
    if($email[$i] == '@'){  
        $atpos = $i;
        break;  
    }
    $username .= $email[$i];  
}
if($atpos != -1){
    echo "The username from the email $email is: $username";
} else {
    echo "Invalid Email!!";  
}
?>

