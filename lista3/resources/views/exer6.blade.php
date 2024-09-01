<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
<form action="/respostaexer6" method="POST">
        @CSRF
        <input type="number" name="temperatura"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>