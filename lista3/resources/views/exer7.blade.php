<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
<form action="/respostaexer7" method="POST">
        @CSRF
        <input type="number" name="temperatura"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>