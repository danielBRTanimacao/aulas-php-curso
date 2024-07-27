<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        main {
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        h1, h2, h3 {text-align: center;}
        form {
            padding: 10px;
            display: flex;
            gap: 10px;
            flex-direction: column;
        }
        input {
            padding: 10px 1rem;
        }
    </style>
</head>
<body>
    <h1>Desafio 06</h1>
    <?php 
        $v1 = $_GET['n1'] ?? 0;
        $v2 = $_GET['n2'] ?? 1;
    ?>
    <main>
        <h2>Desafio Anatomia de uma divisão</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="n1">Dividendo:</label>
            <input type="number" name="n1" id="numberOneId" value="<?=$v1?>">
            <label for="n2">Divisor:</label>
            <input type="number" name="n2" id="numberTwoId" value="<?=$v2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div>
        <h2>Estrutura da divisão</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php 
                $result = $v1 / $v2;
                $quotient = intdiv($v1, $v2);
                echo "<p>$v1 | $v2</p>";
                echo "<p>$result | $quotient</p>";
            ?>
        </div>
    </div>
</body>
</html>