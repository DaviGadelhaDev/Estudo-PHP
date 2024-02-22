<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       /*  //Arrys sequenciais (numéricos)
        $lista_frutas = ['Banana', 'maça', 'Morango', 'Uva'];
        //Inserir um valor em um array já existente
        $lista_frutas[]= 'Abacaxi';
        //Achar um valor do Array
        echo $lista_frutas[2], //Procurando o valor no índice 2
        var_dump($lista_frutas); */

        //Assossiativo
        $lista_frutas_Associativo = ['a' => 'Banana', 'b' => 'Maçã', 'x' => 'Morango', 'z' => 'Uva', '2' => 'Abacate'];
        //Inserir um novo Item no array associativo
        $lista_frutas_Associativo['w'] = 'Abacaxi';
        var_dump($lista_frutas_Associativo);
    ?>
</body>
</html>