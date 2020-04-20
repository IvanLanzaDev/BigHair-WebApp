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

            <?php 
                while($list_all_schedules = mysqli_fetch_array($get_all_schedules)) {
                    $get_user_all_schedules = mysqli_query( $link, "SELECT * FROM user WHERE id_user = '$list_all_schedules[id_user_schedule]' " );
                    $list_get_user_all_schedules = mysqli_fetch_array( $get_user_all_schedules );

                    $date_br = date('d/m', strtotime($list_all_schedules['date_schedule']));

                    echo "
                    <tr>
                    <th scope='row'>$date_br</th>
                    <td>$list_get_user_all_schedules[name_user]</td>
                    <td></td>
                    <td>
                        <div class='dropdown dropleft '>
                            <button class='btn btn-bighair1 dropdown-toggle btn-sm' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Menu </button>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                            <a class='dropdown-item' href='../details-schedule?schedule=$list_all_schedules[id_schedule]'>Detalhes</a>
                            <a class='dropdown-item text-danger' href='../delete-schedule?delete_schedule=$list_all_schedules[id_schedule]'>Desmarcar</a>
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