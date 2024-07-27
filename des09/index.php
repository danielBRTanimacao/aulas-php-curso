
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        main {
            height: 60vh;
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
    <h1>Desafio 09</h1>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        $p1 = $_GET['p1'] ?? 1;
        $p2 = $_GET['p2'] ?? 1;
    ?>
    <main>
        <h2>Desafio Media aritmeticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="v1">1° valor:</label>
            <input type="number" name="v1" id="v1Id" value="<?=$v1?>">
            <label for="p1">1° peso:</label>
            <input type="number" name="p1" id="p1Id" value="<?=$p1?>">
            <label for="v2">2° valor:</label>
            <input type="number" name="v2" id="v2Id" value="<?=$v2?>">
            <label for="p2">2° peso:</label>
            <input type="number" name="p2" id="p2Id" value="<?=$p2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div>
        <h2>Calculo das medias</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php 
                $ari_simple = ($v1 + $v2) / 2;
                $ari_pond = (($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2);
                echo "<p>Analisando os valores $v1 e $v2</p>";
                echo "<p>A media aritmetica simples entre os valores é igual a $ari_simple</p>";
                echo "<p>A media aritmetica ponderada com pesos $p1 e $p2 é igual a " . round($ari_pond, 2) ."</p>";
            ?>
        </div>
    </div>
</body>
</html>