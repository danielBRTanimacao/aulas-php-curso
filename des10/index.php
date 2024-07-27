<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
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
    <h1>Desafio 09</h1>
    <?php 
        $you_year = $_GET['youYear'] ?? 0;
        $pre_year = $_GET['preYear'] ?? date('Y');
    ?>
    <main>
        <h2>Desafio Media aritmeticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="youYear">Digite o ano que você nasceu:</label>
            <input type="number" name="youYear" id="youYearID" value="<?=$you_year?>" autofocus>
            <label for="preYear">Que saber sua idade em que ano(atualmente estamos em <strong><?=$pre_year?></strong>)</label>
            <input type="number" name="preYear" id="preYearId" value="<?=$pre_year?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div>
        <h2>Resultado</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php 
                $age = $pre_year - $you_year;
                echo "<p>Quem nasceu em $you_year vai ter $age anos em $pre_year</p>";
            ?>
        </div>
    </div>
</body>
</html>