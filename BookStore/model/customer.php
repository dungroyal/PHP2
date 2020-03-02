<?php
    include_once('database.php');
    class CUSTOMER extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }

        function AllCustomer()
        {
            $this->SetQuery("SELECT * FROM `customer` order by id DESC");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function insert($name,$email,$address,$phone,$created,$status)
        {
            $query = "INSERT INTO customer(full_name, email, address, phone, created_at, status) 
            VALUES ('".$name."','".$email."','".$address."','".$phone."','".$created."','".$status."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
            return $this->lastInsertID();
        }
        function insertOderDetail($cid,$proid,$quatity)
        {
            $query = "INSERT INTO orderdetail(customer_id, product_id, qty) 
            VALUES ('".$cid."','".$proid."','".$quatity."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
        
    }
?>