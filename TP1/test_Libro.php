<?php 
include "Libro.php";
$libro1=new Libro(1452879456245,"Mundo",2003,"Merlín","Raquel","Gómez");
$libro2=new Libro(1255636789521,"Venom",2004,"Josh", "Marcos","Hernan");
$libro3=new Libro(1255636449521,"Principito",2004,"Josh", "Marcos","Hernan");
$libro4=new Libro(1255636449521,"Pepe",2004,"Josh", "Marcos","Hernan");
$coleccionLibros=[];

array_push($coleccionLibros,$libro1,$libro2,$libro3,$libro4);
//Método para verificar si un libro se encuentra en una coleccion
function iguales($plibro,$parreglo){
    $cant=count($parreglo);
    $i=0;
    while($i<$cant && $plibro->getTitulo()!=$parreglo[$i]->getTitulo()){
        $i++;
    }
    if($i==$cant){
        echo "No se encontró el libro ";
    }else{
        echo "Se encontró el libro ";
    }
}
//Método que retorna un arreglo asoc. con todos los libros publicados por la editorial dada
function libroEditoriales($arregloLibros,$peditorial){
    $arreglo=[];
    foreach ($arregloLibros as $libro){
        $editorialLibro=$libro->perteneceEditorial($peditorial);
        if($editorialLibro){
            array_push($arreglo, $libro);
        }
    }
    return $arreglo;
}
function aniosEdicion($libros){
    echo "Ingrese Año actual: ";
    $anios=trim(fgets(STDIN));
    $totalAnios=$libros->aniosDesdeEdicion($anios);
    echo "Años desde su edición: " . $totalAnios;
}
//ejemplos de muestra:
iguales($libro4,$coleccionLibros);
print_r(libroEditoriales($coleccionLibros,"Josh"));
echo aniosEdicion($libro4);

