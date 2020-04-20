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
            
            <h5 class="text-muted mt-3 mb-0 d-block d-md-none"> Confirmar agendamento <a href="../" class="btn btn-bighair1 float-right"> <i class="fas fa-times"></i> </a></h5>
            <h3 class="text-muted mt-3 mb-0 d-none d-md-block"> Confirmar agendamento <a href="../" class="btn btn-bighair1 float-right"> Cancelar </a></h3>

            <?php
                // GET PARAMS
                $schedule_id_url = $_GET['schedule'];
                $get_schedule = mysqli_query( $link, "SELECT * FROM schedule WHERE id_schedule = '$schedule_id_url'" );
                $list_get_schedule = mysqli_fetch_array( $get_schedule );

                $get_name_service = mysqli_query( $link, "SELECT * FROM service WHERE id_service = '$list_get_schedule[service_schedule]'" );
                $list_name_service = mysqli_fetch_array( $get_name_service );
            ?>

            <div class="row col-12 mt-5">
                <div class="col-6 col-md-3 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Data </p> </small>
                    <p class="lead text-muted"> <small> <?php echo $list_get_schedule['date_schedule']; ?> </small> </p>
                </div>

                <div class="col-6 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Horário </p> </small>
                    <p class="lead text-muted"> <small> <?php echo $list_get_schedule['hour_schedule']; ?> </small> </p>
                </div>
            </div>

            <div class="row col-12 ">
                <div class="col-6 col-md-3 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Serviço </p> </small>
                    <p class="lead text-muted"> <small> <?php echo $list_name_service['name_service']; ?> </small> </p>
                </div>

                <div class="col-6 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Valor </p> </small>
                    <p class="lead text-muted"> <small> R$ <?php echo $list_name_service['price_service']; ?> </small> </p>
                </div>
            </div>

            <?php echo $list_name_service['pagseguro_service']; ?>

           

        </div>
    </div>
</body>
</html>