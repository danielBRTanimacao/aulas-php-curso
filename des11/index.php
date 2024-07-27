<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        main {
            height: 40vh;
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
    <h1>Desafio 11</h1>
    <?php 
        $product_price = $_GET['pv'] ?? 0;
        $percent = $_GET['per'] ?? 0;
    ?>
    <main>
        <h2>Desafio preço imposto</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="pv">Preço do produto R$:</label>
            <input type="number" name="pv" id="pvID" value="<?=$product_price?>" autofocus>
            <label for="per">Qual seu percentual de reajuste</label>
            <input type="range" name="per" id="perId" value="<?=$percent?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div>
        <h2>Resultado</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php 
                $r = ($product_price * ($percent / 100)) + $product_price;
                echo "<p>O produto que custava R$". number_format($product_price, 2, ',', '.')." com $percent% de aumento vai passar a custar R$". number_format($r, 2, ',', '.'). " a partir de agora</p>";
            ?>
        </div>
    </div>
</body>
</html>