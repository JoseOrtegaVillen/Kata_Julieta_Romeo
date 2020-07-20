<?php

class Objetos
{

    private $mensaje;
    private $carta;
    private $veneno;
    private $somnifero;

    private function valueMensaje()
    {
        $mensaje = 'Querido Romeo, esta noche ... y así escaparemos felizmente' ;
    }

    private function valueCarta()
    {
        $carta = new Carta();
        $getMensaje = $mensaje;

        return $mensaje;
    }

    private function valueVeneno()
    {
        $veneno = new Veneno();
    }

    private function valueSomnifero()
    {
        $somnifero = new Somnifero();
    }

}

