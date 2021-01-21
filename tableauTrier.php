<?php

    $table = array(2,1,3,4,8,5,6,9,7,10);

    function    affichierTableau($arr){
        for($p=0 ; $p < count($arr); $p++){
            echo $arr[$p];
        }
    }

    // $k = affichierTableau($table);
    // echo $k;


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
    affichierTableau($trier);
    echo '</br>';
    print_r(array_slice($trier,3));

?>