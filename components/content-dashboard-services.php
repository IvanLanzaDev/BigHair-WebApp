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
            Serviços 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
                <a href="../new-service" class="btn btn-bighair1 float-right mt-3"> Novo </a>
        </h1> 
        <p class="lead d-block d-md-none">
            Serviços 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
                <a href="../new-service" class="btn btn-bighair1 float-right"> Novo </a>
        </p> 

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Serviço</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Unhas</th>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="dropdown dropleft ">
                            <button class="btn btn-bighair1 dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../edit-service">Editar</a>
                            <a class="dropdown-item text-danger" href="../delete-service">Excluir</a>
                        </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Depilação Completa</th>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="dropdown dropleft">
                            <button class="btn btn-bighair1 dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item text-danger" href="#">Excluir</a>
                        </div>
                        </div>
                    </td>
                </tr>
  </tbody>
</table>
    </div>
        
    </div> <!-- </> CONTAINER-FLUID -->

    <!-- END MOBILE -->
</body>
</html>