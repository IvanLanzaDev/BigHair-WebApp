<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


    <!-- MOBILE -->
    <div class="container-mob d-block d-md-none mx-3">
    <div class="mt-4 ">
    <?php 
                while($list_category_index_mob = mysqli_fetch_array( $get_category_index_mob ) ) {
                    echo "

                    <div class='title-service'>
                        <p class='lead big-hair-color-1'><small> $list_category_index_mob[name_category] </small></p>
                    </div>
                    ";
                    
                    $get_services_index_mob = mysqli_query($link, "SELECT * FROM service WHERE category_service = '".$list_category_index_mob['name_category']."' ");
                    

                    echo "
                        <div class='container-services mb-5'>
                            <div class='d-flex flex-row'>
                    ";

                    while($list_services_index_mob = mysqli_fetch_array($get_services_index_mob)) {
                        echo "
                                <div class='col-10 mr-3'>
                                    <div class='row'>
                                        <a href='../services/?service=$list_services_index_mob[id_service]'>
                                            <img src='$list_services_index_mob[photo_service]' class='img-fluid border-radius-default'>
                                            <div class='col-12 bg-light border-radius-default details-service py-1'>
                                                <a href='../services/?service=$list_services_index_mob[id_service]' class='btn lead big-hair-color-1 btn-light pb-2 pt-2'>
                                                    $list_services_index_mob[name_service] 
                                                </a>
                                                <a href='../services/?service=$list_services_index_mob[id_service]' class='btn btn-light text-secondary pb-2 pt-2 float-right'>
                                                    R$ $list_services_index_mob[price_service]
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        ";
                    }

                    $list_all_category_mob = mysqli_fetch_array($get_all_category_index_mob);
                    echo "
                                <a href='../services/all-services.php?id_all_category=$list_all_category_mob[id_category]' class='btn btn-light text-center big-hair-color-1 big-hair-border-3 d-flex align-items-center mr-1'>
                                    <div class=''>
                                        <i class='fas fa-arrow-alt-circle-right'></i>
                                        <p>Ver tudo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    ";
                }

                echo "
                   
                ";
            ?>
    </div>
    </div>
    <!-- END MOBILE -->

<!-- -------------------------------- -------------------------------- -------------------------------- -------------------------------- --> 


    <!-- DESKTOP -->
    <div class="d-none d-md-block">
    <div class="row">
        <!-- SLIDER -->
        <div class="container-fluid d-none d-md-block">
            <div id="carouselExample col-12" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/imgs/slider-example.png"  class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/imgs/slider-example.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/imgs/slider-example.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            
            </div>
        </div>
        <!-- END SLIDER -->
    </div>

    <div class="container text-center mt-4">
        <!-- SERVICE ICONS -->
        <h3 class="big-hair-color-1"> Cabelos e serviços de beleza </h3>
        <div class="d-flex my-4 flex-nowrap justify-content-around">
            <div class="row">

            <?php
                while($list_category = mysqli_fetch_array($get_category)) {
                    $get_category_icons_index = mysqli_query($link, "SELECT * FROM service WHERE category_service = '".$list_category['name_category']."' ");
                    
                    echo "
                        <a href='../services/all-services.php?id_all_category=$list_category[id_category]' class='default-link'>
                            <div class='service-item px-4 pt-4 pb-1 bg-light border-radius-default mr-3'>
                                <img src='$list_category[icon_category]'>
                                <p class='mt-3 big-hair-color-1'>$list_category[name_category]</p>
                            </div>
                        </a>
                    ";
                }
            ?>

               
            </div>
        </div>
        <!-- END SERVICE ICONS -->

        <!-- SERVICE -->

        <div class="services">

            <?php 
                
                
                while($list_category_index = mysqli_fetch_array( $get_category_index ) ) {
                    
                    $get_services_index = mysqli_query($link, "SELECT * FROM service WHERE category_service = '".$list_category_index['name_category']."' ");
                    $count_services_index = mysqli_num_rows($get_services_index);
                    
                    echo "
                        <div class='row d-flex justify-content-between mt-4 mb-4 px-5 services-title'>";
                        if( $count_services_index != 0 ) {
                            echo "
                            <h4 class='big-hair-color-1 mt-2'> $list_category_index[name_category] </h4>";
                        }

                            if( $count_services_index > 3 ) {
                                
                                echo "
                                <a href='../services/all-services.php?id_all_category=$list_category_index[id_category]' class='badge badge-primary big-hair-bg-1 pt-3 pb-3 px-2'>
                                    Ver tudo 
                                </a>";
                                
                                        
                            }
                    echo "</div>";

                    

                    echo "<div class='row services-items text-left mb-5 mx-0 px-0 d-flex justify-content-around'>";
                    while($list_services_index = mysqli_fetch_array($get_services_index)) {
                        echo "
                    
                            <a href='../services/?service=$list_services_index[id_service]' class='default-link big-hair-color-1 mb-4'>
                                <div class='card custom-card' style='width: 18rem;'>
                                    <img class='card-img-top' src='$list_services_index[photo_service]' alt='Imagem de capa do card'>
                                    <div class='card-body'>
                                        <h5 class='card-title mb-0'>$list_services_index[name_service]<span class='badge badge-secondary big-hair-bg-2 float-right py-3'>R$ $list_services_index[price_service]</span></h5>
                                        <p class='card-text big-hair-color-2'>$list_services_index[category_service]</p>
                                    </div>
                                </div>
                            </a>
                            
            
                            
                        ";
                    }
                    echo "</div>";
                }
            ?>

           

           
        </div>

        <!-- END SERVICE -->

    </div>
    </div>


    <!-- END DESKTOP -->
</body>
</html>