<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>    
    <div class="container text-center my-5 d-block d-md-none"> <img src="../assets/imgs/logo-header-desktop.png"> </div>

    <div class="container d-flex flex-row justify-content-center mt-md-5">
        <div class="container-profile-desktop bg-white border pb-3 col-12 col-md-8 border-radius-default">
            
            <h5 class="text-muted mt-3 mb-0 d-block d-md-none"> Horários disponiveis <a href="../" class="btn btn-bighair1 float-right"> <i class="fas fa-times"></i> </a></h5>
            <h3 class="text-muted mt-3 mb-0 d-none d-md-block"> Horários disponiveis <a href="../" class="btn btn-bighair1 float-right"> Cancelar </a></h3>


            <?php
            $date_BR = date('d/m/Y', strtotime($date_schedule));
            echo "
                <small> <p class='text-muted mt-0 mb-4'> Data escolhida: $date_BR </p> </small>
            ";
                do{
                    list($hora, $minuto) = explode(':', $inicio);
                    $time_schedule_value = "$inicio";
                    $inicio = date("H:i", mktime($hora, $minuto + $intervalo) );
                    $count_time_schedule = mysqli_num_rows($time_schedule_value);
            
                    echo "
                        <a href='
                            validate-schedule.php?time_schedule=$time_schedule_value&&date_schedule=$date_schedule&&id_service_schedule=$id_service_schedule_url&&id_user_schedule=$user_login_info[id_user]' 
                            class='btn btn-outline-warning my-2 mr-1 d-inline-block d-md-none' 
                            style='width: 80px !important;'>
                                $time_schedule_value
                        </a>
                    ";

                    echo "
                    <a href='
                        validate-schedule.php?time_schedule=$time_schedule_value&&date_schedule=$date_schedule&&id_service_schedule=$id_service_schedule_url&&id_user_schedule=$user_login_info[id_user]' 
                        class='btn btn-outline-warning my-2 mr-1 d-none d-md-inline-block' 
                        style='width: 70px !important;'>
                            $time_schedule_value
                    </a>
                ";
                }       
                while( $inicio <= $final );
            ?>

        </div>
    </div>
</body>
</html>