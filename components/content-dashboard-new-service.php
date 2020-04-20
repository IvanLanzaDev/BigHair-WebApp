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
            <?php echo $type_user; ?>
            <h1 class="display-4 d-none d-md-block">
                Novo serviço 
                <a href="../" class="btn btn-outline-secondary float-right mt-3 ml-1"> <i class="fas fa-times"></i> </a> 
            </h1> 
            <p class="lead d-block d-md-none">
                Novo serviço 
                <a href="../" class="btn btn-outline-secondary float-right ml-1"> <i class="fas fa-times"></i> </a> 
            </p> 

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome do serviço" autofocus required name="name_service">
                </div>
                <div class="form-group">
                    <select class="form-control" name="category_service">
                        <option selected> Categoria </option>
                        <?php
                        
                        while($list_category = mysqli_fetch_array( $get_category )) {
                            echo "
                                <option> $list_category[name_category] </option>
                            ";
                        }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Preço" aria-describedby="priceHelp" required name="price_service">
                    <small id="priceHelp" class="form-text text-muted">
                    Exemplo: 49,99 <br><span class="text-danger"> Não é necessário inserir R$ </span>
                    </small>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="4" required name="desc_service">Descrição do serviço</textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Duração do serviço" aria-describedby="durationHelp" required name="duration_service">
                    <small id="durationHelp" class="form-text text-muted">
                    Exemplo: 10 a 15 minutos
                    </small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Código do botão do PagSeguro" aria-describedby="pagseguroHelp" required name="pagseguro_service">
                    <small id="pagseguroHelp" class="form-text text-muted">
                        <a href="https://pagseguro.uol.com.br/desenvolvedor/botoes_de_pagamento.jhtml#rmcl" class="text-success" target="_blank">
                         Clique aqui </a> para gerar o botão no PagSeguro
                    </small>
                </div>
                <div class="form-group">
                    <small id="photoHelp" class="form-text text-muted">
                        Foto do serviço
                    </small>
                    <input type="file" class="form-control" required aria-describedby="photoHelp" name="photo_service">
                </div>

                <button type="submit" class="btn btn-bighair1 btn-lg btn-block" name="btn_new_service">Cadastrar</button>

            </form>

        </div>
    </div> <!-- </> CONTAINER -->

    <!-- END MOBILE -->
</body>
</html>
