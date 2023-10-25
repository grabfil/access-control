<link rel="stylesheet" href="../styles/style.css">
<form name="logowanie" method="post" action="">
    <legend>LOGOWANIE</legend>
    <label for="login">Login: </label>
    <input type="text" name="login" required><br>
    <label for="haslo">Hasło: </label>
    <input type="text" name="haslo" required><br>
    <a href="php/reset.php">Zapomniałeś hasła</a><br>
    <input type="submit" id="submit" value="Zaloguj się">
</form>

<?php
$number = 1;
    if(isset($_POST['login'])){
        $ciastko = "nazwa";
        $ciastko_wartosc = $_POST['login'];
        setcookie($ciastko, $ciastko_wartosc, time() + (86400 * 7), "/");
        include 'verifier.php';
        if($verify){
            header("location:../logowanie/glowna.php");
        }else{
            echo "<p>"."Błedny login lub hasło, spróbuj ponownie"."</p>";
        }
        
    } 
?>