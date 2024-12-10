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
        if(!empty($_GET["linhas"])){
            $linhas = $_GET["linhas"];
        }else{ echo "as linhas nao foram informadas";}

        if(!empty($_GET["colunas"])){
            $colunas = $_GET["colunas"];
        }else{echo "as colunas nao foram informadas";}

        echo "<table style='border: solid black 1px'>";
        
        $i = 1;

        while($i <= $linhas){
            echo "<tr>";
            $j = 0;
            while($j <= $colunas){
                if($i == 1){
                    echo "<th style='border: solid black 1px'> Cabeçalho ".$j."</th>";
                }else{
                    echo "<td style='border: solid black 1px'> linha ".$i.", Coluna".$j."</td>";
                }
                $j = $j + 1;
            }

            echo "</tr>";
            $i = $i + 1;
        }
        echo "</table>"

       
    ?>
</body>
</html>