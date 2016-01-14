<?php
 /* lo primero, unirse a la sesión*/
 session_start();
 /* si el array $_SESSION['compras'] no existe se crea*/
 if(!isset($_REQUEST['codigo'])){
 	$cod = '';
 if(!isset($_SESSION['compras'])){
 	$_SESSION['compras'] = array();
 }
 }else{
 /* el parámetro del $_REQUEST['codigo'] es el código del producto que se compra*/
 /* este es el momento de comprobar que de verdad existe*/
 $cod =  $_REQUEST['codigo'];
 /* si no existe $_SESSION['compras'][$_REQUEST['codigo']], se crea con valor 1 */
 if(!isset($_SESSION['compras'][$cod])){
 	 $_SESSION['compras'][$cod] = 1;
 }else{
 /* si existe, se aumenta el valor en 1 hacemos la cookie*/
 	$_SESSION['compras'][$cod] = $_SESSION['compras'][$cod] + 1;
 }
 /*comprobación*/
 
 foreach ($_SESSION['compras'] as $key => $value) {
 	if ($value != 0) {//ponemos este if para que cuando borremos un producto se no elimine del todo
    echo "Has comprado $value unidades del producto con código $key <br>";
	       
 	}
  }
}

 
?>