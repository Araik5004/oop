<?php

namespace App\Plans\Pro;

use App\Plans\Plan as MasterAlias;

class Plan extends MasterAlias
{
    private const RATE = 150;
    protected array $features = ['Unlimited emails', 'Unlimited contacts', '24-7 support'];

    public function getRate(): int
    {
        return self::RATE;
    }
}