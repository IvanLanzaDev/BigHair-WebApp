<?php

if(!isset($email_session) && !isset($pass_session)){
    header("location: http://bighair.flatpixel.com.br/sign-in/");
    exit();
    session_destroy();
} 

?>