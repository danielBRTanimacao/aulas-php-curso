<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
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
    <h1>Desafio 07</h1>
    <?php 
        $salary = $_GET['salary'] ?? 1380;
        $minimal_salary = 1380
    ?>
    <main>
        <h2>Desafio Salario minimo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="salary">Digite seu salario:</label>
            <input type="number" name="salary" id="salaryId" value="<?=$salary?>">
            <p>Considere o salario minimo de R$<?=number_format($minimal_salary, 2, ',', '.')?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div>
        <h2>Resultado final</h2>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php 
                $n_salary_minimals = intdiv($salary, $minimal_salary);
                $rest = $salary % $minimal_salary;
                echo "<p>Quem recebe um salario de R$" . number_format($salary, 2, ',', '.') . " ganha $n_salary_minimals salarios minimos + $rest</p>";
            ?>
        </div>
    </div>
</body>
</html>