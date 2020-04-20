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
    $name_photo_category = $_FILES['icon_category']['name'];
    $temp_name_category = $_FILES['icon_category']['tmp_name'];
    $dir_category = "../../assets/uploads/category/".$name_photo_category;
    move_uploaded_file($temp_name_category, $dir_category); 

    if(isset( $btn_new_category )) {
        $new_category = mysqli_query($link, "INSERT INTO 
            category ( name_category, icon_category ) 
            VALUES ( '$name_category','$dir_category' )
        ");
        
        if($new_category) {
            header("location: ../new-category/ok-new.php");
        }
    }

    // GET CATEGORY
    $get_category = mysqli_query($link, "SELECT * FROM category ORDER BY name_category ASC");
    $get_category_index = mysqli_query($link, "SELECT * FROM category ORDER BY name_category ASC");
    $get_category_index_mob = mysqli_query($link, "SELECT * FROM category ORDER BY name_category ASC");
    $get_all_category_index_mob = mysqli_query($link, "SELECT * FROM category ORDER BY name_category ASC");
    $count_category = mysqli_num_rows( $get_category );
    

    // DELETE CATEGORY
    $id_delete_category = $_GET['category'];
    $btn_delete_category = $_POST['btn_delete_category'];

    if(isset( $btn_delete_category )) {
        $delete_category = mysqli_query( $link, " DELETE FROM category WHERE id_category = '$id_delete_category' " );
        
        if( $delete_category ) {
            header( "location: ok-delete.php" );
        }
    }

    // GET USER
    $get_users = mysqli_query( $link, "SELECT * FROM user ORDER BY name_user ASC" );
    $count_users = mysqli_num_rows( $get_users );

    // DETAILS USER
    $get_user_id = $_GET['user_dashboard'];
    $get_id_url_users = mysqli_query( $link, "SELECT * FROM user WHERE id_user = '$get_user_id' " );
    $list_user_info_dashboard = mysqli_fetch_array( $get_id_url_users );

    // EDIT USER
    $id_user_edit_profile = $_GET['edit_user'];
    $get_edit_user_values = mysqli_query( $link, "SELECT * FROM user WHERE id_user = '$id_user_edit_profile' " );
    $list_user_edit_profile = mysqli_fetch_array( $get_edit_user_values );

    $name_edit_user = $_POST['name_user'];
    $email_edit_user = $_POST['email_user'];
    $tel1_edit_user = $_POST['tel1_user'];
    $tel2_edit_user = $_POST['tel2_user'];
    $address_edit_user = $_POST['address_user'];
    $city_edit_user = $_POST['city_user'];
    $state_edit_user = $_POST['state_user'];
    $btn_edit_user = $_POST['btn_edit_user'];

    // UPLOAD DE IMG user photo
    $name_photo_user = $_FILES['photo_user']['name'];
    $temp_name_user = $_FILES['photo_user']['tmp_name'];
    $dir_photo_user = "../assets/uploads/user_img/".$name_photo_user;
    move_uploaded_file($temp_name_user, $dir_photo_user); 

    if( isset( $btn_edit_user ) ) {
        $edit_user = mysqli_query( $link, " UPDATE user SET 
        name_user='$name_edit_user', email_user='$email_edit_user', tel1_user='$tel1_edit_user', tel2_user='$tel2_edit_user', address_user='$address_edit_user', city_user='$city_edit_user', state_user='$state_edit_user', photo_user='$dir_photo_user' 
        WHERE id_user = '$id_user_edit_profile' " );

        if( $edit_user ) {
            header( "location: ok-edit-profile.php" );
        }
    }

    // NEW SERVICE
    $name_service = $_POST['name_service'];
    $category_service = $_POST['category_service'];
    $price_service = $_POST['price_service'];
    $desc_service = $_POST['desc_service'];
    $duration_service = $_POST['duration_service'];
    $pagseguro_service = $_POST['pagseguro_service'];
    $btn_new_service = $_POST['btn_new_service'];

    // UPLOAD DE IMG service photo
    $name_photo_service = $_FILES['photo_service']['name'];
    $temp_name_service = $_FILES['photo_service']['tmp_name'];
    $dir_service = "../../assets/uploads/service/".$name_photo_service;
    move_uploaded_file($temp_name_service, $dir_service); 

    if(isset( $btn_new_service )) {
        $new_service = mysqli_query($link, "INSERT INTO 
            service ( name_service, category_service, price_service, desc_service, duration_service, photo_service, pagseguro_service ) 
            VALUES ( '$name_service','$category_service', '$price_service', '$desc_service', '$duration_service', '$dir_service', '$pagseguro_service' );
        ");
        
        
        if($new_service) {
            header("location: ../new-service/ok-new.php");
        }
    }

    // GET SERVICE
    $get_service_dashboard = mysqli_query( $link, "SELECT * FROM service ORDER BY id_service ASC" );
    $count_service = mysqli_num_rows( $get_service_dashboard );
    
    $id_service_url = $_GET['service'];
    $get_service_details = mysqli_query( $link, "SELECT * FROM service WHERE id_service = '$id_service_url' " );
    $list_service_details = mysqli_fetch_array( $get_service_details );

    $id_all_category = $_GET['id_all_category'];
    $get_all_service_category = mysqli_query( $link, "SELECT * FROM category WHERE id_category = '$id_all_category' " );
    $info_all_service_category = mysqli_fetch_array( $get_all_service_category );
    $get_all_service = mysqli_query( $link, "SELECT * FROM service WHERE category_service = '$info_all_service_category[name_category]' " );
    

    // EDIT SERVICE
    $id_edit_service = $_GET['edit_service'];
    $get_edit_service = mysqli_query( $link, "SELECT * FROM service WHERE id_service = '$id_edit_service' " );
    $list_edit_service = mysqli_fetch_array($get_edit_service);

    $btn_edit_service = $_POST['btn_edit_service'];

    if(isset( $btn_edit_service )) {
        $edit_service = mysqli_query( $link, "UPDATE service SET 
            name_service='$name_service', category_service='$category_service', price_service='$price_service', desc_service='$desc_service', duration_service='$duration_service', photo_service='$dir_service' 
            WHERE id_service = '$id_edit_service' " );

        if( $edit_service ) {
            header( 'location: ../edit-service/ok-edit.php' );
        }
    }

    // DELETE SERVICE
    $id_delete_service = $_GET['delete_service'];
    $btn_delete_service = $_POST['btn_delete_service'];

    if(isset( $btn_delete_service )) {
        $delete_service = mysqli_query( $link, "DELETE FROM service WHERE id_service = '$id_delete_service' " );

        if( $delete_service ) {
            header( 'location: ../delete-service/ok-delete.php' );
        }
    }

    // PROFILE
    $id_user_url_profile = $_GET['user'];
    $get_user_info_profile = mysqli_query( $link, "SELECT * FROM user WHERE id_user = '$id_user_url_profile' " );
    $list_user_info_profile = mysqli_fetch_array( $get_user_info_profile );

    $get_schedule_user_profile = mysqli_query( $link, "SELECT * FROM schedule WHERE id_user_schedule = '$id_user_url_profile' AND status_schedule = 0 " );
    

    // SEARCH SCHEDULE
    $date_schedule = $_POST['date_schedule'];
    $id_service_schedule = $_POST['id_service_schedule'];
    $btn_search_schedule = $_POST['btn_search_schedule'];

    if( isset( $btn_search_schedule ) ){
        header( "location: ../schedule/?date_schedule={$date_schedule}&&id_service_schedule={$id_service_schedule}" );
    }

    $id_service_schedule_url = $_GET['id_service_schedule'];

    $get_service_details_schedule = mysqli_query( $link, "SELECT * FROM service WHERE id_service = '$id_service_schedule_url' " );
    $list_schedule = mysqli_fetch_array( $get_service_details_schedule );

    




    // CREATE SCHEDULE
    $intervalo  = $list_schedule['duration_service'];

    // GET NAME OF THE DAY FOR SCHEDULE HOUR
    $date_schedule = $_GET['date_schedule'];


    $months = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
    $weekdays = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
    
    $today = getdate(strtotime($date_schedule));
    
    $day = $today["mday"];
    $month = $today["mon"];
    $nomemes = $months[$month];
    $year = $today["year"];
    $weekday = $today["wday"];
    $nameweekday = $weekdays[$weekday];

    
    if($nameweekday == "Sábado"){
      $inicio = "08:00";
      $final  = "17:00";        
    }else{
      $inicio = "08:00";          
      $final = "21:00";          
    }

    $get_all_schedules = mysqli_query( $link, "SELECT * FROM schedule WHERE status_schedule = 0 ORDER BY id_schedule ASC " );
    $count_schedules = mysqli_num_rows( $get_all_schedules );

    // DASHBOARD SCHEDULE DETAIL
    $schedule_detail_dashboard = $_GET['schedule'];
    $get_schedule_detail_dashboard = mysqli_query( $link, "SELECT * FROM schedule WHERE id_schedule = '$schedule_detail_dashboard' " );
    $list_schedule_detail_dashboard = mysqli_fetch_array( $get_schedule_detail_dashboard );

    $get_user_schedule_detail = mysqli_query( $link, "SELECT * FROM user WHERE id_user = '$list_schedule_detail_dashboard[id_user_schedule]' " );
    $list_user_schedule_detail = mysqli_fetch_array( $get_user_schedule_detail );

    $get_service_schedule_detail = mysqli_query( $link, "SELECT * FROM service WHERE id_service = '$list_schedule_detail_dashboard[service_schedule]' " );
    $list_service_schedule_detail = mysqli_fetch_array( $get_service_schedule_detail );

    // DELETE SCHEDULE
    $delete_schedule_url = $_GET['delete_schedule'];
    $btn_delete_schedule = $_POST['btn_delete_schedule'];

    if(isset( $btn_delete_schedule )) {
        $delete_schedule = mysqli_query( $link, "UPDATE schedule SET status_schedule='1' WHERE id_schedule = '$delete_schedule_url' " );
        if( $delete_schedule ) {
            header('location: ../delete-schedule/ok-delete.php');
        }
    }
?>