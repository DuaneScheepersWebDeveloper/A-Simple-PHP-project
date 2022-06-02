<?php
$title = 'POST Input';

include('./../inc/header.php');
require_once('./../inc/functions.php');

    // if(isset($_POST['login'])){
    // output($_POST);
    // }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($email == false){
        $status = 'Please enter a valid email address';
    }
    }

?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"><?= $title; ?></h1>
        </div>
      </div>
      <div class="row">

        <form action = "" method = "POST">
           <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="text" name='email' id='email'>
           </div> 
            <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name='password' id='password'>
           </div> 
           <input type="submit" name="login" value="Login">
        </form>
      </div>
      <div class="row">
        <?php 
        if(isset($status)){
        echo $status;
        }
        ?>
      </div>
    </div>
<?php include('./../inc/footer.php');?>