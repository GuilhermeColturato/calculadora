<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="calculadora.php" method="post" >
      Primeiro Numero: <input name="numero1" type="text"/><br><br>
      Segundo Numero: <input name="numero2" type="text"/><br><br>
      <input type="submit" name="operacao" value="+"/>     
      <input type="submit" name="operacao" value="-"/>     
      <input type="submit" name="operacao" value="*"/>     
      <input type="submit" name="operacao" value="/"/>     
   </form> 
<?php

    if( !empty($_POST) ) {
        $a = $_POST['numero1'];
        $b = $_POST['numero2'];
        $op= $_POST['operacao'];

        if($op == '+')
            $c = $a + $b;
        else if($op == '-')
            $c = $a - $b;
        else if($op == '*')
            $c = $a*$b;
        else
            $c = $a/$b;

      echo "<br>O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   }

?>       
</body>
</html>