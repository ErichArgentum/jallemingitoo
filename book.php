<?php 


class Book {

    protected $title;
    protected $inStock = true;
    public $stocksaldo = 0;

    public function __constrcut($t) {
        $this->title = $t;


    }
    public function getStocksaldo() {
        return $this->stockSaldo;


    }

    public function setStcokSaldo($v){
    
        if ( $v < 0 ) {
            throw new Exception('Value should be negative!');
        } else {
        $this->stockSaldo = $v;

    }
    public function soldOut() {
        $this->inStock = false;

    }
}

$book =new Book('Kalevipoeg');
$book2 = new Book('Rehepapp');



$book->stockSaldo(-5);
$book2->soldOut();
//$book2->inStock = true;

var_dump($book);
var_dump($book2);
var_dump($book->getStocksaldo());

    echo "\n";