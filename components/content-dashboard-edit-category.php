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
                Editar categoria 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
            </h1> 
            <p class="lead d-block d-md-none">
                Editar categoria 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
            </p> 

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome da categoria" autofocus required>
                </div>

                <div class="form-group">
                    <small id="iconHelp" class="form-text text-muted">
                        Icone da categoria<br>
                        Os icones devem ser no formato <span class="font-weight-bold text-danger">SVG </span>
                    </small>
                    <input type="file" class="form-control" required aria-describedby="iconHelp">
                </div>
                
                <button type="submit" class="btn btn-bighair1 btn-lg btn-block">Finalizar Edição</button>

            </form>

        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
