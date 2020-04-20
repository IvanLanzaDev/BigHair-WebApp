<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="d-block d-md-none">
        <div class="container-fluid mx-0 my-0 px-0 py-0">

            <?php

                if( $list_user_info_profile['photo_user'] == "../assets/uploads/user_img/" || $list_user_info_profile['photo_user'] == "" ){
                    echo "<div class='user-cover' style='background: #F7CAA3;'> </div>";
                }else{
                    echo "
                        <div class='user-cover' style='background-image: url( $list_user_info_profile[photo_user] );'> </div>
                    ";
                }

            ?>

            
            <div class="container fixed-top mt-4">
                <a href="../" class="btn btn-bighair1 rounded-circle"> <i class="fas fa-arrow-left"></i> </a> 
                <a href="../edit-profile/?edit_user=<?php echo $list_user_info_profile[id_user]; ?>" class="badge badge-light big-hair-bg-1 text-white float-right px-3 py-3">
                    <i class="fas fa-user-edit"></i> Editar dados
                </a>
            </div>
        </div>
        <div class="container bg-white text-center pb-5">
            <?php

                if( $list_user_info_profile['photo_user'] == "../assets/uploads/user_img/" || $list_user_info_profile['photo_user'] == "" ){
                    echo " <img src='../assets/icons/user-placeholder-icon.svg' class='user-img img-fluid mb-4'> ";
                }
                
                else{
                    echo " <img src='$list_user_info_profile[photo_user]' class='user-img mb-4'> ";
                }

            ?>
            

            <h3 class="big-hair-color-1"> <?php echo $list_user_info_profile['name_user']; ?> </h3>
            <p class="text-secondary"> <?php echo $list_user_info_profile['email_user']; ?> </p>

            <?php
               
                if( $list_user_info_profile['tel2_user'] == "" || $list_user_info_profile['address_user'] == "" || $list_user_info_profile['city_user'] == "" || $list_user_info_profile['state_user'] == "" ) {
                    echo "
                    <div class='alert alert-warning' role='alert'>
                        Seu perfil ainda está incompleto.<br> Você pode <a href='../edit-profile/?edit_user=$list_user_info_profile[id_user]' class='alert-link'>completar seu perfil</a> clicando aqui se quiser.<br>
                        <small>  Ao preencher seu perfil este aviso é removido </small>
                    </div>
                    ";
                }

            ?>

            <div class="user-data text-left big-hair-color-1">
                <small> <p class="my-0">Telefone</p> </small>
                <p class="lead my-0 text-secondary"> <?php
                    if( $list_user_info_profile['tel1_user'] != "" ) {
                        echo $list_user_info_profile['tel1_user'];
                    }else{ echo "Sem dados"; }
                ?>  </p>
                <p class="lead text-secondary"> <?php
                    if( $list_user_info_profile['tel2_user'] != "" ) {
                        echo $list_user_info_profile['tel2_user'];
                    }else{ echo "Sem dados"; }
                ?>  </p>

                <small> <p class="my-0">Endereço</p> </small>
                <p class="lead text-secondary"><?php
                    if( $list_user_info_profile['address_user'] != "" ) {
                        echo $list_user_info_profile['address_user'];
                    }else{ echo "Sem dados"; }
                ?>  </p>

                <small> <p class="my-0">Cidade</p> </small>
                <p class="lead text-secondary"><?php
                    if( $list_user_info_profile['city_user'] != "" ) {
                        echo $list_user_info_profile['city_user'];
                    }else{ echo "Sem dados"; }
                ?>  </p>

                <small> <p class="my-0">Estado</p> </small>
                <p class="lead text-secondary"><?php
                    if( $list_user_info_profile['state_user'] != "" ) {
                        echo $list_user_info_profile['state_user'];
                    }else{ echo "Sem dados"; }
                ?>  </p>

            </div>
        </div>
    </div>
    
    <!-- END MOBILE -->

<!-- ************************************************************************************************************** -->

    <!-- DESKTOP -->
    <div class="d-none d-md-block">
        <div class="container d-flex flex-row mt-5">
            <div class="container-profile-desktop bg-white border col-8 border-radius-default">

                <?php

                    if( $list_user_info_profile['photo_user'] == "../assets/uploads/user_img/" || $list_user_info_profile['photo_user'] == "" ){
                        echo " <div class='user-cover' style='background: #F7CAA3;'> </div> ";
                        echo " <img src='../assets/icons/user-placeholder-icon.svg' class='user-img img-fluid mb-4'> ";
                    }else{
                        echo "
                            <div class='user-cover' style='background-image: url( $list_user_info_profile[photo_user] ); background-repeat: no-repeat !important; background-size: cover; '> </div>
                        ";
                        echo " <img src='$list_user_info_profile[photo_user]' class='user-img mb-4'> ";
                    }

                    if( $list_user_info_profile['tel2_user'] == "" || $list_user_info_profile['address_user'] == "" || $list_user_info_profile['city_user'] == "" || $list_user_info_profile['state_user'] == "" ) {
                        echo "
                        <div class='alert alert-warning' role='alert'>
                            Seu perfil ainda está incompleto.<br> Você pode <a href='../edit-profile/?edit_user=$list_user_info_profile[id_user]' class='alert-link'>completar seu perfil</a> clicando aqui se quiser.<br>
                            <small>  Ao preencher seu perfil este aviso é removido </small>
                        </div>
                        ";
                    }
                    

                ?>

                
                <a href="../edit-profile/?edit_user=<?php echo $list_user_info_profile[id_user]; ?>" class="badge badge-light big-hair-bg-1 text-white float-right px-3 py-3 mt-1"> Editar dados </a>

                <h3 class="big-hair-color-1 mb-0"> <?php echo $list_user_info_profile['name_user']; ?> </h3>
                <small> <p class="big-hair-color-1"> <?php echo $list_user_info_profile['email_user']; ?> </p> </small>

                <div class="user-data text-left big-hair-color-1">
                <small> <p class="my-0">Telefone</p> </small>
                <p class=""> 
                    <?php
                        if( $list_user_info_profile['tel1_user'] != "" ) {
                            echo $list_user_info_profile['tel1_user'];
                        }else{ echo "Sem dados"; }
                    ?> | 
                    <?php
                        if( $list_user_info_profile['tel2_user'] != "" ) {
                            echo $list_user_info_profile['tel2_user'];
                        }else{ echo "Sem dados"; }
                    ?>  
                </p>

                <small> <p class="my-0">Endereço</p> </small>
                <p class="">
                    <?php
                        if( $list_user_info_profile['address_user'] != "" ) {
                            echo $list_user_info_profile['address_user'];
                        }else{ echo "Sem dados"; }
                    ?>
                </p>

                <small> <p class="my-0">Cidade | Estado</p> </small>
                <p class=""> 
                    <?php
                        if( $list_user_info_profile['city_user'] != "" ) {
                            echo $list_user_info_profile['city_user'];
                        }else{ echo "Sem dados"; }
                    ?> | 
                    <?php
                        if( $list_user_info_profile['state_user'] != "" ) {
                            echo $list_user_info_profile['state_user'];
                        }else{ echo "Sem dados"; }
                    ?>  
                </p>

            </div>

            </div>
            <div class="col-4 ml-1">
                <div class="col-12 bg-white border border-radius-default text-center pb-4">
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
    </div>


        


</body>
</html>