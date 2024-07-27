<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
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
    <h1>Desafio 13</h1>
    <?php 
        $w_value = $_GET['v'] ?? 0;
    ?>
    <main>
        <h2>Desafio Calculadora de tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="v">Digite um valor para sacar:</label>
            <input type="number" name="v" id="vID" value="<?=$w_value?>" autofocus>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <div>
        <h2>Saque de R$<?=number_format($w_value, 2, ',', '.')?> realizado</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php
                $cent = 0;
                $fift = 0;
                $twenty = 0;
                $ten = 0;
                $five = 0;
                echo "<p>O caixa eletronico vai entregar as seguintes notas:</p>";
            ?>
            <ul>
                <li>
                    <?="100: $cent"?>
                </li>
                <li>
                    <?="50: $fift"?>
                </li>
                <li>
                    <?="20: $twenty"?>
                </li>
                <li>
                    <?="10: $ten"?>
                </li>
                <li>
                    <?="5: $five"?>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>