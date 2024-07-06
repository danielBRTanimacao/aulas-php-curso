<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h2>Testes tipos primitivos</h2>
    <?php
        // 0x = hexadecimal 0b = binario 0 = Octal 
        // $num = 010;
        // echo "O valor da variavel e $num"

        // $v = 300;
        // // mostra o valor e o tipo
        // var_dump($v);
    
        // $v = (int) 3e2;
        // echo "o valor é $v";
    
        // $var = (int) "950";
        // echo "<p>$var</p>";
        // var_dump($var)

        // $married = true;
        
        // $vetor = [
        //     1, 2, 3, 4,
        // ];

        // // for ($i=0; $i < $vetor; $i++) { 
            
        // // }

        // class Person {
        //     private string $name;
        // }

        // $person = new Person();
    
        class Person {
            private string $name;

            public function showName(){
                return $this->name;
            }
        }

        $random_person = new Person();

        $random_person->showName();
    ?>
</body>
</html>