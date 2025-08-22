<?php

require_once dirname(__DIR__, 1).'/vendor/autoload.php';

$newCsvFileWriter = new \App\NewCsvFileWriter();
$filterWriter = new \App\NewFilterWriterAdapter($newCsvFileWriter);

$processor = new \App\RandomProcessor($filterWriter);
$processor->process(['foo' => 'bar']);



