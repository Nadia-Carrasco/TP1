<?php
class Libro{
    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $nombreAutor;
    private $apellidoAutor;

    public function __construct($isbn,$titulo,$anioEdicion,$editorial,$nombreAutor,$apellidoAutor){
        $this->isbn=$isbn;
        $this->titulo=$titulo;
        $this->anioEdicion=$anioEdicion;
        $this->editorial=$editorial;
        $this->nombreAutor=$nombreAutor;
        $this->apellidoAutor=$apellidoAutor;
    }
    public function getIsbn(){
       return $this->isbn;
    }
    public function setIsbn($isbn){
        $this->isbn=$isbn;
    }

    public function getTitulo(){
       return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }

    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function setAnioEdicion($anioEdicion){
        $this->anioEdicion=$anioEdicion;
    }

    public function getEditorial(){
        return $this->editorial;
    }
    public function setEditorial($editorial){
        $this->editorial=$editorial;
    }

    public function getNombreAutor(){
        return $this->nombreAutor;
    }
    public function setNombreAutor($nombreAutor){
        $this->nombreAutor=$nombreAutor;
    }

    public function getApellidoAutor(){
        return $this->apellidoAutor;
    }
    public function setApellidoAutor($apellidoAutor){
        $this->apellidoAutor=$apellidoAutor;
    }

    public function __toString(){
        return "ISBN: " . $this->getIsbn() . "\n" . "Título: " . $this->getTitulo() . "\n" . "Año Editorial: " . $this->getEditorial() . "\n" . "Nombre del Autor: " . getNombreAutor() . "\n". "Apellido del Autor: " . getApellidoAutor();
    }
    public function perteneceEditorial($peditorial){
        $editorial=$this->getEditorial();
        if($peditorial==$editorial){
            $pertence=true;
        }else{
            $pertence=false;
        }
        return $pertence;
    }
    public function aniosdesdeEdicion($actual){
        $anioEdicion=$this->getAnioEdicion();
        $totalAnios=$actual-$anioEdicion;
        return $totalAnios;
    }
}
