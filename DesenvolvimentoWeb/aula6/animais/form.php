<!DOCTYPE html>
<html>
<head>
    <title>Aula 3</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <h1>Aula do dia 26/11</h1>
    <fieldset>
        <legend>Animal</legend>
        <form action="tabela.php" method="get" id="filtro">
            <label for="animal">Animal:</label>
            <br>
            <select id="animal" name="animal" >
            <option value="">Escolha o seu grupo de animais</option>
                <?php
                    $grupos = array("M"=>"Mamíferos", "A"=>"Aves", "B"=>"Bactérias");

                    foreach($grupos as $chave => $valor){
                        if($chave == $_GET['animal']){
                            echo "<option value ='" . $chave ."' selected>" . $valor . "</option>";
                        }
                        else{
                            echo "<option value ='" . $chave ."'>" . $valor . "</option>";
                        }
                    }
                ?>
            </select>
            <br>
            <label for="especie">Especie:</label>
            <br>
            <select id="especie" name="especie">
          
            </select>
            <br>
            <br>
            <button type="submit" id="Filtrar" name="Filtrar">animal</button>
        </form>
    </fieldset>
</body>
</html>