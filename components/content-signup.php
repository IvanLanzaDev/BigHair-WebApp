<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container-fluid container-signin bg-white text-center fixed-bottom border-radius-screen d-block d-md-none">
        <h4 class="big-hair-color-1 my-3 ml-4">
            Criar Conta 
            <a href="../index.php" class="big-hair-color-1"> <span class="badge float-right"> <i class="far fa-times-circle"></i> </span> </a> 
        </h4> 

        <form class="mt-4">
            <div class="form-group">
                <input type="text" class="form-control big-hair-border-1 border-radius-default" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <input type="email" class="form-control big-hair-border-1 border-radius-default" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control big-hair-border-1 big-hair-color-2 border-radius-default" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-bighair1 btn-block btn-lg mt-5 mb-4"> Criar Conta </button>
        </form>
    </div>

    <div class="container-fluid bg-danger big-hair-bg-5 d-none d-md-block">
        <div class="row">
            <div class="access-desktop-bg col-7"></div>
            <div class="access-desktop col-5 d-flex align-items-center">
               <div class="col-10 ">
               <img src="../assets/imgs/logo.png" class="img-fluid col-4 p-0">
                <p class="text-light mb-4">
                    Crie sua conta para agendar serviços e muito
                    mais.
                </p>

                <form>
                <div class="form-group">
                        <input type="text" class="form-control access-form-control" placeholder="Nome Completo">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control access-form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control access-form-control" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-light big-hair-color-5">Criar Conta</button>
                </form>
                <p class="text-center text-light mt-4"> Já possui uma conta? <a href="../sign-in/" class="big-hair-color-4">clique aqui</a> </p>
                </div>

            </div>
        </div>
    </div>

</body>
</html>