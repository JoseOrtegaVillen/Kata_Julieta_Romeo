<?php
 
use Objectos;
use Escenarios;

Class game extends Personajes
{
    public function irDeFiesta() 
    {   
        $desplazamiento = new desplazamiento();
        $romeo = $desplazamiento;
        
        return $desplazamiento;
    }

    public function hablar()
    {
        $ConversacionJulieta = $this->julieta;
        $ConversacionJulieta = 'Hola que tal?';
        print $ConversacionJulieta;

        $ConversacionRomeo = $this->romeo;
        $ConversacionRomeo = 'Bien y tu? ...';
        print $ConversacionRomeo;

    }

    private function escribirCarta()
    {
        $getCarta = getCarta();
        $julieta = $this->Objetos->$carta;

        return $this->Objetos->$carta;
    }

    private function enviarCarta()
    {
       $sendCarta = new sendCarta();
       $pequeñoPadawan = $this->$getCarta;

       return $getCarta;

    }

    private function recibirCarta()
    {
       $recibirCarta = new recibirCarta();
       if ($recibirCarta = True)
            $romeo = $this->$getCarta;
            $result = $this->Escensarios->paraiso;

       if ($recibirCarta = False)
            $romeo = null;
            $result = $this->Escensarios->habitacion;
        
            return $romeo;
    }


    private function irAHabitacion()
    {
        $desplazamiento = new desplazamiento();
        if ($this->Escenario = $habitacion)
            $romeo = $desplazamiento;         

            return $desplazamiento;
    }

    private function irAParaiso()
    {
        if ($this->Escenario = $paraiso)
        $romeo = $desplazamiento;         

        return $desplazamiento;
    }

    private function dormir()
    {
        $getSominfero = new GetSominfero();
        $julieta = $this->Objetos->$sominfero;

        return $julieta;
    }

    private function morir()
    {
        $getVeneno = new GetVeneno();
        $romeo = $this->Objetos->$veneno;

        return $romeo;
    }
}