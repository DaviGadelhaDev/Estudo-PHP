<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Operadores de comparação / lógicos
        $num =  1;
       /*  while($num < 10){
            print_r($num);
            $num ++;
            break; //Para o laço de repetição imediatamente;
        } */
/*         //Outro exemplo
        while($num < 1000){
            $num += 5;
            print_r($num);

            if($num > 40){
                break;
            }
        } */

      while($num < 10){
        $num ++;
        
        if($num == 2 || $num == 6){
            continue; //Descarta as linhas de comando abaixo e vai para a próxima repetição
        }
        print_r($num);
      }
    ?>
</body>
</html>