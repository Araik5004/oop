<?php

namespace App;

class NewCsvFileWriter implements NewFileWriter
{
    public function write($data)
    {
        print PHP_EOL.'Writing '.implode(',', $data).' to csv file'.PHP_EOL;

        sleep(1);
    }
}