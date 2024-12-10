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
        if(!empty($_GET["operacao"])){
            $operacao = $_GET["operacao"];
        }else{ echo "a operaçao nao foi informada";}

        if(!empty($_GET["pn"])){
            $primeiroNumero = $_GET["pn"];
        }else{echo "o primeiro numero nao foi informado";}

        if(!empty($_GET["pn"])){
            $segundoNumero = $_GET["sn"];
        }else{echo "o primeiro numero nao foi informado";}

        if( $segundoNumero == 0 && $operacao == '/'){
            echo "erro: não é possivel dividir um número por 0";
        }else{
            if($operacao == '/')
                echo $primeiroNumero / $segundoNumero;
            if($operacao == '*')
                echo $primeiroNumero * $segundoNumero;  
            if($operacao == '-')
                echo $primeiroNumero - $segundoNumero;
            if($operacao == '+')
                echo $primeiroNumero + $segundoNumero;
        }
    ?>
</body>
</html>