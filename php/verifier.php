<?php
    $pol = mysqli_connect("localhost","root","","logowanie") or die("Blad");
    $user = $_POST['login'];
    $pass = $_POST['haslo'];
    if($number == 0){
        mysqli_query($pol,"INSERT INTO users VALUES(NULL, '$user', '$pass');");
    }else{
        $verify = FALSE;
        $check = mysqli_query($pol,'SELECT nazwa, haslo FROM users');
        while($row = mysqli_fetch_array($check)){
            if($user == $row['nazwa']){
                if($pass == $row['haslo']){
                    $verify = TRUE;
                }else{
                    $verify = FALSE;
                }
            }
        }
        mysqli_close($pol);
    }
    
?>