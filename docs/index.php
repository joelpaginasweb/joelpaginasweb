<?php
// index muestra la salida delas vistas al usuario y a traves de el se envian las acciones que el usuario envia al controlador.


require_once "controllers/controllerTemp.php";
require_once "controllers/controllerEnlaces.php";


  /*--- class MvcController contiene:
         public function plantilla() 
         public function enlacesPaginasController()        
        ---*/


$mvc = new controllerTemp();
$mvc -> plantilla();// plantilla include "views/template.php";







?>