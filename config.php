<?php
// Evitar el acceso directo al archivo
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1 style='font-size: 50px; color: red; text-align: center;'>404 Not Found</h1>";
    exit;
}

// Partes desordenadas del token y variables adicionales
$p1 = "7905";
$a3 = "0411";
$c4 = "4:A";
$e8 = "AGJu";
$x5 = "YDYQ";
$m0 = "449";
$n2 = "6ire";
$q9 = "J5UT";
$l7 = "c5eC";
$f3 = "Zuqu";
$z6 = "92Bc";
$g1 = "fno";

$token = $p1 . $a3 . $c4 . $e8 . $x5 . $m0 . $n2 . $q9 . $l7 . $f3 . $z6 . $g1;

$v2 = "9876";
$d4 = "5432";
$ch1 = "10";

$chat_id = $v2 . $d4 . $ch1;

// Prueba de salida (Eliminar en producción)
echo "Token: " . $token . "<br>";
echo "Chat ID: " . $chat_id . "<br>";

?>
