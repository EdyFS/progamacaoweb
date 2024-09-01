<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <form action="/respostaexer16" method="POST">
        @CSRF
        <input type="number" step="0.01" name="preco" placeholder="preco"/>
        <input type="number" name="desconto" placeholder="Desconto"/>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>