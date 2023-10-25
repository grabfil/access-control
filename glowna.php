<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>glowna</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header>
        <a href="index.php">Wyloguj się</a>
    </header>
<?php
    if(isset($_COOKIE['nazwa'])){
        echo "<div>";
        echo "<h1>"."Witaj ".$_COOKIE['nazwa']."!"."</h1>";
        echo "</div>";
    }else{
        echo "Błąd";
    }
?>
</body>
</html>

