<?php 
// Usando as 3 funções acima, crie um aplicativo que calcula as raízes de uma 
// equação do 2o grau:
// ax² + bx + c=0. Para ela existir, o coeficiente 'a' deve ser diferente de zero.
// Caso o delta seja maior ou igual a zero, as raízes serão reais. Caso o delta seja 
// negativo, as reais serão complexas e da forma: x + iy[
   require 'ex3.php';

   if(isset($_GET)){
      $a = $_GET['ax'];
      $b = $_GET['bx'];
      $c = $_GET['c'];
      if ($a == 0)
         $res = "a é 0";
      else{
         $delta = delta($a, $b, $c);
         
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ex 4</title>
</head>
<body>
   <form>
      <label for="a">A:</label>
      <input type="number" id="a" name="ax">
      <label for="b">B:</label>
      <input type="number" id="b" name="bx">
      <label for="c">C:</label>
      <input type="number" id="c" name="c">
      <br>
      <input type="submit" value="Enviar">
      <br><br>
      <input type="text" id="resultado" value="<?php if (isset($res)) echo $res?>" disabled>

   </form>
</body>
</html>