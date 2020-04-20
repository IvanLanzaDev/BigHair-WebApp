<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="d-block d-md-none">

        <a href="../index.php" class="btn btn-light rounded-circle position-absolute ml-3 mt-3 px-3 py-3 shadow">
            <i class="fas fa-home fa-lg"></i>
        </a>
        <img src="<?php echo $list_service_details[photo_service]; ?>" class="img-fluid">

        <div class="container mt-3">
            <h3 class="big-hair-color-1 mb-0"><?php echo $list_service_details['category_service']; ?> <small><span class="badge big-hair-bg-2 text-white py-2 float-right">
                R$ <?php echo $list_service_details['price_service']; ?>
            </span></small></h3>
            <span class="lead big-hair-color-2"> <?php echo $list_service_details['name_service']; ?> </span>

            <p class="text-justify mt-5 big-hair-color-1">
                <small> <?php echo $list_service_details['desc_service']; ?> </small>
            </p>

            <p class="big-hair-color-1 mt-5"><strong>Duração</strong>
                <span class="float-right big-hair-color-2"> <?php echo $list_service_details['duration_service']; ?> minutos </span>
            </p>
            <form method="post">
                        <small> <p class="big-hair-color-1">Agendamento <span class="font-weight-bold"> * </span> </p> </small>
                        <div class="row d-flex justify-content-between px-3">
                            <input type="date" class="form-control col-12" placeholder="Data" name="date_schedule">

                            <!-- hidden fields -->

                            <input type="hidden" name="id_service_schedule" value="<?php echo $list_service_details['id_service']; ?>">

                            <!-- end hidden fields -->
                            <button type="submit" class="btn big-hair-bg-1 btn-block btn-lg text-white mt-3 mb-3" name="btn_search_schedule">Agendar</button>
                        </div>
                    </form>
            
            

        </div>

    </div>

    <div class="d-none d-md-block">
        
        <div class="container mt-5">
            <h3 class="big-hair-color-1 ml-2">Detalhes</h3>

            <div class="row d-flex flex-nowrap justify-content-around">
               
                <div class="col-4 p-3 m-0 bg-light border-radius-default">
                    <img src="<?php echo $list_service_details[photo_service]; ?>" class="img-fluid border-radius-default"> 
                    
                </div>

                <div class="col-7 p-3 bg-light border-radius-default">

                    <div class="row d-flex justify-content-between">
                        <h3 class="big-hair-color-1 mb-0 pl-3 mr-5"><?php echo $list_service_details['name_service']; ?> 
                            <small>
                            <p class="big-hair-color-2">&nbsp;</p> 
                            <span class="badge badge-secondary big-hair-bg-2 p-2">R$ <?php echo $list_service_details['price_service']; ?></span>
                            </small>
                        </h3>

                        <?php   
                            // GET CATEGORY ICON IN SERVICE QUERY
                            $get_category_icon = mysqli_query( $link, "SELECT * FROM category WHERE name_category = '$list_service_details[category_service]' " );
                            $show_category_icon = mysqli_fetch_array( $get_category_icon );
                        ?>
                        
                        <a href="../services/all-services.php?id_all_category=<?php echo $show_category_icon['id_category']; ?>" class="default-link mr-3">
                            <div class="big-hair-bg-3 border-radius-default text-center p-3">
                               
                                <img src="<?php echo $show_category_icon[icon_category]; ?>" class="img-fluid" style="height: 40px;">
                                <p class="mt-3 mb-0 big-hair-color-1"><?php echo $list_service_details['category_service']; ?></p>
                            </div>
                        </a>

                    </div>
                    
                    <p class="mb-0 big-hair-color-1">Descrição</p>
                    <small>
                        <p class="big-hair-color-2">
                        <?php echo $list_service_details['desc_service']; ?>
                        </p>
                    </small>

                    <div class="row p-3 d-flex justify-content-between big-hair-color-2">
                        <p class="px-0 col-9">Duração<p>
                        <p class="text-right"><?php echo $list_service_details['duration_service']; ?> minutos<p>
                    </div>

                    <form method="post">
                        <small> <p class="big-hair-color-1">Agendamento <span class="font-weight-bold"> * </span> </p> </small>
                        <div class="row d-flex justify-content-between px-3">
                            <input type="date" class="form-control col-5" placeholder="Data" name="date_schedule">

                            <!-- hidden fields -->

                            <input type="hidden" name="id_service_schedule" value="<?php echo $list_service_details['id_service']; ?>">

                            <!-- end hidden fields -->
                            <button type="submit" class="btn btn-bighair1" name="btn_search_schedule">Agendar</button>
                        </div>
                    </form>

                </div>

            </div>
            
        </div>
    </div>
</body>
</html>