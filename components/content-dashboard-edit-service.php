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
                Editar serviço 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
            </h1> 
            <p class="lead d-block d-md-none">
                Editar serviço 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
            </p> 

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome do serviço" autofocus required name="name_service" value="<?php echo $list_edit_service['name_service']; ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" name="category_service">
                        <option selected> <?php echo $list_edit_service['category_service']; ?> </option>
                        <?php
                        
                        while($list_category = mysqli_fetch_array( $get_category )) {
                            echo "
                                <option> $list_category[name_category] </option>
                            ";
                        }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Preço" required name="price_service" value="<?php echo $list_edit_service['price_service']; ?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="4" required name="desc_service"><?php echo $list_edit_service['desc_service']; ?> </textarea>


                    
        
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Duração do serviço" aria-describedby="durationHelp" required name="duration_service" value="<?php echo $list_edit_service['duration_service']; ?>">
                    <small id="durationHelp" class="form-text text-muted">
                    <strong> Em  minutos. </strong> <br>Exemplo: 120
                    </small>
                </div>
                <div class="form-group">
                    <small id="photoHelp" class="form-text text-muted">
                        Foto do serviço <span class="text-danger">  Atenção: a foto deve ser cadastrada novamente, mesmo que ela não seja alterada, por favor, insira novamente </span>
                    </small>
                    <input type="file" class="form-control" required aria-describedby="photoHelp" name="photo_service" value="<?php echo $list_edit_service['photo_service']; ?>">
                </div>

                <button type="submit" class="btn btn-bighair1 btn-lg btn-block" name="btn_edit_service">Editar</button>

            </form>

        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
