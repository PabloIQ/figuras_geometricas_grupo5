<?php
include_once 'clase_punto.php';
abstract class FiguraGeometrica {
    protected $nombre;

    public function __construct($nombre) {
        $this-> nombre = $nombre;
    }

    abstract public function area();

    abstract public function perimetro();
}

?>