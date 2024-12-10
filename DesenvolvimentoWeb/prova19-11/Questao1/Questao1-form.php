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
    
    function criarInput($chave){
        $tipo = "number";
        $placeholder = "Coloque a ".$chave;
        echo "<input type='".$tipo."' id='".$chave."' name='".$chave."' placeholder='".$placeholder."'>";
    }

    function criarFormularios(){
        $url = "Questao1-exibir.php";
        $method = "GET";
        echo "<form action='".$url."' method='".$method."'>";
        for($i=1; $i<=4; $i=$i+1){
            $notaDaVez = "N".$i;

            echo "<label for='".$notaDaVez."' >".$notaDaVez."</label>";

            criarInput($notaDaVez);
        }
        echo "<button type=submit>";
        echo "</form>";
    }

    criarFormularios();
?>
</body>
</html>