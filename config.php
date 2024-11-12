<?php
// Evitar el acceso directo al archivo
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1 style='font-size: 50px; color: red; text-align: center;'>404 Not Found</h1>";
    exit;
}

// Partes desordenadas del token y variables adicionales
$p1 = "7691";
$a3 = "994";
$c4 = "807:";
$e8 = "AAEI";
$x5 = "VsAx";
$m0 = "5r7A";
$n2 = "VYUn";
$q9 = "wAC5";
$l7 = "PbG6";
$f3 = "3DfW";
$z6 = "_MIP";
$g1 = "Fbc";

$token = $p1 . $a3 . $c4 . $e8 . $x5 . $m0 . $n2 . $q9 . $l7 . $f3 . $z6 . $g1;

$v2 = "9876";
$d4 = "5432";
$ch1 = "10";

$chat_id = $v2 . $d4 . $ch1;

// Prueba de salida (Eliminar en producción)
echo "Token: " . $token . "<br>";
echo "Chat ID: " . $chat_id . "<br>";

?>
