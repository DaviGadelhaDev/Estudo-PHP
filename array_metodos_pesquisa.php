<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Métodos nativos do php para pesquisa
        //in_array() -> true 1 ou false vazio, para a existência do que está sendo procurado
        //array_seach() -> retorna o índice do valor pesquisado, caso ele exista, se não existir retorna null
        $lista_frutas = [
            'Banana',
            'Maça',
            'Morango',
            'Uva'
        ];

       /*  print_r($lista_frutas); */

        /* $existe = in_array('Maça', $lista_frutas);

        if($existe){
            echo 'Maça existe';
        } */
      /*   $existe = array_search('Uva', $lista_frutas);
        if($existe != null){
            echo 'Valor encontrado';
        }
        else{
            echo 'Valor não encontrado';
        } */
        //Array multimensional
       $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
       ];
       //Pesquisa em Arrys Multidimensional
       echo in_array('Uva', $lista_coisas['frutas']);
    ?>
</body>
</html>