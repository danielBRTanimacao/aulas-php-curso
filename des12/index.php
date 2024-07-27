<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
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
    <h1>Desafio 12</h1>
    <?php 
        $time_get = $_GET['t'] ?? 0;
        
    ?>
    <main>
        <h2>Desafio Calculadora de tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="t">Qual total de segundos:</label>
            <input type="number" name="t" id="tID" value="<?=$time_get?>" autofocus>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div>
        <h2>Resultado</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php
                $s = floor($time_get / 604800);
                $d = ceil($time_get / 86400 );
                $h = floor($time_get / 3600);
                $m = floor(($time_get - ($h * 3600)) / 60);
                $se = floor($time_get % 60);
                echo "<p>Analisando o valor que você digitou, $time_get segundos equivalem a um total de:</p>";
            ?>
            <ul>
                <li>
                    <?="$s Semanas"?>
                </li>
                <li>
                    <?="$d Dias"?>
                </li>
                <li>
                    <?="$h Horas"?>
                </li>
                <li>
                    <?="$m Minutos"?>
                </li>
                <li>
                    <?="$se Segundos"?>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>