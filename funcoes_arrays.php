<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      //is_array() -> verifica se é array ou não
      //array_keys() -> Retorna todas as chaves de um array
      //sort() -> Ordena um array e reajusta seus índices
      //asort() -> Ordena um array preservando os índices
      //count() -> Conta a quantidade de elementos de um Array
      //array_merge() -> Funde um ou mais arrays
      //explode() -> divide uma string baseada em um delimitador. Retorna um array
      //implode() -> Junta os elementos de um array em uma string

      /* $array = 'Array';
      $retorno = is_array($array);
     
      if($retorno){
        echo 'Sim é um array';
      }
      else{
        echo 'Não é um array';
      } */
        
      /* $array = [
        1 => 'a',
        7 => 'b',
        18 => 'c'
      ];
      
      $keys_array = array_keys($array);
      print_r($keys_array); */

     /*  $array = [
        'Mouse',
        'Cabo HDMI',
        'Notebook',
        'Teclado'
      ];
      print_r($array);
      //retorna true ou false
      sort($array);
      print_r($array);
      asort($array);
      print_r($array);
      echo count($array); */

     /*  $array1 = ['osx', 'windows'];
      $array2 = ['linux'];
      $array3 = ['solaris'];

      $novo_array = array_merge($array1,  $array2, $array3);
      print_r($novo_array); */
      /* $string = '26/04/22';
      //retorna um array
      $array_retorno = explode('/', $string);
      print_r($array_retorno);
      //Alterando o formato da data
      echo $array_retorno[2]. '-' .$array_retorno[1]. '-' . $array_retorno[0]; */
      $array = ['a', 'b', 'x', 'y']; //a,b,x,y
      $string_retorno = implode(',', $array);
      echo $string_retorno;

    ?>
</body>
</html>