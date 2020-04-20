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
            Usuários 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
        </h1> 
        <p class="lead d-block d-md-none">
            Usuários 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
        </p> 

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    while( $list_users = mysqli_fetch_array( $get_users ) ) {
                        echo "
                        <tr>
                        <th scope='row'>$list_users[name_user]</th>
                        <td></td>
                        <td></td>
                        <td>
                            <div class='dropdown dropleft '>
                                <button class='btn btn-bighair1 dropdown-toggle btn-sm' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Menu </button>
                            <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                            <a class='dropdown-item' href='../details-user/?user_dashboard=$list_users[id_user]'>Detalhes</a>
                            </div>
                            </div>
                        </td>
                    </tr>
                        ";
                    }
                
                ?>
              
  </tbody>
</table>
    </div>
        
    </div> <!-- </> CONTAINER-FLUID -->

    <!-- END MOBILE -->
</body>
</html>