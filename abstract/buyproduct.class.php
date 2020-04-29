<?php 

class BuyProduct extends Visa {
    public function getPayment() {
        return $this->visaPayment();
    }
}

class MakePayment extends MasterCard {
    public function getPayment() {
        return $this->masterCardPayment();
    }
}

class SetPayment extends PayPal {
    public function getPayment() {
        return $this->paypalPayment();
    }
}