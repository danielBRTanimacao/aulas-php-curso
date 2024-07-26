<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04 result</title>
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
    <h1>Desafio 04 resultado</h1>
    <main>
        <h2>Conversor de moedas v2.0</h2>
        <div>
            <?php 
                $q_value = $_GET['q'];
                $end_point = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
                
                $itens = json_decode(file_get_contents($end_point));
                foreach ($itens as $key => $value){
                    $cot = $value->high;
                }
                
                $result = $q_value / $cot;

                echo "<p>Seus R\$$q_value equivalem a R$". number_format($result, 2, ',') ."</p>";
                echo "<p>Cotação utilizada US$".number_format($cot, 2, ',')."</p>";
                echo "<p><a href=\"./index.php\">VOLTAR</a></p>";


            ?>
        </div>
    </main>
</body>
</html>