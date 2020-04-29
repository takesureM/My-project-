<?php 

class Flight{
    private $Name;
    private $SecondName;
    private $TicketNumber;
    private $Departure;
    private $Destination;

    // public static $Fee = 1900;

    public function __construct($Name, $SecondName, $TicketNumber, $Departure, $Destination){
        $this->Name = $Name;
        $this->SecondName = $SecondName;
        $this->TicketNumber = $TicketNumber;
        $this->Departure = $Departure;
        $this->Destination = $Destination;
        // self::Fee();

    }

     // get and setter methods 
     public function setName($Name){
         $this->Name = $Name;
     }

     public function getName(){
        return $this->Name;
    }

     
    public function setSecondName($SecondName){
        $this->SecondName = $SecondName;
    }

    public function getSecondName(){
       return $this->SecondName;
   }

   public function setTicketNumber($TicketNumber){
    $this->TicketNumber = $TicketNumber;
    }

    public function getTicketNumber(){
       return $this->TicketNumber;
    }

    public function setDeparture($Departure){
        $this->Departure = $Departure;
    }

    public function getDeparture(){
       return $this->Departure;
   }

   public function setDestination($Destination){
    $this->Destination = $Destination;
    }

    public function getDestination(){
       return $this->Destination;
    }
   
}

class Seats extends Flight{
    private $SeatNumber;

    public function __construct($Name, $SecondName, $TicketNumber, $Departure, $Destination,$SeatNumber){
        parent::__construct($Name, $SecondName, $TicketNumber, $Departure, $Destination, $SeatNumber);
        $this->SeatNumber = $SeatNumber;
    }

    public function setSeatNumber($SeatNumber){
        $this->SeatNumber = $SeatNumber ;
    }

    public function getSeatNumber(){
        return $this->SeatNumber;
    }

    
}

class Food extends Flight{
    private $Food;

    public function __construct($Name, $SecondName, $TicketNumber, $Departure, $Destination,$SeatNumber,$Food){
        parent::__construct($Name, $SecondName, $TicketNumber, $Departure, $Destination, $SeatNumber,$Food);
        $this->Food = $Food;
    }

    public function setFood($Food){
        $this->Food = $Food ;
    }

    public function getFood(){
        return $this->Food;
    }
}

class Zone extends Flight{
    private $Zone;

    public function __construct($Name, $SecondName, $TicketNumber, $Departure, $Destination,$SeatNumber,$Food, $Zone){
        parent::__construct($Name, $SecondName, $TicketNumber, $Departure, $Destination, $SeatNumber,$Food, $Zone);
        $this->Food = $Zone;
    }

    public function setZone($Zone){
        $this->Zone = $Zone ;
    }

    public function getZone(){
        return $this->Zone;
    }
}
