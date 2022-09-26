<?php

use Interfaces\readerInterface;

class readCSV implements readerInterface
{
    public function read(){

        ini_set('auto_detect_line_endings',TRUE);

        $handle = fopen('./localData/testingData.json','r');

        while ( ($dataJSON = fgetcsv($handle) ) !== FALSE ) {
            print_r($dataJSON);
        }
        ini_set('auto_detect_line_endings',FALSE);

    }

}