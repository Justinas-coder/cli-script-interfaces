<?php


use Interfaces\readerInterface;

class readJSON implements readerInterface
{
    public function read(){

$json = file_get_contents('./localData/testingData.json', true);

$json_data = json_decode($json,true);

print_r($json_data);

    }

}