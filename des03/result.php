<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03 result</title>
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
    </style>
</head>
<body>
    <h1>Desafio 03 resultado</h1>
    <main>
        <h2>Conversor de moedas</h2>
        <div>
            <?php 
                $q_value = $_GET['q'];
                $cot = 5.67;
                $result = $q_value / $cot;
                echo "<p>Seus R\$$q_value equivalem a R$". number_format($result, 2, ',') ."</p>";
                echo "<p>Cotação utilizada US$".number_format($cot, 2, ',')."</p>";
                echo "<p><a href=\"./index.php\">VOLTAR</a></p>";
            ?>
        </div>
    </main>
</body>
</html>