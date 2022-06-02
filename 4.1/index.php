<?php 
require("functions.php");
$title = 'Hello Model';

$view_bag = [];
$view_bag['title'] = 'This is the Title';

view('index', $title);

  ?>