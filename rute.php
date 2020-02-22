<?php

require_once '../controller/controller.php';

$controller=new Controller();

$action=isset($_POST['action'])?$_POST['action']:"";
$action2=isset($_GET['action'])?$_GET['action']:"";

switch($action){

case "Registracija":
$controller->registracija();
break;

case "Ulogujte se":
$controller->login();
break;

case "Objavite oglas":
$controller->dodajOglas();
break;


}

switch($action2){

case "logout":
$controller->logout();
break;


case "Izaberite kategoriju":
$controller->izaberiKategoriju();
break;
    

case "Izaberite mesto":
$controller->izaberiMesto();
break;


case "Unesite cenu":
$controller->izaberiCenu();
break;
    
case "vididetaljnije":
$controller->vidiDetaljnije();
break;



}









?>