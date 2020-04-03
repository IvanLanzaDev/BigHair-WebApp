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
                    <input type="text" class="form-control" placeholder="Nome do serviço" autofocus required>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option selected> Categoria </option>
                        <option> Categoria 1 </option>
                        <option> Categoria 2 </option>
                        <option> Categoria 3 </option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Preço" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Preço" rows="4" required> </textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Duração do serviço" aria-describedby="durationHelp" required>
                    <small id="durationHelp" class="form-text text-muted">
                    Exemplo: 10 a 15 minutos
                    </small>
                </div>
                <div class="form-group">
                    <small id="photoHelp" class="form-text text-muted">
                        Foto do serviço
                    </small>
                    <input type="file" class="form-control" required aria-describedby="photoHelp">
                </div>

                <button type="submit" class="btn btn-bighair1 btn-lg btn-block">Editar</button>

            </form>

        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
