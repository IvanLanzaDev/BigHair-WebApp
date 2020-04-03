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
            Agendamentos 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
        </h1> 
        <p class="lead d-block d-md-none">
            Agendamentos 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
        </p> 

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Cliente</th>
                    <th scope="col"></th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">01/04</th>
                    <td>Larissa Alves Cardoso</td>
                    <td></td>
                    <td>
                        <div class="dropdown dropleft ">
                            <button class="btn btn-bighair1 dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../details-schedule">Detalhes</a>
                            <a class="dropdown-item text-danger" href="../delete-schedule">Desmarcar</a>
                        </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">02/04</th>
                    <td>Vitoria Martins Azevedo</td>
                    <td></td>
                    <td>
                        <div class="dropdown dropleft">
                            <button class="btn btn-bighair1 dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Detalhes</a>
                            <a class="dropdown-item text-danger" href="#">Desmarcar</a>
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