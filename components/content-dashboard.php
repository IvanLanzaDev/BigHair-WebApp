<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- MOBILE -->
    <div class="container-fluid">

        <div class="card-deck">

        <div class="card bg-white mb-3">
                <div class="card-body">
                    <h5 class="card-title big-hair-color-2">Serviços</h5>
                    <h3 class="card-title big-hair-color-1"><?php echo $count_service; ?></h3>
                </div>
                <div class="card-footer bg-white">
                    <a href="services/" class="btn btn-bighair1 btn-sm"> Ver Todos </a>
                </div>
            </div>

            <div class="card bg-white mb-3">
                <div class="card-body">
                    <h5 class="card-title big-hair-color-2">Agendamentos</h5>
                    <h3 class="card-title big-hair-color-1"><?php echo $count_schedules; ?></h3>
                </div>
                <div class="card-footer bg-white">
                    <a href="schedules/" class="btn btn-bighair1 btn-sm"> Ver Todos </a>
                </div>
            </div>

            <div class="card bg-white mb-3">
                <div class="card-body">
                    <h5 class="card-title big-hair-color-2">Usuários cadastrados</h5>
                    <h3 class="card-title big-hair-color-1"><?php echo $count_users; ?></h3>
                </div>
                <div class="card-footer bg-white">
                    <a href="users/" class="btn btn-bighair1 btn-sm"> Ver Todos </a>
                </div>
            </div>

            <div class="card bg-white mb-3">
                <div class="card-body">
                    <h5 class="card-title big-hair-color-2">Categorias cadastradas</h5>
                    <h3 class="card-title big-hair-color-1"><?php echo $count_category; ?></h3>
                </div>
                <div class="card-footer bg-white">
                    <a href="categories/" class="btn btn-bighair1 btn-sm"> Ver Todos </a>
                </div>
            </div>

        </div> <!-- </> CARD DECK -->
    </div> <!-- </> CONTAINER-FLUID -->

    <!-- END MOBILE -->
</body>
</html>