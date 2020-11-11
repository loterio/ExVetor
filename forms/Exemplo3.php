<!DOCTYPE html>
<?php
    $metros = 0;
    $titulo = "Exemplo 2";
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
    <title><?php echo $titulo; ?></title>
</head>
<body>
<div>
  <form action="" method="post">
    <a href="../" class="return">
        <img src="../return.svg" alt="return arrow" width="70">
    </a>
    <fieldset>
      <legend>Exemplo 3</legend>
      <p>é igual ao ex 2 porém usando GET</p>
      <br />
      <label for="metros">Metros: </label>
      <input type="text" name="metros" id="metros" value="<?php echo $metros; ?>"/>
      <input type="submit" value="Enviar Dados" />
      <br /><br />
    </fieldset>
  </form>
  <?php
    $centimetros = $metros * 100;
    echo "<h3>".$metros." metros é igual a ".$centimetros ." centimetros</h3>";
  ?>
</div>
</body>
</html>
