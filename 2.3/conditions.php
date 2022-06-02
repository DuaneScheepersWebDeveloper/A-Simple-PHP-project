<?php

// $result = 1 < 3; //true
// echo $result == true;

$first_name = 'Duane';
$last_name = 'Scheepers';

if($first_name == 'Duane' || $last_name == 'Scheepers'){
    echo 'The first condition is true';
}else if ($first_name == 'duane' && $last_name == 'scheepers'){
     echo 'The second condition is true';
}else{
   echo 'The second condition is false'; 
}
