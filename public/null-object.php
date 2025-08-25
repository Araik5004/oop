<?php


use App\NullFilterWriter;
use App\RandomProcessor;

require_once dirname(__DIR__, 1).'/vendor/autoload.php';

$filterWriter = new NullFilterWriter();

$randomProcessorCsv = new RandomProcessor($filterWriter);

$randomProcessorCsv->process(['name' => 'Araik']);



