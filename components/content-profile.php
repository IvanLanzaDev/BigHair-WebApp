<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="d-block d-md-none">
        <div class="container-fluid mx-0 my-0 px-0 py-0">
            <div class="user-cover" style="background-image: url('../assets/imgs/user-profile-cover.png');"> </div>
            <div class="container fixed-top mt-4">
                <a href="#" class="btn btn-bighair1 rounded-circle"> <i class="fas fa-arrow-left"></i> </a> <a href="#" class="badge badge-light big-hair-bg-1 text-white float-right px-3 py-3"><i class="fas fa-user-edit"></i> Editar dados</a>
            </div>
        </div>
        <div class="container bg-white text-center pb-5">
            <img src="../assets/imgs/user-profile-cover.png" class="user-img mb-4">

            <h3 class="big-hair-color-1">Nome Completo</h3>
            <p class="big-hair-color-1">email@email.com</p>

            <div class="user-data text-left big-hair-color-1">
                <small> <p class="my-0">Telefone</p> </small>
                <p class="lead my-0"> (00) 0000 - 0000  </p>
                <p class="lead"> (00) 90000 - 0000  </p>

                <small> <p class="my-0">Endereço</p> </small>
                <p class="lead"> Endereço do usuário </p>

                <small> <p class="my-0">Cidade</p> </small>
                <p class="lead"> Nome da cidade </p>

                <small> <p class="my-0">Estado</p> </small>
                <p class="lead"> Nome do estado </p>

            </div>
        </div>
    </div>


    <div class="d-none d-md-block">
        <div class="container d-flex flex-row mt-5">
            <div class="container-profile-desktop bg-white border col-8 border-radius-default">
                <div class="user-cover" style="background-image: url('../assets/imgs/user-profile-cover.png'); background-repeat: no-repeat !important; background-size: cover;"></div>

                <img src="../assets/imgs/user-profile-cover.png" class="user-img mb-4">
                <a href="#" class="badge badge-light big-hair-bg-1 text-white float-right px-3 py-3 mt-1"> Editar dados </a>

                <h3 class="big-hair-color-1 mb-0">Nome Completo</h3>
                <small> <p class="big-hair-color-1">email@email.com</p> </small>

                <div class="user-data text-left big-hair-color-1">
                <small> <p class="my-0">Telefone</p> </small>
                <p class=""> (00) 0000 - 0000 | (00) 90000 - 0000 </p>

                <small> <p class="my-0">Endereço</p> </small>
                <p class=""> Endereço do usuário </p>

                <small> <p class="my-0">Cidade | Estado</p> </small>
                <p class=""> Nome da cidade |  Nome do estado </p>

            </div>

            </div>
            <div class="col-4 ml-1">
                <div class="col-12 bg-white border border-radius-default text-center pb-4">
                    <i class="fas fa-calendar fa-2x big-hair-color-1 mt-4"></i> 
                    <p class="big-hair-color-1"> Agendamentos </p>

                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row" class="text-muted"> <small> 01/04 </small> </th>
                                <td class="text-muted"> <small> Unhas </small> </td>
                                <td> <a href="#" class="btn btn-bighair2 btn-sm" data-toggle="modal" data-target="#ModalDetalhes">Detalhes</a> </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-muted"> <small> 01/05 </small> </th>
                                <td class="text-muted"> <small> Unhas </small> </td>
                                <td> <a href="#" class="btn btn-bighair2 btn-sm" data-toggle="modal" data-target="#ModalDetalhes">Detalhes</a> </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-muted"> <small> 01/06 </small> </th>
                                <td class="text-muted"> <small> Depilação Completa </small> </td>
                                <td> <a href="#" class="btn btn-bighair2 btn-sm" data-toggle="modal" data-target="#ModalDetalhes">Detalhes</a> </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="../index.php" class="btn btn-bighair1 btn-lg btn-block">Novo agendamento</a>
                </div>
            </div>
        </div>
    </div>


        <!-- Modal -->
        <div class="modal fade" id="ModalDetalhes" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title big-hair-color-1" id="TituloModalCentralizado">Detalhes do agendamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="d-flex flex-row">
                    <div class="col-3 px-0">
                        <p class="big-hair-color-1 mb-0"> <small> Data </small> </p>
                        <p class="text-muted"> 01/04/2020 </p>
                    </div>

                    <div class="col-3">
                        <p class="big-hair-color-1 mb-0"> <small> Horário </small> </p>
                        <p class="text-muted"> 12:35 </p>
                    </div>
                    
                </div>

                <p class="big-hair-color-1 mb-0"> <small> Serviço </small> </p>
                <p class="text-muted"> Unhas </p>

            </div>
            </div>
        </div>
        </div>


</body>
</html>