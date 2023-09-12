<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>app-precios-unitarios</title>   
        <link rel="stylesheet" href="HTTP://localhost/MVC_app_pu/assets/css/estilobase.css">    
    </head>
<!----- Esto es un comentario ------>
    <body>
        <header>
            <div id="caja">

                <div id="divlogo">               
                    <h1 id="logo">S+P+U</h1>               
                </div> 

                <nav class="navhe">
                   <?php  include "modules/nav.php"; ?>                
                </nav>      

                <div id="divnombre">              
                    <a id="cliente" href=" ">Nombre eee de Usuario</a>    
                </div>

            </div>   
   
        </header>    

        <main>
            <?php
                $mvc = new controllerEnlaces();
                $mvc -> controllerEnlacesForm();
            ?>
        </main>

        <footer>    
            <?php
                include "modules/footer.php";
            ?>
        </footer>
        
    </body>
</html>