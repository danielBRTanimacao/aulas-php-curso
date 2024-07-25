<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidas</title>
</head>
<body>
    <?php 
        $value1 = 10;
        $value2 = 1;
        $result = $value1 ** $value2;
        echo "Medidas valores $value1, $value2 igual a $result";

        $base = abs(-100);
        $base_numeric = base_convert(1001, 100, 10);
        // ceil floor, round
        // hypot 
        // intdiv
        // pow
    ?>
</body>
</html>