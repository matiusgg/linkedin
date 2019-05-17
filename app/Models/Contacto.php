<?php

// POO

// Clase de Contacto: Es el molde de los futuros objetos de contactos.git remote add origin https://github.com/matiusgg/linkedin.git

class Contacto{
    // Porpiedades clase Contacto

    public $nombre;
    public $apellido;
    public $subtitulo = 'Desarrollo';
    // S alguien no nos popne alguna inbformacion de una propiedad al crear el objeto desde aqui desde las porpiedades podemos darle valor para indicarle que se haga un molde, un predeterminado con este valor, y ya si al crear el objeto no se pone un valor a la propiedad, nos saldra esto por predefinido
    public $mail = 'No incluido';
    public $movil = 'No incluido';
    public $linkedin = 'No incluido';
    public $twitter = 'No incluido';
    
    // CONTRUCTOR: NO ES UN COMPORTAMIENTO, va despues de propiedades. 
    // Aqui la diferencia con los comportaminetos es que aqui si usamos parametros, porque cuando hagamos el objeto al poner la porpiedad igual que el parametro del contructor, nos permitira despues que al crear el objeto, dentro de () osea los parametros del objetos se relacionaran con los parametros del contructor por lo cual podemos poner los valores de las propiedades directamente ahi.

    // TIP: Si queremos poner todos las porpiedades para que sean iguales a los parametros de contruccion para al crear objetos pongamos los valores dentro de los parametros del objeto. Hay q ue tener en cuenta que si no ponemos todos, los datos con este medio nos petara porque al hacerlo asi, nos exigira que pongamos todos los datos de contruct en el objeto, osea no te puedes dejar ninguno. Ademas no podemos ponerle valor o datos a las propiedades del objeto fuera de los paraqmetros de la funcion, ya que lo estariamos repitiendo, lo cual nos daria un espacio en blanco. Lo ideal es que en el constructor no pongamos todas las propiedades, ya que tambien podriamos usar otras propiedades para algo.
 public function __construct($nombre, $apellido, $mail, $movil, $linkedin, $twitter){

        // Como vemos lo que hicimos fue que el parametro de 'contructor' sea igual a la propiedad, la porpiedad la pusimos con $this
       $this -> nombre = $nombre;
      $this -> apellido = $apellido;
      $this -> mail = $mail;
      $this -> movil = $movil;
      $this -> linkedin = $linkedin;
      $this -> twitter = $twitter;
    
      
 }
    // Comportamientos de la Clase Contacto

    public function logo() { // Sino tuviera 'public' entonces seria una funcion normal y no un comportamiento / metodo. Y tendriamos que poner parametros, al ser ya un metodo, nos ahorramos de poner parametros porque quien cunplirir esta tarea es $this->, el cual te va a buscar las porpiedades para meterlas dentro de este metodo. Lo que nos permite usar las propiedades. En cambio si no le pusieramos $this-> estariamos llamando una variable mas no una propiedad de la clase

        // definimos substr para las letraS iniciales

        $letranombre = substr($this -> nombre, 0, 1);
        $letraapellido = substr($this -> apellido, 0, 1);
       

        // Si queremos que nos muestre el resultado de la funcion. REcordemos que tenemos que poner RETURN

        // strtoupper para poner estas letras iniciales en mayuscula

        return strtoupper($letranombre . $letraapellido);

    }

}

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

// $pepe = new Contacto('Pepe', 'Gutierrez Jabala');

// COmprobacion

// echo('pre>');
// print_r($pepe);
// echo('</pre>');

// y si creamos un objeto dentro del acrhivo de CLASE


?>