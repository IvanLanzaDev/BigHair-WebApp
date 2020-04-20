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
            Você está prestes a <strong class="text-danger"> DESMARCAR </strong> um agendamento !!!
        </p>

        <form class="text-center" method="post">
            <a href="../" class="btn btn-outline-secondary"> Voltar </a>
            <?php 
            
                // /$delete_schedule_url = $_GET['delete_schedule'];
                    
                //echo "<input type='hidden' name='id_schedule' value='$delete_schedule_url'>";
            ?>
            <button type="submit" class="btn btn-danger" name="btn_delete_schedule"> Desmarcar </button> 
        </form>

        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
