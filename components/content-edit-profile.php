<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="d-block d-md-none">
        <div class="container-fluid mx-0 my-0 px-0 py-0" style="background: #EEE;">
            
            <div class="container fixed-top mt-4">
                <a href="../profile/?user=<?php echo $user_login_info['id_user']; ?>" class="btn btn-bighair1 rounded-circle"> <i class="fas fa-arrow-left"></i> </a> 
                <p class="badge big-hair-color-1 float-right px-3 py-3">
                    Editar dados
                </p>
            </div>
        </div>
        <div class="container pb-5" style="margin-top: 10vh;">
            
            

            <form method="post" class="mt-5" enctype="multipart/form-data">
            <div class="form-group mt-5">
                <label for="inputName">Nome completo</label>
                <input type="text" class="form-control" id="inputName" placeholder="Seu nome" name="name_user" value="<?php echo $list_user_edit_profile['name_user']; ?>">
                
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Seu email" name="email_user" value="<?php echo $list_user_edit_profile['email_user']; ?>">
            </div>
            <div class="form-group">
                <label for="inputTel">Telefones</label>
                <div class="d-flex justify-content-between">
                    <input type="text" class="form-control mr-1 col-5" id="inputTel" placeholder="Telefone principal" name="tel1_user" value="<?php echo $list_user_edit_profile['tel1_user']; ?>">
                    <input type="text" class="form-control col-5" id="inputTel" placeholder="Telefone alternativo" name="tel2_user" value="<?php echo $list_user_edit_profile['tel2_user']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" aria-describedby="addressHelp" placeholder="Seu endereço" name="address_user" value="<?php echo $list_user_edit_profile['address_user']; ?>">
                <small id="addressHelp" class="form-text text-muted"> Exemplo: <br>Av. Paulista, nº 1234 - Bela Vista - CEP: 00000 - 000 </small>
            </div>
            <div class="form-group">
                <label for="inputName">Cidade</label>
                <input type="text" class="form-control" id="inputName" placeholder="Sua cidade" name="city_user" value="<?php echo $list_user_edit_profile['city_user']; ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Estado</label>
                <input type="text" class="form-control" id="inputName" placeholder="Seu estado" name="state_user" value="<?php echo $list_user_edit_profile['state_user']; ?>">
            </div>

            <div class="form-group">
                <small id="" class="form-text text-muted">
                    Foto de perfil<br>
                    <span class="font-weight-bold text-success"> Não é obrigatório </span> o uso de foto de perfil, mas sinta-se a vontade para utilizar uma foto no seu perfil.<br>
                </small>
                
                <input type="file" class="form-control" name="photo_user">

                <small id="" class="form-text text-muted">
                    Atenção:<br>
                    <span class="font-weight-bold text-danger"> Ao atualizar qualquer dado </span> insira novamente a foto de perfil.
                </small>

            </div>

            <button type="submit" class="btn btn-bighair1 btn-lg btn-block" name="btn_edit_user">Editar perfil</button>

            </form>
           
        </div>
    </div>
    
    <!-- END MOBILE -->

<!-- ************************************************************************************************************** -->

    <!-- DESKTOP -->
    <div class="d-none d-md-block">
        <div class="container d-flex flex-row mt-5 mb-5">
            <div class="container-profile-desktop bg-white border col-8 border-radius-default">

            <form method="post" class="" enctype="multipart/form-data">
            <div class="form-group mt-5">
                <label for="inputName">Nome completo</label>
                <input type="text" class="form-control" id="inputName" placeholder="Seu nome" name="name_user" value="<?php echo $list_user_edit_profile['name_user']; ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Seu email" name="email_user" value="<?php echo $list_user_edit_profile['email_user']; ?>">
            </div>
            <div class="form-group">
                <label for="inputTel">Telefones</label>
                <div class="d-flex justify-content-between">
                    <input type="text" class="form-control mr-1 col-5" id="inputTel" placeholder="Telefone principal" name="tel1_user" value="<?php echo $list_user_edit_profile['tel1_user']; ?>">
                    <input type="text" class="form-control col-5" id="inputTel" placeholder="Telefone alternativo" name="tel2_user" value="<?php echo $list_user_edit_profile['tel2_user']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" aria-describedby="addressHelp" placeholder="Seu endereço" name="address_user" value="<?php echo $list_user_edit_profile['address_user']; ?>">
                <small id="addressHelp" class="form-text text-muted"> Exemplo: <br>Av. Paulista, nº 1234 - Bela Vista - CEP: 00000 - 000 </small>
            </div>
            <div class="form-group">
                <label for="inputName">Cidade</label>
                <input type="text" class="form-control" id="inputName" placeholder="Sua cidade" name="city_user" value="<?php echo $list_user_edit_profile['city_user']; ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Estado</label>
                <input type="text" class="form-control" id="inputName" placeholder="Seu estado" name="state_user" value="<?php echo $list_user_edit_profile['state_user']; ?>">
            </div>

            <div class="form-group">
                <small id="" class="form-text text-muted">
                    Foto de perfil<br>
                    <span class="font-weight-bold text-success"> Não é obrigatório </span> o uso de foto de perfil, mas sinta-se a vontade para utilizar uma foto no seu perfil.<br>
                </small>
                
                <input type="file" class="form-control" name="photo_user">

                <small id="" class="form-text text-muted">
                    Atenção:<br>
                    <span class="font-weight-bold text-danger"> Ao atualizar qualquer dado </span> insira novamente a foto de perfil.
                </small>

            </div>

            <button type="submit" class="btn btn-bighair1 btn-lg btn-block mb-4" name="btn_edit_user">Editar perfil</button>

            </form>
                

            </div>

            </div>
            
        </div>
    </div>


        


</body>
</html>