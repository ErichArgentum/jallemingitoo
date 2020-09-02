<?php


class Phone {

    public $version;
    public $inStock = true;
    
    public function __construct($v) {
        $this->version = $v;

    }


}

$phone = new Phone('Iphone 8');
$phone2 = new Phone('Samsung E20A');


var_dump($phone->version);
var_dump($phone2->version);


    echo "\n";
