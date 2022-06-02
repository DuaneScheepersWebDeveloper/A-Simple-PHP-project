<?php
//=========================================================
//-----------------THE GET DATA FUNCTION-----------------------------------------------
function get_data(){
$fname = CONFIG['data_file'];

$json = '';

if(!file_exists($fname)){
file_put_contents($fname, '');

} else {
        $json = file_get_contents($fname);
        $handle = fopen($fname, 'r');
        $json = fread($handle, filesize($fname)); 
        fclose($handle);
}

return $json;
};

//=========================================================
//----------------THE VIEW FUNCTION------------------------------------------------
function view($name, $model){
    global $view_bag;
    require("views/layout.view.php");
};
//=========================================================