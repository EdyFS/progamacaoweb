<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
    <form action="/respostaexer20" method="POST">
        @CSRF
        <input type="number" name="distancia" placeholder="Distância"/>
        <input type="number" name="tempo" placeholder="Tempo"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>