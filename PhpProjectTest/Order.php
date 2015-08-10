<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author amm
 */
class Order {
    //put your code here
//    private $id;
    private $pizza;
    private $size;
    private $qty;
    
//    public function __construct() {}
    
    public function __construct() {}


//    public function setId($arg) {
//        $this->id = $arg;
//    }
//    public function getId() {
//        return $this->id;
//    }
    public function setPizza($arg) {
        $this->pizza = $arg;
    }
    public function getPizza() {
        return $this->pizza;
    }
    public function setSize($arg) {
        $this->size = $arg;
    }
    public function getSize() {
        return $this->size;
    }
    public function setQty($arg) {
        $this->qty = $arg;
    }
    public function getQty() {
        return $this->qty;
    }
}

?>
