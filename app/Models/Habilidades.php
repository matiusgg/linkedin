<?php


class habilidad {

// PROPIEDADES

// Se puede hacer con arrays, pero pensemos que es un molde, por lo cual los valores o datos no son definidos. Entonces intentar que estosea el molde y en el objeto sea donde coloquemos los valores.
// En este caso hariamos un molde donde se tenga 'titulo' y 'las habilidades', para podemos colocarla en index cuando creemos el objeto donde queramos y con los valores que pusimos. IMPORTANTE: LA CLASE AL FINAL ES UN MOLDE, EN LOS OBJETOS ES DONDE IRIAN LOS VALORES.


public $titulohabilidades;
public $habilidades01;
public $habilidades02;
public $habilidades03;
public $habilidades04;
public $habilidades05;
public $habilidades06;

// CONSTRUCTOR

public function __construct($titulohabilidades){
    $this->titulohabilidades = $titulohabilidades;


 
 }

// COMPORTAMIENTOS


public function buclehabilidades() {

    // la propiedad $habilidad0, tiene que ser verdadero porque es la 'base' de las porpiedades habilidades. por lo cual debe ser diferente de "" para que reconozca que si esta vacio, no haga el bucle.

    // COn FOR: Que no nos convendria por tener muchos datos.

    // En la 2 condicion del bucle colocamos lo anteriormente mencionado donde $this para llamar la propiedad, habilidades0 como la base y $i para que cuando haga el bucle le sume el numero. y el != "" para que si esta vacio, no haga el bucle.

    // en este caso nos viene bien un foreach por el tema de que tenemos muchos valores en habilidad el foreach lo usamos para que el nombre de la propiedad sea la llave y el valor se lo definimos arriba.

    // Aqui le indicamos que nos saque el titulo, por lo cual momento de crear los objetos, el luger () lo dejamos vacio, ya que el titulo lo pusimos aqui
    //echo('<h4>' . $this->tituloHabilidades . '</h4>');

    echo('<li class="habilidades_habilidades_titulo subtituloCentral">');
    echo('<h4>' . $this->titulohabilidades . '</h4>');
    echo('</li>');

    foreach($this AS $key => $valor){

        // el key seria el nombre de la propiedad y $valor, el valor que le demos en el objeto
        if($valor != "" && $key != 'titulohabilidades'){
            echo('<li class="habilidades_parrafo">');
           echo( $valor . '<br>');
           echo('</li>');
    
        }
        

    }

    

//  for($i = 1; $i < $this->habilidades0 . $i != ""; $i++) {

//     echo( $this->habilidades0 . $i );

//  }

}
 
 }

?>