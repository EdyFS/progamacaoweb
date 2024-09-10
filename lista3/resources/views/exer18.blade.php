<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <form action="/respostaexer18" method="POST">
        @CSRF
        <input type="number" name="capital" placeholder="Capital"/>
        <input type="number" name="taxa" placeholder="Taxa"/>
        <input type="number" name="periodo" placeholder="Período"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>