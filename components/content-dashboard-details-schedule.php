<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- MOBILE -->
    <div class="container">
        <div class="jumbotron bg-white">
            
            <h1 class="display-4 d-none d-md-block">
                Detalhes do agendamento 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
            </h1> 
            <p class="lead d-block d-md-none">
                Detalhes do agendamento 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
            </p> 
            <hr>
            
            <div class="col-12 px-0">
                <small> <p class="big-hair-color-1 mb-0"> Cliente </p> </small>
                <p class="lead text-muted"> <small> <?php echo $list_user_schedule_detail['name_user'] ?> </small> </p>
            </div>

            <div class="row col-12">
                <div class="col-6 col-md-2 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Data </p> </small>
                    <p class="lead text-muted"> <small> <?php $date_br = date('d/m', strtotime($list_schedule_detail_dashboard['date_schedule'])); echo $date_br; ?> </small> </p>
                </div>

                <div class="col-6 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Horário </p> </small>
                    <p class="lead text-muted"> <small> <?php echo $list_schedule_detail_dashboard['hour_schedule'] ?> </small> </p>
                </div>
            </div>

            <div class="col-12 px-0">
                <small> <p class="big-hair-color-1 mb-0"> Serviço </p> </small>
                <p class="lead text-muted"> <small> <?php echo $list_service_schedule_detail['name_service'] ?> </small> </p>
            </div>

            <a href="../delete-schedule/?delete_schedule=<?php echo $list_schedule_detail_dashboard['id_schedule']; ?>" class="btn btn-outline-danger btn-lg btn-block d-block d-md-none"> Desmarcar </a>
            <a href="../delete-schedule/?delete_schedule=<?php echo $list_schedule_detail_dashboard['id_schedule']; ?>" class="btn btn-outline-danger btn-lg d-none d-md-inline-block"> Desmarcar </a>
        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
