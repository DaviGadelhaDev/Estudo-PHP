<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    for($i = 0; $i < 10; $i++){
        echo "I = $i";
        if($i == 8){
            break;
        }
    }

    for($i = 0; $i < 10; $i++){
        if($i == 8 || $i == 9){
            continue;
        }
        echo "I = $i";
    }

    ?>
</body>
</html>