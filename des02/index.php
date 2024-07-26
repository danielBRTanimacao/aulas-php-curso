<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
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
    <h1>Desafio 02</h1>
    <main>
        <h2>Desafio Gerador de numeros aleatorios</h2>
        <form action="index.php" method="POST">
            <h3>Gerando um número aleatorio entre 0 e 100</h3>
            <?php
                $value_generated = rand(0, 100);
                echo "O valor gerado foi $value_generated";
            ?>
            <input type="submit" value="Gerar número">
        </form>
    </main>
</body>
</html>