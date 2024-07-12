<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coletando infos formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .center-form {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        body {
            background-color: #c8cfca !important;
        }
        form {
            border-radius: 10px;
            background-color: #f2f2f2;
            padding: 10px;
        }
    </style>
</head>
<body>
    <section class="center-form">
        <form action="register.php" method="post">
            <h2>Registro formulario</h2>
            <div class="py-2">
                <label for="username">Nome:</label>
                <input type="text" name="username" id="userId" class="form-control border-2" required>
            </div>
            <div class="py-2">
                <label for="email">Email:</label>
                <input type="email" name="email" id="mailId" class="form-control border-2" required>
            </div>
            <div class="py-2">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="passId" class="form-control border-2" required>
            </div>
            <div class="py-2">
                <button type="submit" class="form-control btn btn-primary">Enviar</button>
            </div>
        </form>
    </section>
</body>
</html>