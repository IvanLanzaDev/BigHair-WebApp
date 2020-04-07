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
            Categorias 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
                <a href="../new-category" class="btn btn-bighair1 float-right mt-3"> Nova </a>
        </h1> 
        <p class="lead d-block d-md-none">
            Categorias 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
                <a href="../new-category" class="btn btn-bighair1 float-right"> Nova </a>
        </p> 

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Categoria</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

            <?php
            
                while($list_category = mysqli_fetch_array( $get_category )) {
                    echo "
                    <tr>
                    <th scope='row'>$list_category[name_category]</th>
                    <td></td>
                    <td></td>
                    <td>
                        <div class='dropdown dropleft '>
                            <button class='btn btn-bighair1 dropdown-toggle btn-sm' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Menu </button>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                            <a class='dropdown-item' href='../edit-category'>Editar</a>
                            <a class='dropdown-item text-danger' href='../delete-category'>Excluir</a>
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