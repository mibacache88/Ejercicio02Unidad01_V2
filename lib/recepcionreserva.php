<?php
include('reservaciones.php');
include('constantes.php');


$oReservaciones=new reservaciones($_POST["name"], $_POST["email"], $_POST["sourceregion"], "", "", "");
if(isset($_SESSION["aReservacion"])){
    $arrReservaciones=$_SESSION["aReservacion"];    
}
$arrReservaciones[]=$oReservaciones;

$_SESSION["aReservaciones"]=$arrReservaciones;   

echo "<pre>";
var_dump($_POST);
echo "</pre>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */