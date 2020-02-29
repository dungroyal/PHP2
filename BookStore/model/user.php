<?php
    include ('database.php');
    class USER extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }

        
        function allUser()
        {
            $this->SetQuery("SELECT * FROM `user` WHERE 1 order by id DESC");
            $this->result=$this->ThucHienLenh();
            return $this->result;
        }

        function checkuser($email,$pass,$level){
            $sql="SELECT * FROM user WHERE email='$email' and password='$pass' and level='$level' ";
            $this->SetQuery($sql);
            $this->result=$this->ThucHienTruyVan();
            $rows_affected = $this->result->rowCount();
            if ($rows_affected == 0) {
                return false;
            }else{
                return true;
            }
        }

        function updatePassword($email,$newpass)
        {
            $this->SetQuery("UPDATE `admin` SET `password` = '".$newpass."' WHERE `admin`.`email` ='".$email."' ");
            $this->result=$this->ThucHienLenh();
            return $this->result;
        }
    }   
?>