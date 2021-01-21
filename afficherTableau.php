<?php
        $table = array(2,1,3,4,8,5,6,9,7,10);

        function    affichierTableau($tableau){
            for($i=0 ; $i < count($tableau); $i++){
                echo $tableau[$i];
            }
        }
    
        $k = affichierTableau($table);
        echo $k;
?>