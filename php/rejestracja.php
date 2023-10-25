<link rel="stylesheet" href="./styles/style.css">
<?php 
$ciastko_wartosc = null;
if (!isset($ciastko_wartosc)){
    ?>
<form name="rejestracja" method="post" action="">
    <legend>REJESTRACJA</legend>
    <label for="login">Login: </label>
    <input type="text" name="login" required><br>
    <label for="haslo">Hasło: </label>
    <input type="text" name="haslo" required><br>
    <input type="submit" id="submit" value="Zarejestruj się">
</form>
<?php
}
$number = 0;
    if(isset($_POST['login'])){
        $ciastko = "nazwa";
        $ciastko_wartosc = $_POST['login'];
        setcookie($ciastko, $ciastko_wartosc, time() + (86400 * 7), "/");
        include 'verifier.php';
        header("location:./glowna.php");
    }  
    
?>