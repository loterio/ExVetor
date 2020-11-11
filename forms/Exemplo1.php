<!DOCTYPE html>
<?php
    $metros = 0;
    if (isset($_POST['metros'])) {
      $metros = $_POST['metros'];
    }
?>
<html>
<head>
    <link rel="stylesheet" href="Assets/style.css"/>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="Assets/php.png" />
    <title>Exemplo 1</title>
</head>
<body>
    
<div>
  <form action="" method="post">
    <a href="../" class="return">
        <img src="../return.svg" alt="return arrow" width="70">
    </a>
    <fieldset>
      <legend>Exemplo 1</legend>
      <br />
      <label for="metros">Metros: </label>
      <input type="text" name="metros" id="metros" />
      
      <input type="submit" value="Enviar Dados" />
      <?php 
      if (isset($_POST['metros'])) {
        echo "digitou: $metros";
      }
      ?>
      <br />
      <br />
    </fieldset>
  </form>
</div>
</body>
</html>
