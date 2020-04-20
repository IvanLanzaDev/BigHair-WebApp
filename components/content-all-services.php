<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


    <!-- MOBILE -->
    
    

<!-- -------------------------------- -------------------------------- -------------------------------- -------------------------------- --> 


    <!-- DESKTOP -->

    <div class="container text-center mt-5">
      

        <!-- SERVICE -->

        <div class="services">


            <div class="row services-items text-left mb-5 mx-0 px-0 d-flex justify-content-around">

            <?php
            
            while($show_all_service_desktop = mysqli_fetch_array( $get_all_service )) {
                echo "
                    <a href='../services/?service=$show_all_service_desktop[id_service]' class='default-link big-hair-color-1 mb-4'>
                    <div class='card custom-card' style='width: 18rem;'>
                        <img class='card-img-top' src='$show_all_service_desktop[photo_service]' alt='Imagem de capa do card'>
                        <div class='card-body'>
                            <h5 class='card-title mb-0'>$show_all_service_desktop[name_service]<span class='badge badge-secondary big-hair-bg-2 float-right py-3'>R$ $show_all_service_desktop[price_service]</span></h5>
                            <p class='card-text big-hair-color-2'>$show_all_service_desktop[category_service]</p>
                        </div>
                    </div>
                    </a>
                ";
            }
            
            ?>
                

                

            </div> <!-- ROW -->

            
        </div>

        <!-- END SERVICE -->

    </div>

    <!-- END DESKTOP -->
</body>
</html>