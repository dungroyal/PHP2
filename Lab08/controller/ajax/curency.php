<?php
    if (isset($_POST['curency'])) {
        $curency=$_POST['curency'];
        switch ($curency) {
            case 'EURO':
                $race=15000;
                echo '{"success": true, "race":'.$race.'}';
                break;

            case 'YEN':
                $race=19000;
                echo '{"success": true, "race":'.$race.'}';
                break;

            case 'DOLLAR':
                $race=23000;
                echo '{"success": true, "race":'.$race.'}';
                break;
            
            default:
            $race=0;
                echo '{"success": true, "race":'.$race.'}';
                break;
        }
    }
?>