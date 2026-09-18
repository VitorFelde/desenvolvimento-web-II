<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor</title>
</head>
<body>
<h2>Selecione a cor</h2> 
    <form method="POST" action="color_exec.php">
        <select name="cor">
        <option value="">--Selecione o combustível---</option>
        <option value="tomato">Tomato</option>
        <option value="orange">Orange</option>
        <option value="dodgerblue">Dodger Blue</option>
        <option value="mediumseagreen">MediumSeaGreen</option>
        <option value="gray">Gray</option>
        <option value="slateblue">SlateBlue</option>
        <option value="violet">Violet</option>
        <option value="lightgray">LightGray</option>
    </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>