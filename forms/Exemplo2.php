<!DOCTYPE html>
<?php
    $metros = 0;
    $titulo = "Exemplo 2";
    if (isset($_GET['metros'])) {
      $metros = $_GET['metros'];
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
  <form action="" method="get">
    <a href="../index.php#title" class="return">
        <img src="../return.svg" alt="return arrow" width="70">
    </a>
    <fieldset>
      <legend>Exemplo 2</legend>
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
