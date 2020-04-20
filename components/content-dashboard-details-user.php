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
                Detalhes do usuário 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
            </h1> 
            <p class="lead d-block d-md-none">
                Detalhes do usuário 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
            </p> 
            <hr>

            <div class="col-12 px-0">
                <small> <p class="big-hair-color-1 mb-0"> Nome Completo </p> </small>
                <p class="lead text-muted"> <small>
                    <?php 
                            if($list_user_info_dashboard['name_user'] == ""){
                                echo "Sem dados";
                            }else{
                                echo $list_user_info_dashboard['name_user']; 
                            }
                    ?>
                </small> </p>
            </div>

            <div class="col-12 px-0">
                <small> <p class="big-hair-color-1 mb-0"> Email </p> </small>
                <p class="lead text-muted"> <small> 
                    <?php 
                        if($list_user_info_dashboard['email_user'] == ""){
                            echo "Sem dados";
                        }else{
                            echo $list_user_info_dashboard['email_user']; 
                        }
                    ?>  
                </small> </p>
            </div>

            <div class="row col-12">
                <div class="col-6 col-md-3 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Telefone 1 </p> </small>
                    <p class="lead text-muted"> <small>
                        <?php 
                            if($list_user_info_dashboard['tel1_user'] == ""){
                                echo "Sem dados";
                            }else{
                                echo $list_user_info_dashboard['tel1_user']; 
                            }
                        ?> 
                    </small> </p>
                </div>

                <div class="col-6 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Telefone 2 </p> </small>
                    <p class="lead text-muted"> <small>
                        <?php 
                            if($list_user_info_dashboard['tel2_user'] == ""){
                                echo "Sem dados";
                            }else{
                                echo $list_user_info_dashboard['tel2_user']; 
                            }
                        ?>
                    </small> </p>
                </div>
            </div>

            <div class="col-12 px-0">
                <small> <p class="big-hair-color-1 mb-0"> Endereço </p> </small>
                <p class="lead text-muted"> <small>
                    <?php 
                        if($list_user_info_dashboard['address_user'] == ""){
                            echo "Sem dados";
                        }else{
                            echo $list_user_info_dashboard['address_user']; 
                        }
                    ?>
                </small> </p>
            </div>

            <div class="row col-12">
                <div class="col-6 col-md-3 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Cidade </p> </small>
                    <p class="lead text-muted"> <small>
                        <?php 
                            if($list_user_info_dashboard['city_user'] == ""){
                                echo "Sem dados";
                            }else{
                                echo $list_user_info_dashboard['city_user']; 
                            }
                        ?>
                    </small> </p>
                </div>

                <div class="col-6 px-0">
                    <small> <p class="big-hair-color-1 mb-0"> Estado </p> </small>
                    <p class="lead text-muted"> <small>
                        <?php 
                            if($list_user_info_dashboard['state_user'] == ""){
                                echo "Sem dados";
                            }else{
                                echo $list_user_info_dashboard['state_user']; 
                            }
                        ?>
                    </small> </p>
                </div>
            </div>

        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
