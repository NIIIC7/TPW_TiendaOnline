<?php

/* Constante */
define("KEY_TOKEN", "ABCDE12345"); 
define("MONEDA", "S/.");

session_start();

$num_cart = 0;
if (isset($_SESSION['carrito']) && isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}
?>
