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
            
        <h1 class="display-4 d-none text-center text-danger d-md-block">
            Tem certeza ? 
        </h1> 
        <p class="lead d-block d-md-none text-center text-danger">
            Tem certeza ? 
        </p> 

        <p class="text-center">
            Você está prestes a <strong class="text-danger"> EXCLUIR </strong> uma categoria do site !!!
        </p>

        <form class="text-center" method="post">
            <input type="hidden" value="<?php $id_delete_category ?>">
            <a href="../" class="btn btn-outline-secondary"> Cancelar </a>
            <button type="submit" class="btn btn-danger" name="btn_delete_category"> Excluir </button> 
        </form>

        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
