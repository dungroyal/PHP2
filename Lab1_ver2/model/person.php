<?php
    class PERSON{
        private $Name;
        private $Email;
        function __construct($Name,$Email){
            $this->Name=Strtoupper($Name);
            $this->Email=$Email;
        }

        function getName(){
            return $this->Name;
        }

        function getEmail(){
            return $this->Email;
        }

        function setName($Name){
            $this->Name=Strtoupper($Name);
        }

        function setEmail($Email){
            $this->Email=$Email;
        }
    }
?>