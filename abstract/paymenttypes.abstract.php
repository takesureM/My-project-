<?php 

// Abstract 

abstract class Visa {
    public function visaPayment(){
        return 'Perform A Payment Using A Visa'.'<br>';
    }

    abstract public function getPayment();
}

abstract class MasterCard {
    public function masterCardPayment(){
        return 'Perform A Payment Using MasterCard'.'<br>';
    }

    abstract public function getPayment();
}


abstract class PayPal {
    public function paypalPayment(){
        return 'Perform A Payment Using PayPal';
    }

    abstract public function getPayment();
}