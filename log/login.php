<?php
$usuario = $_POST ["usuario"];
$pass = $_POST ["pass"];

$ckusuario = "admin";
$ckpass = 1234;

if ($usuario == $ckusuario && $pass == $ckpass) {
    header("location: https://pbs.twimg.com/media/Ebdq_U8WkAEzFDb.jpg:large");
} else {
    echo "error";
}
?>