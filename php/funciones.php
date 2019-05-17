<?php



function certificados() {

    include('php/datosindex3.php');

for($i = 0; $i < count($certificado) ; $i++) { // el count nos permite contar la cantidad de array para que se adapt e a los arrays que tenemos. en este caso la cantidad de certificados

    
$contadorProyectos = count($certificado[$i]) - $Titulonombre_Explicacion;


echo('<article>');
    echo('<ul class="cetificados_certificado">');
    
         
    
    
    if( isset($certificado[$i] [0])) // este if en este echo, lo que permite es que cuando se produzca el bucle, y te avise en el navegador que no hay array para llenar esa linea de texto, entonces con esto la eliminas. ponerle NULL no funciona porque no sabemos si es NULL o no, entonces el isset nos comprueba si existe o no. el ISSET es para que verifique si hay datos o no en el array
    {
                echo('<li class="certificados_certificados_titulo subtituloCentral">');
             echo($certificado[$i] [0]); // aqui ponemos $i porque nos permite analizar todo el array y seleccionar el que queremos con el siguiente[]
            };
            
            if(isset ($certificado[$i] [1])) {
                echo('<p class="certificados_certificados_texto parrafo">');
                echo($certificado[$i] [1]);
                echo('</p>');
                echo('</li>');
            };
            
            echo('</ul>');


            echo('<ul class="certificados_proyecto subtituloCentral">');
            echo('Proyectos ' . $contadorProyectos);
            
            $cc = 0;
            
            while($cc < $contadorProyectos){
                
                //var_dump('TEST' . $contadorProyectos); break; // el break te corta el contenido siguiente para solo ver la variable señalada
   
        echo('<li class="certificados_proyecto_uno parrafo">');
        echo($certificado[$i] [$Titulonombre_Explicacion + $cc]);
        echo('</li>');

$cc++;
};
        
         
        
        echo('</ul>');
        echo('</article>');

    };

    // aqui lo que hicimos fue un include de formularios en idex3 donde tenemos la visualizacion del linkedinpersonal, basicamente fue relacionar con el include funciones y index3, pero antes tenemos que relacionar funciones y datosindex3, y es como si fuera una cadena de relacion de archivo, y en donde en funciones hicimos una function que nos permitio tener el mismo contenido de index3 sin ningun cambio, en el index3 ponemos donde el contenido estaba anteriormente el nombre de la funcion que le hemos dado. En este caso certificados();. Como vemos no hay necesidad de poner en echo los condicionales y los bucles, ya que hacen parte del php y no pasa nada. Tampoco agregamos variables dentro de esta funcion porque ya el contenido de 'certificado' lleva variables.
    
        
         
}

// Las variables de la funcion son locales, osea que pueden tener el mismo nombre y no afectaran las unas con las otras porque son locales, cada una hace parte de su respectivo local


// Habilidades
function habilidad() {

    include('php/datosindex3.php');

    for($i = 0; $i < count($habilidades) ; $i++) { 

    
        $contadorProyectos = count($habilidades[$i]) - $Titulonombre;
        
        
        
        echo('<article>');
            echo('<ul class="habilidades_habilidades">');
            
                 
            
            
            if( isset($habilidades[$i] [0])) 
            {
                        echo('<li class="habilidades_habilidades_titulo subtituloCentral">');
                     echo($habilidades[$i] [0]);
                     echo('</li>');
                    };

                  
            
                    $cc = 0;
                    
                    while($cc < $contadorProyectos){
                        
                    
           
                echo('<li class="habilidades_parrafo">');
                echo($habilidades[$i] [$Titulonombre + $cc]);
                echo('</li>');

                
        
        $cc++;
        };
                
                 
                
                echo('</ul>');
                echo('</article>');
        
            };


};

// Proyectos

function proyecto() {

    include('php/datosindex3.php');


    for($i = 0; $i < count($proyectos); $i++) {


    echo('<article class="proyectos">');

    // numeracion del proyecto
    
    // $numproyecto son la cantidad de proyectos que tenemos, los '0' a la i<quierda son nada. el $i + 1 es para uqe no empiece por 0, el '00' espara enumerar

    
    echo('<h4> Proyecto' . '00' . $cont = $i + 1 . '</h4>');

    echo('<div>');

    // para hacer par e impar con el bucle

    // if(($a % 2) == 1) {
// echo "$a es impar";
// }
// if(($a % 2) == 0) {
   //  echo "$a es par";
    // }// 

    // al final tambien influye el .css para elaborarlo en este caso. ya que en el css esta el atributo de diseño '.derecha' por lo cual al relacionarse con funciones.php hace el bucle de par e impar. en donde los que tienen derecha en CLASS en funciones.php se pondran a la derecha y los que no no.

    $d = $i;
    if(($d % 2) == 1) {
       
            echo('<div class="proyNum derecha">'); // como vemos este en class tiene derecha, y esta en la primera condicion en donde if(($d % 2) == 1) [== 1, es par y == 0 es impar], entonces en la 1condicion el 'proyNUM' tiene 'derecha' en class, mientras que la 2codicion, osea el 'else' no tiene el 'derecha', lo que nos indica que la 1condicion no se cumple en esta, y por eso no fue necesario usar el '== 0' porque ya el class con 'derecha' con reeemplaza esa funcion
        } else { 
            echo('<div class="proyNum">');
        }
        


// imagenes/Logo empresa proyecto

    echo('<img src="' . $proyectos[$i][0] . '" alt="logo">');
    
    echo ('<div class="texto">');

    // creamos un div para el proyectoNUM, para que este titulo no se nos separe de las imagenes al momento de las imagenes

   

    // Bloque de texto
    echo('<p>');
    echo($proyectos [$i][1]);
    echo('</p>');
    echo('<div class="tecnologia">');
    

    // titulo iconos

    echo('<h4 Tecnologia usada: </h4>');
    


    // iconos

    $cc = 0;

    // le ponemos -2, porque no queremos que nos cuente la imagen/logo ni el bloque de texto
    while($cc < count($proyectos [$i]) - 2){

    echo('<h3 class="icono">');

    // como mencionamos anteriormente el $cc + 2, nos permite empezar desde el sub_array de un array principal cuando lo analiza todo
echo($proyectos[$i] [$cc + 2]);

    echo('</h3>');

    $cc++;
    
};
echo('</div>');
        echo('</div>');
        echo('</div>');
   
    

    echo('</article>');
    }
}