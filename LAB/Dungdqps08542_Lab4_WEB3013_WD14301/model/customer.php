<?php
    include('database.php');
    class CUSTOMER extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllCustomer()
        {
            $this->SetQuery("SELECT * from customer");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function delCustomer($id)
        {
            $this->SetQuery("DELETE FROM customer where id=$id");
            $this->result=$this->ThucHienLenh();
        }

        function insertCustomer($first_name,$last_name,$gender,$phone,$email,$addresss,$city,$date_add){
            $query="INSERT INTO `customer` (`first_name`, `last_name`, `gender`, `email`, `address`, `city`, `phone`,`created_at`, `updated_at`) 
            VALUES ('".$first_name."','".$last_name."','".$gender."','".$email."','".$addresss."','".$city."','".$phone."','".$date_add."','".$date_add."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
    }
?>