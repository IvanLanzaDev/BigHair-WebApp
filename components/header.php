

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <!-- MOBILE -->
    <div class="container-fluid d-block d-md-none">
       <div class="row">
            <div class="col-10">
                <a href="../">
                  <p class="lead title-header text-center mt-3 ml-5"><img src="../assets/imgs/logo-header.png"></p>
                </a>  
                
            </div>
            <div class="col-2">
            <?php 
              session_start();
              if(!$_SESSION['email_user'] && !$_SESSION['pass_user']) {
                echo "
                <div class='dropdown dropright'>
                  <button class='btn btn-link dropdown-toggle' type='button' id='dropdownMenuButtonMobile' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <img src='../assets/imgs/user-icon-default.svg' class='text-center mt-3 user-icon'>
                </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButtonMobile'>
                  <a class='dropdown-item' href='#'>Sobre</a>
                  <a class='dropdown-item' href='#'>Contato</a>
                  <div class='dropdown-divider'></div>
                  <a class='dropdown-header big-hair-color-1' href='#'>Acesse sua conta</a>
                  <a class='dropdown-item' href='../sign-in/'>Entrar</a>
                  <a class='dropdown-item' href='../sign-up/'>Criar Conta</a>
                </div>
                </div>
                ";
              }else{
                echo "
                  <div class='dropdown dropright'>
                    <button class='btn btn-link dropdown-toggle' type='button' id='dropdownMenuButtonMobile' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <img src='../assets/imgs/user-icon-default.svg' class='text-center mt-3 user-icon'>
                  </button>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuButtonMobile'>
                    <a class='dropdown-item big-hair-color-1' href='#'>Olá $user_login_info[name_user]</a>
                ";

                if( $user_login_info['type_user'] == 'adm' ) echo " <a class='dropdown-item text-info' href='../dashboard/'>Acessar Painel Administrativo</a> ";

                echo "
                    <a class='dropdown-item' href='../profile/?user=$user_login_info[id_user]'>Ver Perfil</a>
                    <a class='dropdown-item' href='../profile/my-schedules.php?user=$user_login_info[id_user]''>Ver Agendamentos</a> 
                    <a class='dropdown-item text-danger' href='../backend/logout.php'>Sair</a>
                  </div>
                  </div>
              ";

             
            }
    ?>
               
            </div>
       </div>
    </div>
    <div class="container d-block d-md-none">
        <form method="get">
            <div class="form-row text-center">
                <div class="col-12">
                    <input type="text" class="form-control search-header border-0" placeholder="Buscar">
                    <button type="button" class="search-button">
                        <i class="fas fa-search big-hair-color-2"></i>
                    </button>
                </div>
                </div>
        </form>
    </div>
    <!-- END MOBILE -->


<!-- -------------------------------- -------------------------------- -------------------------------- -------------------------------- --> 


    <!-- DESKTOP -->

    <nav class="navbar navbar-expand-lg navbar-light big-hair-bg-3 d-none d-md-flex">
      <a class="navbar-brand" href="../">
        <img src="../assets/imgs/logo-header-desktop.png">
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link big-hair-color-1" href="../about">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link big-hair-color-1" href="../contact">Contato</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <?php 
      session_start();
      if(!$_SESSION['email_user'] && !$_SESSION['pass_user']) {
        echo "
          <a href='../sign-in/' class='btn btn-bighair1 mr-3 my-2 my-sm-0'>Entrar</a>
          <a href='../sign-up/' class='btn btn-light my-2 my-sm-0'>Criar Conta</a>
        ";
      }else{
        echo "
        <div class='dropdown'>
          <button class='btn btn-bighair1 dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            Olá $user_login_info[name_user]
          </button>
          <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
          if( $user_login_info['type_user'] == 'adm' ) echo " <a class='dropdown-item text-info' href='../dashboard/'>Acessar Painel <br>Administrativo</a> ";
          echo "
            <a class='dropdown-item' href='../profile/?user=$user_login_info[id_user]''>Ver Perfil</a>
            <a class='dropdown-item text-danger' href='../backend/logout.php'>Sair</a>
          </div>
        </div>
      ";
       
    }
    ?>
      
    </form>
  </div>
</nav>

    <!-- END DESKTOP -->
</body>
</html>