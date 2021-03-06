

<?php

include_once('php/datosindex3.php');
include_once('php/funciones.php'); // las funciones y las variables no se pueden colocar dos veces


// si queremos acceder a una carpeta y al archivo usamos /, y queremos devolvernos ../ include_once('php/ mailindex3');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- enlaces externos -->
    <link rel ="stylesheet" href="css/reset.css">
    <link rel ="stylesheet" href="css/index3.css">

    <!-- Titulo de la web -->
    <title>Document</title>
</head>
<body >
 <!-- header+section+footer para poner los 3 de una vez -->
 <!-- header: logo, informacion de contacto, resumen -->
 <div id= "contenedor"> <!-- este div es una caja vacia que simplemente su funcion sera contener el contenido de head del body-->
<header>
    <!-- Logotipo -->
    <h1 class = "logotipo">
        <span>
        <?php

        // Al tener una ckase de CONTACTO donde hicimos todo la parte del contenido de CONTACTO, entonces este echo($logo); no ya no nos serivira
        //echo($logo);

        // Ahora si queremos hacer en esta pase del logo, pero con POO, POr lo cual hacemos un echo del OBJETO y si queremos podemos indicarle que nos muestre solo la propiedad de nombre, o que nos muestre el comportamiento( en este caso de logo()) para que nos muestre las iniciales del nombre completo del OBJETO.

        //echo( $juan->nombre);
       
         echo($juan -> logo());
        ?>
        </span>
    </h1>
<div class="informacion">
    <!-- informacion contacto -->
    <h2 class = "nombre">
        <?php
        echo($juan->nombre . $juan->apellido);
        ?>
        <!-- Mateo g -->
    </h2>
    <h3 class = "subtitulo">
       <!-- Estudiante-->
       <?php
echo($juan->subtitulo);

?>
    </h3>
    <ul class = "infoContacto">
        <li class = "infoContacto__mail">
            <span class = "infoContacto__mail--black">Mail:</span>
            <?php
        //echo($contacto['mail'])
        // Con POO
        echo($juan->mail);;
        ?>
            <!-- holaxd@gmail.com -->
        </li>
        <li class = "infoContacto__movil">
            <span class = "infoContacto__movil--black">Movil:</span>
            <?php
        //echo($contacto['movil']);
        echo($juan->movil);
        ?>
            <!-- +34 000 000 000 -->
        </li>
        <li class = "infoContacto__linkedin">
            <span class = "infoContacto__linkedin--black">Linkedin</span>
            <?php
        //echo($contacto['linkedin']);
        echo($juan->linkedin);
        ?>
            <!-- http://www.linkedin.com/hkgsdjhs -->
        </li>
        <li class = "infoContacto__twitter">
            <span class = "infoContacto__twtter--black">Twitter:</span>
            <?php
        //echo($contacto['twitter']);
        echo($juan->twitter);
        ?>
            <!-- @papu -->
        </li>
    </ul>
</div>
</header>

<!-- margen vertical entre modulos -->
<div class="margenvertical"></div>


<section class = "resumen">
    
<!-- Resumen -->
<h4 class="resumen_titulo tituloCentral">
    <?php
    echo($resumen_titulo);
    ?>
</h4>
<hr>
<p class="resumen_parrafo">
    <?php
    // echo($resumen_parrafo);

    echo($juan->resumen_parrafo);
    ?>

 </p>
</section>

<div class="margenvertical"></div>

<!-- div.sectionCentral>section.certificados+aside.habilidades, sectioncentral es quien tendra ambas columnas del contenido, nos permitira poner dos columnas de contenido junto como un blog-->
<!-- SEccion del centro de la WEB -->
<div class="sectionCentral">
    <!-- zona de certificados -->
    <section class="certificados">
    <h4 class="certificados_titulo tituloCentral">
        Certificados</h4>
    <hr>
    <?php
    
    certificados();
    
        ?> 
         </section>
         <!-- zona de habilidades al lado derecho de certificados -->
    <aside class="habilidades">
    <!-- h4{habilidades y herramientas}+hr+ul{Backend}>li*3 -->
    <h4>habilidades & herramientas</h4>
    <hr>
    <?php
    
//     for($i = 0; $i < count($habilidades) ; $i++) { 

    
//         $contadorProyectos = count($habilidades[$i]) - $Titulonombre;
        
        
        
//         echo('<article>');
//             echo('<ul class="habilidades_habilidades">');
            
                 
            
            
//             if( isset($habilidades[$i] [0])) 
//             {
//                         echo('<li class="habilidades_habilidades_titulo subtituloCentral">');
//                      echo($habilidades[$i] [0]);
//                      echo('</li>');
//                     };

                  
            
//                     $cc = 0;
                    
//                     while($cc < $contadorProyectos){
                        
                    
           
//                 echo('<li class="habilidades_parrafo">');
//                 echo($habilidades[$i] [$Titulonombre + $cc]);
//                 echo('</li>');

                
        
//         $cc++;
//         };
                
                 
                
//                 echo('</ul>');
//                 echo('</article>');
        
//             };


// };
         
    ?>

<article>
            <ul class="habilidades_habilidades">
            
                        
                 
    <?php

$frontend->buclehabilidades();

$backend->buclehabilidades();

    ?>
           
                 
                </ul>
                </article>
    
    </aside>
</div>




<div class="margenvertical"></div>


 <section class="sectionCentral">
    <!-- zona de Proyectos -->
    <section class="Proyectos">
    <h4 class="proyecto_titulo tituloCentral">
        Proyectos</h4>
    <hr>
    <?php
    
    proyecto();
    
        ?> 


         </section>

         </div>



</body>
</html>