<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP formulario retroalimentado</title>
</head>
<body>
    <h1>Formulario retroalimentado</h1>
    <?php 
        $v1 = $_GET['n1'] ?? 0;
        $v2 = $_GET['n2'] ?? 0;
        $result = $v1 + $v2
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="n1">Primeiro número:</label>
            <input type="number" name="n1" id="numberOne" value="<?=$v1?>">
            <label for="n2">Segundo número:</label>
            <input type="number" name="n2" id="NumberTwo" value="<?=$v2?>">
            <input type="submit" value="Somar">
        </form>
        <div>
            <p>
                <?php 
                    echo "Resultado da soma $result"
                ?>
            </p>
        </div>
    </main>
</body>
</html>