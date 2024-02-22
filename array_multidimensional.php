<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Array multidimensionais
        $lista_coisas = [];
        $lista_coisas['frutas'] = 
        [
            1 => 'Banana',
            2 => 'Maça',
            3 => 'Morango',
            4 => 'Uva'
        ];

        $lista_coisas['pessoas'] = 
        [
            1 => 'João',
            2 => 'José',
            3 => 'Maria'
        ];
        //Recuperar o índice morango
        print_r($lista_coisas['frutas'][3]);
        //Recuperar o João
        print_r($lista_coisas['pessoas'][1]);
    ?>
</body>
</html>