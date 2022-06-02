<?php 

require("app/app.php");

$view_bag = [
  'title'=>"Glossary"
];


view('index', get_terms());

  ?>