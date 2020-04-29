<?php 

// interfaces 

interface FlightTickets {
    public function payNow();
}

interface LoginFirst {
    public function loginFirst();
}

interface Discount {
    public function discount();
}

class PayPal implements FlightTickets, LoginFirst {
    public function payNow() {}
    public function loginFirst() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
        echo 'payPal';
    }
}

class BankTransfer extends PayPal implements FlightTickets, LoginFirst {
    public function registerFirst(){}
    public function paymentProcess() {
        $this->registerFirst();
        $this->loginFirst();
        echo 'BankTrasnfer';
        
    }
}

class Visa implements FlightTickets {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
        echo 'Visa';
    }
}

class MasterCard extends Visa implements FlightTickets, Discount {
    public function discount() {}
    public function paymentProcess() {
        $this->discount();
        echo ' masterCard';
    }
}

class Cash implements FlightTickets{
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
        echo ' cash';
    }
}


class payTicket {
    public function pay(FlightTickets $paymentSystem){
        $paymentSystem->paymentProcess();
    }
}

echo '<h1>You have successfully paid with:</h1>';
 $paymentSystem = new BankTransfer();
 $payticket = new payTicket();
 echo $payticket->pay($paymentSystem);



