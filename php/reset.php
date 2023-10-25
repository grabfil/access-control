<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetowanie hasła</title>
    <link rel="stylesheet" href="../styles/pass.css">
</head>
<body>
<header>
        <a href="../index.php">Powrót</a>
</header>
<form name="reset" method="post" action="">
    <legend>RESETOWANIE HASŁA</legend>
    <label for="login">Podaj nazwę użytkownika: </label>
    <input type="text" name="login" required><br>
    <label for="newpass">Podaj nowe hasło: </label>
    <input type="text" name="newpass" required><br>
    <input type="submit" id="submit" value="Zatwierdź">
</form>
<?php
    $pol = mysqli_connect("localhost","root","","logowanie") or die("Blad");
    if(isset($_POST['login']) and isset($_POST['newpass'])){
        $name = $_POST['login'];
        $haslo = $_POST['newpass'];
        $check2 = mysqli_query($pol, 'SELECT nazwa FROM users');
        while($row = mysqli_fetch_array($check2)){
            if($name == $row['nazwa']){
                mysqli_query($pol, "UPDATE users SET haslo = '$haslo' WHERE nazwa like '$name'");
                echo "<p style='color: #00A19B;'>Hasło zostało zmienione.</p>";
                
            }
        }
    }
    mysqli_close($pol);
    
?>
</body>
</html>