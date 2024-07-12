<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST php</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            var_dump($_POST); // $_REQUEST e a junção de GET POST e COOKIE 
            $name = $_POST['username'] ?? header('Location: http://localhost/aulas-php-curso/ex07/');
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo "<p>Olá $name</p>";
            echo "<p>$password</p>";
            echo "<p>$email</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>