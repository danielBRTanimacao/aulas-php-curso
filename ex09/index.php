<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>
<body>
    <h1>Super globais</h1>
    <main>
        <pre>
            <?php 

                setcookie("day-week", "Sabado", time() + 3600);

                session_start();
                $_SESSION['teste'] = 'Foi a parada foi';

                echo "<h1>Super global GET</h1>";
                print_r($_GET);
                echo "<h1>Super global POST</h1>";
                var_dump($_POST);
                echo "<h1>Super global REQUEST</h1>";
                var_dump($_REQUEST);
                echo "<h1>Super global COOKIE</h1>";
                var_dump($_COOKIE);
                echo "<h1>Super global FILES</h1>";
                var_dump($_FILES);
                echo "<h1>Super global SESSION</h1>";
                var_dump($_SESSION);
                echo "<h1>Super global ENV</h1>";
                var_dump($_ENV);
                echo "<h1>Super global SERVER</h1>";
                var_dump($_SERVER);
                echo "<h1>Super global GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>