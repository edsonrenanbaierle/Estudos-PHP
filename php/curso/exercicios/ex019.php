<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_GET['valor'] == 1): ?>
        <h1>Sua sessão expirou, faça o login novamente.</h1>
    <?php elseif($_GET['valor'] == 2): ?>  
        <h1>Você não possui permissão para acessar.</h1>
    <?php else: ?>      
        <h1>Valor Não Encontrado</h1>
    <?php endif; ?>
</body>
</html>