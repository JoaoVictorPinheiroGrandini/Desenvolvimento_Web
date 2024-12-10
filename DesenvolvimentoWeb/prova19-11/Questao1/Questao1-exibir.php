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

function calcularMediaGeral(){
    $mediaGeral = 0;
    $i = 1;
    while($i <= 4){
        if(!empty($_GET["N".$i])){
            $mediaGeral = $mediaGeral + $_GET["N".$i];
        }else{ 
            echo "A nota N".$i."não foi preenchida";
        }
        $i= $i + 1;
    }
    if(!empty($_GET["N1"]) && !empty($_GET["N2"]) && !empty($_GET["N3"]) && !empty($_GET["N4"])){
        $mediaGeral = $mediaGeral/4;
        echo $mediaGeral;
        if($mediaGeral>=5){
            echo "aprovado";
        }else{
            echo "reprovado";
        }
    }
}
calcularMediaGeral();
?>
</body>
</html>