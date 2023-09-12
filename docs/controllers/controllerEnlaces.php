<?php
class controllerEnlaces{ 

    // instanciada en el template
    public function controllerEnlacesForm(){            

        if(isset($_GET["action"])){   
        $enlacesForm = $_GET["action"];

        }else{

        $enlacesForm = "index";

        }

        $respuesta = 
        controllerEnlaces::controllerEnlacesPaginas($enlacesForm);
        include $respuesta;       

    }
    
    public static function controllerEnlacesPaginas($enlacesPag){

        if($enlacesPag =="dashboard" ||
           $enlacesPag =="presupuesto" ||
           $enlacesPag =="tarjetas" ||           
           $enlacesPag =="materiales" ||
           $enlacesPag =="manodeo" ||
           $enlacesPag =="herramienta" ||           
           $enlacesPag =="auxiliares"){
            #si enlacesmodel es igual igual a tarjetas/metariales/manodeo, entonces que se remplace por el modolo que esta creado ($enlacesmodel)
            $module = "views/modules/".$enlacesPag.".php";

        }else if($enlacesPag == "index" ){
            #si enlaces model es igual igual a index que se remplace por la pagina de inicio (index)
            $module = "views/modules/inicio.php";


        }else{

            $module = "views/modules/inicio.php";             
        }

        return $module;
    }
}

?>