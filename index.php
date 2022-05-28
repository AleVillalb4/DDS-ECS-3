<?php

$vehiculo = $_POST['vehiculo'];

switch ($vehiculo) {
    case 'auto':
        echo 'El precio del peaje es $100';
        break;
    case 'moto':
        echo 'El precio del peaje es $50';
        break;
    case 'camion':
        echo 'El precio del peaje es $200';
        break;
    case 'bicicleta':
        echo 'El precio del peaje es $0';
        break;
    case 'monopatin':
        echo 'El precio del peaje es $20';
        break;

    default:
        echo 'El vehículo ingresado no es correcto.';
        break;
}
