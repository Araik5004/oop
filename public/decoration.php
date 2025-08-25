<?php

use App\ExtraLegroom;
use App\HoldLuggage;
use App\StandardFlightReservation;

require_once dirname(__DIR__, 1).'/vendor/autoload.php';

$reservation = new StandardFlightReservation();
$reservation = new ExtraLegroom($reservation);
$reservation = new HoldLuggage($reservation);

echo $reservation->calculatePrice();
