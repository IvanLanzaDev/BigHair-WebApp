<?php

include("../backend/functions.class.php");
include("../backend/session.class.php");
include("../backend/validate-session.php");

// GET PARAMS
$time_validate_schedule = $_GET['time_schedule'];
$date_validate_schedule = $_GET['date_schedule'];
$id_service_validate_schedule = $_GET['id_service_schedule'];
$id_user_validate_schedule = $_GET['id_user_schedule'];






$validade_schedule = mysqli_query( $link, "SELECT * FROM schedule WHERE date_schedule = '$date_validate_schedule' AND hour_schedule = '$time_validate_schedule' AND service_schedule = '$id_service_validate_schedule' " );

/*
echo $time_validate_schedule;
echo "<br>";
echo $date_validate_schedule;
echo "<br>";
echo $id_service_validate_schedule;
echo "<br>";
echo $id_user_validate_schedule;
*/

$count_schedule = mysqli_num_rows( $validade_schedule );

if($count_schedule == 0) {
    $create_schedule = mysqli_query( $link, "INSERT INTO schedule ( id_user_schedule, date_schedule, hour_schedule, service_schedule, status_schedule ) VALUES ( '$id_user_validate_schedule', '$date_validate_schedule', '$time_validate_schedule', '$id_service_validate_schedule', '0' )" );

    if( $create_schedule ) {
        $get_created_schedule = mysqli_query( $link, "SELECT * FROM schedule WHERE 
            id_user_schedule = '$id_user_validate_schedule' 
            AND date_schedule = '$date_validate_schedule' 
            AND hour_schedule = '$time_validate_schedule' 
            AND service_schedule = '$id_service_validate_schedule' " );
        
        $list_get_created_schedule = mysqli_fetch_array( $get_created_schedule );

        header("Location: confirm-schedule.php?schedule=$list_get_created_schedule[id_schedule]");
    }  
}else{
    header("Location: error-schedule.php?date_confirm_schedule=$date_validate_schedule&&id_confirm_schedule=$id_service_validate_schedule");
}



/*else{
    
}*/

?>
