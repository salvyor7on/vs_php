<?php

require_once("conf/Master.php");

class tarot extends master {
    private string $carta;
    private string $significado;

    public function __construct(string $carta) {
        parent::getBootstrap();
        $this->carta = $carta;
    }

    public function getCarta() {
        switch ($this->carta) {
            case 'El Tonto':
                $this->significado = "Nuevos comienzos, libertad, aventura, imprudencia";
                break;
            case 'El Mago':
                $this->significado = "Habilidad, concentración, poder, acción";
                break;
            case 'La Sacerdotisa':
                $this->significado = "Sabiduría, Intuición, Misterio, Conocimiento interior";
                break;
            default:
                $this->significado = "Esa carta no existe";
                break;
        }

        return $this->significado;
    }
}