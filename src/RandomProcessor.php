<?php

namespace App;

use Exception;

class RandomProcessor
{

    private FileWriter $fileWriter;

    public function __construct(FileWriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    /** @throws Exception */
    public function process(array $data)
    {
        $result = $this->fileWriter->writeToFile($data);

        if ( ! $result) {
            throw new Exception('Error writing to file');
        }

        print '<br>'.'Continue processing...'.'<br>';

        return true;
    }
}