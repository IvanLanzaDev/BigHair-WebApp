<?php

$get_user_type = mysqli_query( $link, "SELECT * FROM user WHERE email_user = '$email_session' " );
$list_user_type = mysqli_fetch_array( $get_user_type );

/*if($list_user_type['type_user'] != "adm") {
    header("location: http://bighair.flatpixel.com.br/");
}*/

if(!isset($email_session) && !isset($pass_session)){
    header("location: http://bighair.flatpixel.com.br/sign-in/");
    exit();
    session_destroy();
}

?>