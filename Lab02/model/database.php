<?php
    class DATABASE
    {
        private $host = 'localhost';
        private $dbname = 'php2';
        private $username = 'root';
        private $password = '';
        private $sql="";
        private $DBH="";

        function __construct()
        {
            //tao doi tuong thuoc lop PDO
            $this->DBH = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username, $this->password);
        }
        function SetQuery($_sql)
        {
            $this->sql=$_sql;
        }
        function ThucHienTruyVan()
        {
            $result=null;   
            $result=$this->DBH->query($this->sql);
            return $result;
        }
        function ThucHienLenh()
        {
            $result=null;
            $result=$this->DBH->exec($this->sql);
            return $result;
        }
    }
?>