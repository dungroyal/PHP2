<div class="conten">
    <div class="conten-title"> <p>Danh sách nhân viên</p></div>
   
    <?php
        if (isset($_GET['ctl'])) {
            echo'<div class="conten-kq">Danh sách Nhân Viên <br>
            ----------------------------------------------------------------------<br>
            '.$em_a->getID().'|'.$em_a->getName().'|'.$em_a->getEmail().'|'.$em_a->getdepartment().'   <br>        
            ----------------------------------------------------------------------<br>
            '.$em_b->getID().'|'.$em_b->getName().'|'.$em_b->getEmail().'|'.$em_b->getdepartment().'   <br>      
            ----------------------------------------------------------------------<br>
            '.$em_c->getID().'|'.$em_c->getName().'|'.$em_a->getEmail().'|'.$em_c->getdepartment().'   <br>       
            ---------------------------------------------------------------------- <br>
            </div>';
        }
    ?>

</div>