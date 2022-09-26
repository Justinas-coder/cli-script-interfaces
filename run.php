<?php



function count_by_price_range($price1, $price2)
{
    if($price1 < $price2){
        $json = '[{
    "offerId": 123,
    "productTitle": "Coffee machine",
    "vendorId": 35,
    "price": 390.4,
    "numberInStock": 5
    },
    {
    "offerId": 124,
    "productTitle": "Napkins",
    "vendorId": 35,
    "price": 15.5,
    "numberInStock": 15
    },
    {
    "offerId": 125,
    "productTitle": "Chair",
    "vendorId": 84,
    "price": 230.0,
    "numberInStock": 0
    }]';

        $arr = json_decode($json, JSON_OBJECT_AS_ARRAY);

        print_r($arr);

        $var = 0;

        foreach ( $arr as $obj ){
            if ( ($obj['price'] >= $price1 && $obj['price'] <= $price2) && ($obj['numberInStock'] > 0)) {

                $var++;
            }
        }

        echo $var;
        echo ".\n";

    } else {

        echo "Price range is incorrect";
        echo ".\n";
    }


}


function count_by_vendor_id($vendorId)
{


    $json = '[{
    "offerId": 123,
    "productTitle": "Coffee machine",
    "vendorId": 35,
    "price": 390.4,
    "numberInStock": 5
    },
    {
    "offerId": 124,
    "productTitle": "Napkins",
    "vendorId": 35,
    "price": 15.5,
    "numberInStock": 15
    },
    {
    "offerId": 125,
    "productTitle": "Chair",
    "vendorId": 84,
    "price": 230.0,
    "numberInStock": 0
    }]';

    $arr = json_decode($json, JSON_OBJECT_AS_ARRAY);

    $var = 0;

    foreach ( $arr as $obj ){
        if (($obj['vendorId'] = $vendorId )&& $obj['numberInStock'] > 0) {
            $var++;
        }
    }

    echo $var;
    echo ".\n";
}