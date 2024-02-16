<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de fuso-horário</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("D/M/Y");
    echo " e a hora atual é " . date("g:I:S");
    ?>
    
</body>
</html>