<?php

require_once 'modelo/clasePartido.php';
require_once 'modelo/claseArbitro.php';
require_once 'modelo/claseDirectorTecnico.php';
require_once 'modelo/claseEquipo.php';
require_once 'modelo/claseJugador.php';

#Instanciar clase Arbitro
$arb = new Arbitro();
$arb->Id = 1;
$arb->Nombre = 'Patricio';
$arb->Apellido = 'Lostau';
$arb->Gremio = 'AAA';

#Instanciar clase Jugador
$lj1 = new Jugador();
$lj1->Id = 1;
$lj1->Nombre = 'Frank';
$lj1->Apellido = 'Fabra';

$lj2 = new Jugador();
$lj2->Id = 1;
$lj2->Nombre = 'Lisandro';
$lj2->Apellido = 'Lopez';

#instanciar clase Director Tecnico
$dt1 = new DirectorTecnico();
$dt1->Id = 1;
$dt1->Nombre = 'Jorge';
$dt1->Apellido = 'Almiron';

$dt2 = new DirectorTecnico();
$dt2->Id = 1;
$dt2->Nombre = 'Israel';
$dt2->Apellido = 'Damonte';

#Instanciar clase Equipo
$e1 = new Equipo();
$e1->Id = 1;
$e1->NombreEquipo = 'Club Atletico Boca Juniors';
$e1->ListJugadores[] = $lj1;
$e1->DirectorTecnico = $dt1;

$e2 = new Equipo();
$e2->Id = 1;
$e2->NombreEquipo = 'Club Atletico Sarmiento';
$e2->ListJugadores[] = $lj2;
$e2->DirectorTecnico = $dt2;

#Instanciar clase Partido
$Part = new Partido();
$Part->Id = 1;
$Part->EquipoLocal = $e1;
$Part->EquipoVisitante = $e2;
$Part->FechaPartido = 'Domingo, 2 de julio de 2023';
$Part->Arbitro = $arb;
$Part->MostrarDatos();