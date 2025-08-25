<?php

namespace App\Plans;

use Exception;

class PlanFactory
{
    /**
     * @throws Exception
     */
    public function createPlan(string $plane = 'free'): Plan
    {
        $planeName = 'App\\Plans\\'.ucfirst($plane).'\\Plan';

        if (!class_exists($planeName)) {
            throw new Exception('Plane not found: '.$planeName);
        }

        return new $planeName();
    }
}