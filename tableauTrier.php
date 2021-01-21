<?php

    $table = array(2,1,3,4,8,5,6,9,7,10);
//    **************************************************************************
    function    limiterTableau($arr){
        $m=2;
        $empty =[];
        for($f=0 ; $f < $arr[$m]; $f++){
           $empty[] = $arr[$f];
        }
        return $empty;
    }
    
    // limiterTableau($table);
    // ********************************************************************
    function    affichierTableau($arr){
        for($p=0 ; $p < count($arr); $p++){
            echo $arr[$p];
        }
    }

    // ************************************************************************


    function tableauTrier($tableau){
        if(!is_array($tableau))
        return;
        for($i = 0; $i<count($tableau); $i++){
            for($j = $i+1; $j < count($tableau); $j++){
                if($tableau[$j]< $tableau[$i]){
                    $tmp = $tableau[$i];
                    $tableau[$i]= $tableau[$j];
                    $tableau[$j]=$tmp;
                }
            }
        }
        return $tableau;
    }
    echo 'avant triage';
    echo '</br>';
    affichierTableau($table);
    echo '</br>';
    echo 'après triage';
    echo '</br>';
    $trier = tableauTrier($table);
    limiterTableau($trier);
    $j = limiterTableau($trier);
    affichierTableau($j);
    // affichierTableau($trier);
    // echo '</br>';
    // limiterTableau($table);



?>