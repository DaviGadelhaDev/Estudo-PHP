<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //False -> tipo variável boolean. False não é considerado null, mas é considerado vazio
        //null e empty -> valores especiais. O valor null é considerado empty
        $funcionario1 = null;
        $funcionario2 = '';
        //is_null retorna true ou false
        if(is_null($funcionario1)){
            echo 'Variável é null';
        }

        else{
            echo 'Variável não é null';
        }

        if(is_null($funcionario2)){
            echo 'Variável é null';
        }

        else{
            echo 'Variável não é null';
        }
        if(empty($funcionario1)){
            echo 'Variável vazia';
        }
        else{
            echo 'Variável não é vazia';
        }

        if(empty($funcionario2)){
            echo 'Variável vazia';
        }
        else{
            echo 'Variável não é vazia';
        }
    ?>
</body>
</html>