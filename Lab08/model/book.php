<?php
    include_once('database.php');
    class BOOK extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllFlights()
        {
            $this->SetQuery("SELECT * from flights");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function insertPassengers($name,$idFlights){
            $query="INSERT INTO `passengers`(`name`, `flight_id`) VALUES ('".$name."','".$idFlights."') ";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        function insertFlights($from,$to,$duration){
            $query="INSERT INTO `flights`( `origin`, `destination`, `duration`) VALUES ('".$from."','".$to."','".$duration."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
    }
?>