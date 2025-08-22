<?php


use App\CsvFileWriter;
use App\RandomProcessor;
use App\XmlFileWriter;

require_once dirname(__DIR__, 1).'/vendor/autoload.php';

$randomProcessorCsv = new RandomProcessor(new CsvFileWriter());

$randomProcessorCsv->process(['name' => 'Araik']);

$randomProcessorSml = new RandomProcessor(new XmlFileWriter());

$randomProcessorSml->process(['last name' => 'Minasov']);



