

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
                <p class="lead title-header text-center mt-3 ml-5">BigHair</p>
            </div>
            <div class="col-2">
                <img src="../assets/imgs/user-icon-default.svg" class="text-center mt-3 user-icon">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle big-hair-color-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu big-hair-color-1" aria-labelledby="navbarDropdown">
          <a class="dropdown-item big-hair-color-1" href="#">Categoria 1</a>
          <a class="dropdown-item big-hair-color-1" href="#">Categoria 2</a>
          <a class="dropdown-item big-hair-color-1" href="#">Categoria 3</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link big-hair-color-1" href="#">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link big-hair-color-1" href="#">Contato</a>
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
          <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
            <a class='dropdown-item' href='../profile'>Ver Perfil</a>
            <a class='dropdown-item text-danger' href='#'>Sair</a>
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