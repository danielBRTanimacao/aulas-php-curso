<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Manipulando Strings</title>
</head>
<body class="m-5">
    <h1 class="display-1">Strings manipulando</h1>
    <h2 class="lead">Fazendo alguns testes</h2>

    <?php 
        // existe interpretação no conteudo
        $course = "Curso ";
        $language = "PHP \u{1F418}";
        // Não a uma interpretação no conteudo
        $language2 = 'Python \u{1F596}';

        const STATE = "PE"; 
        $name = 'Daniel';
        $last_name = "Tenório \u{1F596}";
        echo "<p>" . $course . $language . $language2 . "</p>";
        echo "<p>" . date('Y') . " Olá me chamo $name $last_name moro no estado de " . STATE . "</p>";
        echo "<p>Meu apelido é \"Mamute\"</p>"
        // Escapes de sequencia
        /*
            \n = Nova linha
            \t = Tabulação horizontal
            \\ = Barra invertida
            \$ = Sinal cifrão
            \u{} = Code point unicode
        */
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>