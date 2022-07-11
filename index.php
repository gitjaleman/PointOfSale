<?php 
  session_start();  
  session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app/assets/css/semantic.css">
  <link rel="stylesheet" href="app/assets/css/Semantic-UI-Alert.css">
  <link rel="stylesheet" href="app/assets/css/config.css">
  <link rel="stylesheet" href="app/assets/css/login.css">
  <title>Document</title>
</head>

<body>


  <form id="frm" class="ui form ">
    <img src="app/assets/images/login/login.png">
    <div class="ui left icon input W100 Mb_15">
      <input id="frm_input_username" type="text" placeholder="Usuario" required>
      <i class="user icon"></i>
    </div>
    <div class="ui left icon input W100 Mb_15">
      <input id="frm_input_userpass" type="password" placeholder="Contraseña" required>
      <i class="unlock icon"></i>
    </div>
    <button id="frm_btn_submit" class="ui violet button W100 frm_btn" style="display: none;">IINGRESO</button>
    <div id="frm_btn_loading" class="ui loading button W100 frm_btn" style="display: none;">Conectando</div>
  </form>

</body>
<script src="app/assets/js/jquery.min.js"></script>
<script src="app/assets/js/semantic.js"></script>
<script src="app/assets/js/Semantic-UI-Alert.js"></script>
<script src="app/actions/login.js"></script>




</html> 