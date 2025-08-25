<?php

use App\Plans\PlanFactory;

require_once dirname(__DIR__, 1).'/vendor/autoload.php';

$planeFactory = new PlanFactory();

$plane = $planeFactory->createPlan();

echo $plane->getRate();