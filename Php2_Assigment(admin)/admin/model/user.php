<?php
 include ('database.php');
 class USER extends DATABASE
 {
     function __construct()
     {
         parent::__construct();
     }
     function checkLogin($email,$pass){
         $query="SELECT * from admin where email='$email' AND password='$pass' ";
         $this->SetQuery($query);
         $this->result=$this->ThucHienLenh();
         $rows_affected = count($this->result);

         if ( $rows_affected==0) {
             return false;
         }else {
             return true;
         }
     }
     
}
?>