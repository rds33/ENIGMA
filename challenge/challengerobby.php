$names = array('Samuel','Stevano','Nanda','Febrianto', 'Andi', 'Jution');
    

    // rsort($names,);

    // foreach($names as $value){
    // //     echo $value . '<br>';
    // }
    //$names=array(7,2,3,1,5,6);

    //ASCENDING
// Function bubble_sort($names){
//         $n=count($names);
//         for ($i = 0;$i<$n;$i++){ for ($j = $n-1;$j>$i;$j--){
//                 if ($names[$j] < $names[$j-1]){
//                     $dummy=$names[$j];
//                     $names[$j]=$names[$j-1];
//                     $names[$j-1]=$dummy;
//                 }
//             }
//         }
//         return $names;
//     }
//     (bubble_sort($names));

//     foreach (bubble_sort($names) as $n) {
//         echo $n . '<br>';
//     }

// DESCENDING
    Function bubble_sort($names){
        $n=0;
        for ($i = count($names);$i>$n;$i--){ for ($j = $n+1;$j<$i;$j++){
                if ($names[$j] > $names[$j-1]){
                    $dummy=$names[$j];
                    $names[$j]=$names[$j-1];
                    $names[$j-1]=$dummy;
                }
            }
        }
        return $names;
    }
    (bubble_sort($names));

    foreach (bubble_sort($names) as $n) {
        echo $n . '<br>';
    }
    
    //AKHIRNYA BISAAAAAAA!!!!!!!!

    // function insertion_sort($names){
    //     $n=count($names);
    //     for ($i = $n;$i>$n;$i--){ for ($k = $i; $k<0; $k++) {
    //         if($names[$k]<$names[$k+1]){
    //           $dummy=$names[$k];
    //           $names[$k]=$names[$k+1];
    //           $names[$k-1]=$dummy;
    //         }
    //       }
    //     }
    //     return $names;
    //   }
    //   print_r(insertion_sort($names));
?>
