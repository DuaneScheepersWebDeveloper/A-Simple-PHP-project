<?php 

// $guitars = array('Vela', 'Explorer', 'Strat');
// or a traditional array
// $guitars1 = ['Vela', 'Explorer', 'Strat'];

// print_r($guitars);
// echo $guitars[0];
// if (isset($guitars1[3])){
//     echo $guitars1[3];
// }else{
//     echo "guitar not found ";
// }

//associative array
$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
    'Prs' => 'Single Cut'
];

if (isset($guitars2['Prs'])){
    echo $guitars2['Prs'];
}else{
    echo "guitar not found ";
}
