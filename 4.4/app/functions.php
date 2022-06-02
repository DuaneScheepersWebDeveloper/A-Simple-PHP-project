<?php
//----------------THE REDIRECT FUNCTION---------------------
function redirect($url){
    header("Location: $url");
    die();
}
//=========================================================
//----------------THE VIEW FUNCTION---------------------
function view($name, $model=''){
    global $view_bag;
    require("views/layout.view.php");
};
//=========================================================
//-------------------------------------