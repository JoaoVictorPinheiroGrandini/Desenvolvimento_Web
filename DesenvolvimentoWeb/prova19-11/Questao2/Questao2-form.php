<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Questao2-exibir.php" method="GET">
        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <label for="pn">Primeiro Numero:</label>
        <input type="number" name="pn">

        <label for="sn">Segundo Numero:</label>
        <input type="number" name="sn">

        <button type=submit>
    </form>
</body>
</html>