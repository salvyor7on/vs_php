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
                $this->significado = "Sabiduría, intuición, misterio, conocimiento interior";
                break;
            case 'La Emperatriz':
                $this->significado = "Abundancia, fertilidad, creatividad, naturaleza";
                break;
            case 'El Emperador':
                $this->significado = "Autoridad, estructura, control, liderazgo";
                break;
            case 'El Hierofante':
                $this->significado = "Tradición, espiritualidad, conformidad, instituciones";
                break;
            case 'Los Enamorados':
                $this->significado = "Amor, relaciones, armonía, decisiones";
                break;
            case 'El Carro':
                $this->significado = "Determinación, éxito, control, voluntad";
                break;
            case 'La Justicia':
                $this->significado = "Equilibrio, justicia, verdad, ley";
                break;
            case 'El Ermitaño':
                $this->significado = "Introspección, soledad, guía interior, reflexión";
                break;
            case 'La Rueda de la Fortuna':
                $this->significado = "Cambio, destino, ciclos, suerte";
                break;
            case 'La Fuerza':
                $this->significado = "Coraje, fuerza interior, paciencia, control";
                break;
            case 'El Colgado':
                $this->significado = "Sacrificio, espera, cambio de perspectiva, reflexión";
                break;
            case 'La Muerte':
                $this->significado = "Transformación, fin, renovación, cambio";
                break;
            case 'La Templanza':
                $this->significado = "Equilibrio, moderación, paciencia, propósito";
                break;
            case 'El Diablo':
                $this->significado = "Apegos, restricciones, materialismo, tentación";
                break;
            case 'La Torre':
                $this->significado = "Ruina, crisis, revelación, cambio súbito";
                break;
            case 'La Estrella':
                $this->significado = "Esperanza, inspiración, renovación, espiritualidad";
                break;
            case 'La Luna':
                $this->significado = "Ilusiones, miedo, subconsciente, confusión";
                break;
            case 'El Sol':
                $this->significado = "Éxito, vitalidad, alegría, claridad";
                break;
            case 'El Juicio':
                $this->significado = "Renacimiento, juicio, evaluación, despertar";
                break;
            case 'El Mundo':
                $this->significado = "Cumplimiento, integración, logro, finalización";
                break;
            default:
                $this->significado = "Esa carta no existe";
                break;
        }        
        return $this->significado;
    }
}