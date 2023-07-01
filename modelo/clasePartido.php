<?php

class Partido
{
    public $Id;
    public $EquipoLocal;
    public $EquipoVisitante;
    public $FechaPartido;
    public $Arbitro;

    public function MostrarDatos()
    {
        echo '<hr>';
        echo '<--- PARTIDO ---> <br>';
        echo 'ID: ' . $this->Id . '<br>';
        echo 'Fecha Partido: ' . $this->FechaPartido . '<br> <hr>';

        echo '<--- ARBITRO ---> <br>';
        echo 'Id del arbitro: ' . $this->Arbitro->Id . '<br>';
        echo 'Nombre del arbitro: ' . $this->Arbitro->Nombre . '<br>';
        echo 'Apellido del arbitro: ' . $this->Arbitro->Apellido . '<br>';
        echo 'Gremio del arbitro: ' . $this->Arbitro->Gremio . '<br> <hr>';

        echo '<--- EQUIPO LOCAL ---> <br>';
        echo 'ID: ' . $this->EquipoLocal->Id . '<br>';
        echo 'Nombre del Equipo: ' . $this->EquipoLocal->NombreEquipo . '<br> <br>';

        echo '<--- DT DEL EQUIPO: ----> <br>';
        echo 'ID del DT: ' . $this->EquipoLocal->DirectorTecnico->Id . '<br>';
        echo 'Nombre del DT: ' . $this->EquipoLocal->DirectorTecnico->Nombre . '<br>';
        echo 'Apellido del DT: ' . $this->EquipoLocal->DirectorTecnico->Apellido . '<br> <br>';

        echo '<--- LISTA DE JUGADORES DEL EQUIPO LOCAL ---> <br>';
        foreach ($this->EquipoLocal->ListJugadores as $lj) {
            echo 'ID del jugador: ' . $lj->Id . '<br>';
            echo 'Nombre del jugador: ' . $lj->Nombre . '<br>';
            echo 'Apellido del jugador: ' . $lj->Apellido . '<br>';
        }
        echo '<hr> <hr>';
        echo '<--- EQUIPO VISITANTE ---> <br>';

        echo 'ID: ' . $this->EquipoVisitante->Id . '<br>';
        echo 'Nombre del Equipo: ' . $this->EquipoVisitante->NombreEquipo . '<br> <br>';

        echo '<--- DT DEL EQUIPO: ----> <br>';
        echo 'ID del DT: ' . $this->EquipoVisitante->DirectorTecnico->Id . '<br>';
        echo 'Nombre del DT: ' . $this->EquipoVisitante->DirectorTecnico->Nombre . '<br>';
        echo 'Apellido del DT: ' . $this->EquipoVisitante->DirectorTecnico->Apellido . '<br> <br>';

        echo '<--- LISTA DE JUGADORES DEL EQUIPO VISITANTE ---> <br>';
        foreach ($this->EquipoVisitante->ListJugadores as $ljj) {
            echo 'ID del jugador: ' . $ljj->Id . '<br>';
            echo 'Nombre del jugador: ' . $ljj->Nombre . '<br>';
            echo 'Apellido del jugador: ' . $ljj->Apellido . '<br> <hr>';
        }
    }
}