<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05 result</title>
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
    <h1>Desafio 05 resultado</h1>
    <main>
        <h2>Analisador de número real</h2>
        <div>
            <?php 
                $q_value = $_GET['q'] ?? 0;
                
                $int = (int) intval($q_value);
                $fractional = $q_value - $int;
                
                echo "<p>A parte inteira do número é $int</p>";
                echo "<p>Já a parte fracionaria do número é $fractional</p>";
                echo "<p><a href=\"./index.php\">VOLTAR</a></p>";
            ?>
        </div>
    </main>
</body>
</html>