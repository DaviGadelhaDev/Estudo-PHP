<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //Primeiro, executa e depois verifica-se a condição. Dessa forma, a execução é garantida pelo menos uma vez.
     $num = 1;
     do {
        $num++;
        print_r($num);
     } while($num < 10);
    ?>
</body>
</html>