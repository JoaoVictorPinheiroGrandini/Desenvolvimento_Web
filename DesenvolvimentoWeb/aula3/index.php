
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function somar(int ...$numeros){
            return array_sum($numeros);
        }

        echo var_dump(somar(1, 2, 3, 4, 5, 6, 7, 8, 9))
    ?>
</body>
</html> 