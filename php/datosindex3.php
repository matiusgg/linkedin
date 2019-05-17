

<?php

// variables *****
// header

// POO:

// TENER CUIDADO: PORQUE al relacionar otro archivo en este por ejemplo y este archivo lo ponemos en otro, en el index entonces hayq ue tener en cuenta, que en el index donde incluimos datos.php ya no estamos en la carpeta php, porque lo incluimos en el index, por lo cual todo el contenido de datos.php ya etsa en index y no en la carpeta php, por lo cual los includes o requires de datos.php ya estarian tambien en index por lo cual cambia ya no seria la misma ruta porque ya no esta en la carpeta PHP PÒR LO CUAL se modifica.

// Antes de introducir con include o required archivo datos.php al index, osea sigue en php

// require_once('../app/Models/Contacto.php');

// Ahora dantos.php esta dentro de index y no de la carpeta php por lo cual se modifica la ruta.

require_once('app/Models/Contacto.php'); // Usamos el requied aqui porque queremos que si hay un minimo error corta la relacion. y no introduzca mas contenido.




// OBJETOs
// Ahora fuera de la clase. Como vemos sin el 'constructor' le estariamos indicando que cada vez que le pongamos un valor a la propiedad tengamos que poner una nueva linea de codigo pepe->, cada vez que queramos ponerle valor a sus propiedades.
// nos inserte un dato dentro de la propiedad

// $pepe = new Contacto();
// $pepe->nombre = 'Pepe';
// $pepe->apellidos = 'Gutierrez Jabala';
// $pepe->email = 'info@pepepepe.com';

// Comprobacion

// echo('pre>');
// print_r($pepe);
// echo('</pre>');


// Y si lo hicieramos con el contructor, entonces tendriamos que definir los valores o datos de las porpiedades que llamamos en el constructor dentro de los parametros del objetos

//$pepe = new Contacto('Pepe', 'Gutierrez Jabala');

// COmprobacion

// echo('<pre>');
// print_r($pepe);
// echo('</pre>');

// OTro objeto

$juan = new Contacto('Juan', 'Gutierrez Jabala', 'jose@gg.com', '464564566', 'linekdin.com', 'twitter.com');
$juan->subtitulo = 'FrontEn & backEnd';

// echo('<pre>');
// print_r($juan);
// echo('</pre>');



// Estructural
// este logo con este codigo nos permite 
// $logo = 'MG';// strtoupper( substr($nombre, 0, 1). substr($apellido, 0, 1));
// $nombre = 'Mateo g';
// $subtitulo = 'Estudiante';
// $contacto = [
//     'mail' => 'holaxd@gmail.com',
//     'movil' => ' +34 000 000 000',
//     'linkedin' => 'http://www.linkedin.com/hkgsdjhs',
//     'twitter' => '@papu'
// ];


// section resumen

$resumen_titulo = 'Resumen de mi carrera';

$resumen_parrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
Quam labore excepturi est doloribus rem, 
officiis voluptatem harum inventore nemo quae ad eum eos sunt saepe distinctio magni eius nobis corporis!
Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Libero reiciendis enim, modi dignissimos amet eum,
 inventore minima sit excepturi, voluptatum perspiciatis maiores!
 Earum odio voluptates alias neque corporis excepturi dolores!';






// section certificados

$Titulonombre_Explicacion = 2; // para certificados


// Datos certificado

$certificado = [
    [
        'PHP desarollador',
        'Dese hace 25 años desde el mundo php',
        'no se que escribir xd',
        'Lorem, ipsum dolor sit amet consectetur adipisicing elit.' ,
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
    ],
    [
        'Javascript Desarrollador',
        'lorem no se quien eres',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sit necessitatibus'
    ],
    [
        'FrontEnd',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius unde quod fugiat laudantium sint quaerat! Doloremque, neque molestiae? Error',
        'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, incidu'
    ]
    ];


    $Titulonombre = 1; // para habilidades

    $habilidades = [


        [
            'Backend',
            'MysQL',
            'PHP',
            'PHYTON' 
        

        ],
        [
            'Frontend',
            'JavaScript',
            'CSS',
            'SASS',
            'HTLM5'
        ],
        [
            'Frameworks',
            'DJANCO',
            'EXPRESS',
            'LARAVEL',
            'JavaScript'
        ]
        ];


        $Titulonombre = 1; // para habilidades

    $proyectos = [


        [
            'img/logos/logo01.jpg',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quaerat blanditiis delectus doloribus officia assumenda! Tempore provident minus aperiam excepturi esse nobis. Nostrum et ex quae tempora nihil labore ',
            'HTML',
            'CSS',
            'JS',
            'PHP' 
        ],
        [
            'img/logos/logo02.jpg',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quaerat blanditiis delectus doloribus officia assumenda! Tempore provident minus aperiam excepturi esse nobis. Nostrum et ex quae tempora nihil labore ',
            'HTML',
            'CSS',
            'JS',
            'PHP' 
        ],
        [
            'img/logos/logo03.png',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quaerat blanditiis delectus doloribus officia assumenda! Tempore provident minus aperiam excepturi esse nobis. Nostrum et ex quae tempora nihil labore ',
            'HTML',
            'CSS',
            'JS',
            'PHP' 
        ]
        ];







