<?php

namespace App\Plans\Free;

use App\Plans\Plan as MasterAlias;

class Plan extends MasterAlias
{
    private const RATE = 0;
    protected array $features = ['50 emails', '50 contacts', 'No support'];

    public function getRate(): int
    {
        return self::RATE;
    }
}