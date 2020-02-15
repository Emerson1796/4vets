<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Numero A: <input name="num1" type="text"><br>
      Numero B: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">
      <input type="submit" name="operacao" value="^1/b">
      <input type="submit" name="operacao" value="^b">
   </form> 
<?php
    
    if( !isset($_POST['operacao'])){
        echo "Favor digitar valores para 'A' e 'B'!";
    }
    else{
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $op= $_POST['operacao'];
    
        if( !is_numeric($a) || !is_numeric($b) ){
            echo "Favor digitar valores numéricos nos dois campos!"; 
        }
        else{  

            switch ($op) {
                case "+":
                    echo "O resultado da soma de ".$a . "+" . $b ." é: ".($a+$b);
                    break;
                case "-":
                    echo "O resultado da subtração de ".$a . "-" . $b ." é: ".($a-$b);
                    break;
                case "*":
                    echo "O resultado da multiplicação de ".$a . "*" . $b ." é: ".($a*$b);
                    break;
                case "/":
                    echo "O resultado da divisão de ".$a . "/" . $b ." é: ".($a/$b);
                    break;
                case "^1/b":
                    echo "O resultado da raiz de ".$a . "^(1/" . $b.")" ." é: ".(($a) ** (1/$b));
                    break;
                case "^b":
                    echo "O resultado da potenciação de ".$a . " elevado " . $b ." é: ".($a ** $b);
                    break;
            }
        }
    }
?>       
</body>
</html>