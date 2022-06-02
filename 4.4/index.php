<?php 

require("app/app.php");

$view_bag = [
  'title'=>"Glossary"
];

if (isset($_GET['search'])) {
  $items = search_terms($_GET['search']);
}else{
  $items = get_terms();
};

view('index', get_terms());

  ?>