<?php include("functions.class.php"); ?>

<?php
     session_start();
     echo $_SESSION['email_user'];
     echo $_SESSION['pass_user'];
     

     $email_session_login = $_SESSION['email_user'];

     $get_user_session_details = mysqli_query($link, "SELECT * FROM user WHERE email_user = '$email_session_login'");
     $user_session_details = mysqli_fetch_array($get_user_session_details);

     $type_user = $user_session_details['type_user'];

     

     switch($type_user){
         case "":
            header("location: ../index.php");
         break;
         case "adm":
            header("location: ../dashboard");
         break;
         
     }


     
     
?>