<?php
$title = 'get-input';

include('./../inc/header.php');
require_once('./../inc/functions.php');

// $product_id = $_GET['productid'];
//super global variable


$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT); //false
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

if ($category == false){
$category = 1;

}
if ($limit == false) {
  $limit = 10;
  // die();
};
// function setValues(){
// global $category, $limit;

//  $category = $_GET['category'];
//  $limit = $_GET['limit'];
// };

// setValues()
?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">GET Input</h1>
        </div>
      </div>
      <div class="row">
        Showing category: <?= $category ?>. Limit <?= $limit?>
      </div>
    </div>
<?php include('./../inc/footer.php');?>