<?php 
    $names = array('Samuel','Stevano','Nanda','Febrianto', 'Andi', 'Jution');

    sort($names, SORT_ASC);

    foreach($names as $key => $value){
        echo $value . '<br>';
    }
?>