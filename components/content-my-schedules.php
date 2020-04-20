<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="d-block d-md-none">

    
    <div class="col-12 ml-1 mt-5">
        <a href="../" class="btn btn-outline-secondary mb-3">Voltar</a>
                <div class="bg-white border border-radius-default text-center pb-4 col-12">
                    <i class="fas fa-calendar fa-2x big-hair-color-1 mt-4"></i> 
                    <p class="big-hair-color-1"> Agendamentos </p>

                    <table class="table table-sm">
                        <tbody>

                        <?php

                            while( $list_schedule_user_profile = mysqli_fetch_array( $get_schedule_user_profile ) ){
                                $date_br = date('d/m', strtotime($list_schedule_user_profile['date_schedule']));
                                $get_service_name = mysqli_query( $link, "SELECT * FROM service WHERE id_service = '$list_schedule_user_profile[service_schedule]' " );
                                $list_service_name = mysqli_fetch_array( $get_service_name );
                                echo "
                                    <tr>
                                        <th scope='row' class='text-muted'> <small> $date_br  </small> </th>
                                        <td class='text-muted'> <small> $list_service_name[name_service]  </small> </td>
                                        <td> <a href='#' class='btn btn-bighair2 btn-sm' data-toggle='modal' data-target='#ModalDetalhes$list_schedule_user_profile[id_schedule]'>Detalhes</a> </td>
                                    </tr>
                                    

                                    <div class='modal fade' id='ModalDetalhes$list_schedule_user_profile[id_schedule]' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title big-hair-color-1' id='TituloModalCentralizado'>Detalhes do agendamento </h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                                                    <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>

                                                    <div class='d-flex flex-row justify-content-center'>
                                                        <div class='col-3 px-0'>
                                                            <p class='big-hair-color-1 mb-0'> <small> Data </small> </p>
                                                            <p class='text-muted'> $date_br </p>
                                                        </div>

                                                        <div class='col-3'>
                                                            <p class='big-hair-color-1 mb-0'> <small> Horário </small> </p>
                                                            <p class='text-muted'> $list_schedule_user_profile[hour_schedule] </p>
                                                        </div>
                                                        <div class='col-3'>
                                                        <p class='big-hair-color-1 mb-0'> <small> Serviço </small> </p>
                                                        <p class='text-muted'> $list_service_name[name_service] </p>
                                                        </div>

                                                        
                                                        
                                                    </div>

                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }

                        ?>

                        </tbody>
                    </table>
                    <a href="../index.php" class="btn btn-bighair1 btn-lg btn-block">Novo agendamento</a>
                </div>
            </div>   
    </div>
    
    <!-- END MOBILE -->

<!-- ************************************************************************************************************** -->



</body>
</html>