<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 result</title>
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
    <h1>Desafio 01 resultado</h1>
    <main>
        <h2>Desafio Antecessor e Sucessor</h2>
        <div>
            <?php 
                $q_value = $_GET['q'];
                echo "<p>O número digitado foi $q_value</p>";
                echo "<p>O seu ANTECESSOR é ". $q_value - 1 ."</p>";
                echo "<p>Já o seu SUCESSOR é ". $q_value + 1 ."</p>";
                echo "<p><a href=\"./des1.php\">VOLTAR</a></p>";
            ?>
        </div>
    </main>
</body>
</html>