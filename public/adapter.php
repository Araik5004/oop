<?php

use App\NewCsvFileWriter;
use App\NewFileWriterAdapter;
use App\RandomProcessor;

require_once dirname(__DIR__, 1).'/vendor/autoload.php';

$newCsvFileWriter = new NewCsvFileWriter();
$fileWriter = new NewFileWriterAdapter($newCsvFileWriter);

$processor = new RandomProcessor($fileWriter);
$processor->process(['foo' => 'bar']);