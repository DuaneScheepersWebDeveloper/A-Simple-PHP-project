<?php
// -----------------------GET TERMS-----------------------------------------
function get_terms() {
    $json = get_data();

    return json_decode($json);
}
// -------------------GET TERM---------------------------------------------
function get_term($term){
    $terms = get_terms();
    foreach ($terms as $item){
        if($item->term == $term){
            return $item;
        }
    }
    return false;
};

// -----------------SEARCH TERMS-----------------------------------------------------------
function search_terms($search){
    $items = get_terms();

    $results = array_filter($items, function($item) use($search){
        if(strpos($item->term, $search) != false){
            return $item;
        }
    });

    return $results;
}
// ----------------------GET DATA------------------------------------------------------
function get_data() {
    $fname = CONFIG['data_file'];

    $json = '';

    if (!file_exists($fname)) {
        file_put_contents($fname, '');
    } else {
        $json = file_get_contents($fname);
    }


    return $json;
}

//Something to remember about the 2 methods
//array_map(fn, arr)
//array_filter(arr, fn)
