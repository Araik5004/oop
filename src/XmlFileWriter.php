<?php

namespace App;

class XmlFileWriter extends FileWriter
{

    public function writeToFile(array $data): bool
    {
        print PHP_EOL.'Writing '.implode(',', $data).' to xml file'.PHP_EOL;

        sleep(1);

        return true;
    }
}