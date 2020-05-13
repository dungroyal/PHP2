<?php
    include_once('database.php');
    class PASSENGER extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllPassengers()
        {
            $this->SetQuery("SELECT passengers.id,name,origin,destination,duration FROM passengers,flights where passengers.flight_id = flights.id");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }   

        
        function insertPG($name,$id){
            $query="INSERT INTO passengers ( name, flight_id) VALUES ('".$name."',".$id.")";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

    }
?>