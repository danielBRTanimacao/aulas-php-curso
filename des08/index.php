
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
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
    <h1>Desafio 08</h1>
    <?php 
        $n1 = $_GET['n1'] ?? 0;
    ?>
    <main>
        <h2>Desafio Raiz cubica e quadrada</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="n1">Digite um número:</label>
            <input type="number" name="n1" id="n1Id" value="<?=$n1?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div>
        <h2>Resultado final</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php 
                $square_root = sqrt($n1);
                $root_cubic = pow($n1, 1/3);
                if (is_float($square_root)) {
                    $square_root = round($square_root, 2);
                }
                if (is_float($root_cubic)) {
                    $root_cubic = round($root_cubic, 2);
                }
                echo "<p>Analisando o número $n1 temos</p>";
                echo "<p>Sua raiz quadrada é $square_root</p>";
                echo "<p>Já a sua raiz cubica é $root_cubic</p>";
            ?>
        </div>
    </div>
</body>
</html>