<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <form action="/respostaexer15" method="POST">
        @CSRF
        <input type="number" step="0.01" name="altura" placeholder="Altura"/>
        <input type="number" name="massa" placeholder="Massa"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>