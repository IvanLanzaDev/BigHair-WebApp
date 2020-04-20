<?php

    include( "functions.class.php" ); include( "session.class.php" );

    $date_error = $_GET['date_confirm_schedule'];
    $id_service_error = $_GET['id_confirm_schedule'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigHair Extension</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <style>
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
 
}

.message-container {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.message-container {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
    </style>
    

</head>
<body>

    <div class="message-container text-center">
      <img src="../assets/imgs/error-schedule.svg" >
      <h1 class="text-danger"> Ops !!! </h1>
      <small>
        <p class="lead text-danger"> O horário escolhido não está disponivel. </p>
        <p class="text-muted"> Por favor escolha outro horário. </p>
        
      </small>

      <div class="d-flex flex-row">
        <a href="./?date_schedule=<?php echo $date_error; ?>&&id_service_schedule=<?php echo $id_service_error; ?>" class="btn btn-success btn-block"> Tentar Novamente </a>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ab73d27652.js" crossorigin="anonymous"></script>
</body>
</html>