<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php testes</title>
</head>
<body>
    <h1>Teste</h1>
    <?php 
    
        // $name = "Daniel";
        // $sobrenome = "Tenório";
        // const PAIS = "Brasil";
        // $name = "Aparecida";
        
        // echo "Olá, $name $sobrenome, você mora em " . PAIS;
        const ID = 1;
        $name_person = "Daniel";
        $salary = 0;
        $age = 19;
        $work = "Desenvolvedor";
        $sex = "M";
        $married = false;
        if ($married) {
            $married = "Sim";
        } else {
            $married = "Não";
        }

        echo "Olá $name_person </br> Sua idade é: $age </br> Seu sexo é: $sex </br> Você trabalha: $work </br> Você e casado? $married";

    ?>
</body>
</html>