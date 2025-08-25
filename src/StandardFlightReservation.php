<?php

namespace App;

class StandardFlightReservation implements FlightReservation
{
    public function calculatePrice(): int
    {
        return 300;
    }
}