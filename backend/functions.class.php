<?php

    include("connect.class.php");

    $frase = "HELLO";
    

    // NEW USER
    $new_name_user = $_POST['name_user'];
    $new_email_user = $_POST['email_user'];
    $new_pass_user = $_POST['pass_user'];
    $btn_new_user = $_POST['btn_new_user'];

    if(isset( $btn_new_user )) {
        $new_user = mysqli_query( $link, "INSERT INTO user ( name_user, email_user, pass_user ) VALUES ( '$new_name_user', '$new_email_user', '$new_pass_user' ) " );
        if( $new_user ) {
            session_start();
            $_SESSION['email_user'] = $new_email_user;
            $_SESSION['pass_user'] = $new_pass_user;

            header( "location: ok-new-user.php" );

        }else{ echo "erro"; }
    }

    // LOGIN
    $email_login = $_POST['email_user'];
    $password_login = $_POST['pass_user'];
    $btn_login = $_POST['btn_login'];

    if(isset($btn_login)){
        $execute_login = mysqli_query($link, "SELECT * FROM user WHERE email_user = '$email_login' AND pass_user = '$password_login'");
        $count_execute_login = mysqli_num_rows($execute_login);

        if($count_execute_login == 1){
            session_start();
            $_SESSION['email_user'] = $_POST['email_user'];
            $_SESSION['pass_user'] = $_POST['pass_user'];

            header("location: ../backend/validate.php");

        }else{
            echo "Erro Login";

            echo $email_login;
            echo $password_login;
        }
    }

    // NEW CATEGORY
    $name_category = $_POST['name_category'];
    $btn_new_category = $_POST['btn_new_category'];

    // UPLOAD DE IMG category icons
    $nome = $_FILES['icon_category']['name'];
    $temporario = $_FILES['icon_category']['tmp_name'];
    $diretorio = "../../assets/uploads/category/".$nome;
    move_uploaded_file($temporario, $diretorio); 

    if(isset( $btn_new_category )) {
        $new_category = mysqli_query($link, "INSERT INTO 
            category ( name_category, icon_category ) 
            VALUES ( '$name_category','$diretorio' )
        ");
        
        if($new_category) {
            header("location: ../new-category/ok-new.php");
        }
    }

    // GET CATEGORY
    $get_category = mysqli_query($link, "SELECT * FROM category ORDER BY name_category ASC");
    

?>