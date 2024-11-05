<?php
    $dadosProduto = array (
        array('nome' => 'detergente', 
        'fabricante' => 'bolsonaro', 
        'preco' => '24.90 R$'),

        array('nome' => 'yogurte',
        'fabricante' => 'nestle', 
        'preco' => '3.5 R$'),
        
        array('nome' => 'manteigueira', 
        'fabricante' => 'chaves', 
        'preco' => '21.99 R$')
    )

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            $tabel = "<tr><th>Nome</th><th>Fabricante</th><th>Preço</th></tr>";
            foreach($dadosProduto as $produto){
                $tabel .="<tr><td>".$produto['nome']."</td><td>".$produto['fabricante']."</td><td>".$produto['preco']."</td></tr>";
            }
            echo $tabel;
        ?>
    </table>
</body>
</html> 