<?php

    require_once('person.php');

    class EMPLOYEE extends PERSON{
        private $EmployeeID;
        private $department;

        function __construct($Name,$Email,$Depart){
            parent::__construct($Name,$Email);
            $this->department=$Depart;
            $this->EmployeeID=$this->generateID();
        }

        function getID(){
            return $this->EmployeeID;
        }

        function getdepartment(){
            return $this->department;
        }

        function setdepartment($Depart){
            $this->department=$Depart;
        }

        private function generateID(){
            static $genID=1;
            return $genID++;
        }
    }

?>