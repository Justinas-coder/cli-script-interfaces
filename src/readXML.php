<?php

use Interfaces\readerInterface;

class readXML implements readerInterface
{
    public function read(){

        $handle = fopen('./localData/testingData.xml','r');

        $xml = simplexml_load_string($handle);

        $json = json_encode($xml);

        $array = json_decode($json,TRUE);

        print_r($array);

    }

}


