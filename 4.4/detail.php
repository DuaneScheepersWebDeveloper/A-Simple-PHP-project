<?php 
require("app/app.php");

if(!isset($_GET['term'])){
redirect('index.php');
} 

$data = get_term($_GET['term']); //Todo validate input
if($data == false){
  view('not_found');
  die();
}

$view_bag = [
  'title'=>'Details  for ' . $data->term
];

view('detail', $data );

  ?>