<?php 
 session_start();
    
    
 $email_session = mysqli_real_escape_string($link, $_SESSION['email_user']);
 $pass_session = mysqli_real_escape_string($link, $_SESSION['pass_user']);
 $get_user_session = mysqli_query($link, "SELECT * FROM `user` WHERE email_user = '$email_session' AND pass_user = '$pass_session' ");
 $show_user_session = mysqli_fetch_array( $get_user_session );

$email_session = $_SESSION["email_user"];
$pass_session = $_SESSION["pass_user"];

$user_login = mysqli_query($link, "SELECT * FROM user WHERE email_user = '$_SESSION[email_user]' AND pass_user = '$_SESSION[pass_user]'");
$user_login_info = mysqli_fetch_array($user_login);  
?>