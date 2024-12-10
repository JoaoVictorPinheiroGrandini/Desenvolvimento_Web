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
        if(!empty($_GET["nome"])){
            echo "Nome: ".$_GET["nome"]."<br>";
        }else{ echo "o nome nao foi informado";}

        if(!empty($_GET["idade"])){
            echo "Idade: ".$_GET["idade"]."<br>";
        }else{echo "a idade nao foi informada";}

        if(!empty($_GET["estado"])){
            echo "Estado: ".$_GET["estado"]."<br>";
        }else{echo "o estado nao foi informado";}

        if(!empty($_GET["cidade"])){
            echo "Cidade: ".$_GET["cidade"]."<br>";
        }else{echo "a cidade nao foi informada";}

        if(!empty($_GET["sexo"])){
            echo "Sexo: ".$_GET["sexo"]."<br>";
        }else{echo "o sexo nao foi informado";}

       
    ?>
</body>
</html>