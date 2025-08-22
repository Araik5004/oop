<?php

namespace App;

class CsvFileWriter extends FileWriter
{
    public function writeToFile(array $data): bool
    {
        print PHP_EOL.'Writing '.implode(',', $data).' to csv file'.PHP_EOL;

        sleep(1);

        return true;
    }
}