<?php

if(isset($_POST['value'])){
  
  $api_key="5fa4a1d2af4edc8e03c033518f666b5e";

$endpoint="http://api.exchangeratesapi.io/v1/latest?access_key={$api_key}";
  
  $request = file_get_contents($endpoint);
  $parsed = json_decode($request, true);

 $value = floatval(str_replace(',','.', $_POST['value']));
 $brl = $parsed['rates']['BRL'];
 $usd = $parsed['rates']['USD'];
 $result = ($value  / $brl) * $usd;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/conversor.css">
  <title>Document</title>
</head>

<body>
  
 <div class="container">
  <h2>Conversor de Moedas</h2>
  <form action="" method="POST">
  <div class="input-container">
    <p>
      <label>Quantia em Reais</label>
      <input value="<?php if(isset($_POST['value'])) echo $_POST['value']; ?>" type="text" name="value" placeholder="R$"></p>
    <p><button>Converter para USD</button></p>

  </form>
  <?php
  if(isset($result)){
    $formated = number_format($result, 2, ',','.');
    echo "<input type='text' value='Dólar US$ "  . $formated . "'>  ";
  }
 ?>
</body>
</html>
