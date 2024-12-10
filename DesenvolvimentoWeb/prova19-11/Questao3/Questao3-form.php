<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Questao3-exibir.php" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for="idade">Idade:</label>
        <input type="number" name="idade">

        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="RJ">RJ</option>
            <option value="SP">SP</option>
            <option value="ES">ES</option>
            <option value="SC">SC</option>
        </select>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade">

        <label for="sexo">Sexo:</label>
        M
        <input type="radio" name="sexo" value="M">
        F
        <input type="radio" name="sexo" value="F">
        
        <button type=submit>
    </form>
</body>
</html>