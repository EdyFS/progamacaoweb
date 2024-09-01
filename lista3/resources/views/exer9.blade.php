<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <form action="/respostaexer9" method="POST">
        @CSRF
        <input type="number" name="raio" placeholder="Raio"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>