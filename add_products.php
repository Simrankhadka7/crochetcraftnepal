<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Add Clothes</title>
    <?php include ('dependencies.php'); ?>



</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <?php include('navbar2.php');?>
  </header>

<section class="vh-150 bg-image"
  style="background-image: url('clothing4.jpg');background-repeat:no-repeat; background-size:100% auto; background-position:ceter top; background-attachment:fixed; height:900px; color:black !important;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="margin:40px">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Add Clothes</h2>

              <form method="post" action="action.php" enctype="multipart/form-data">

              <div class="form-outline mb-4">
                  <input type="date" id="form3Example2bcg" class="form-control form-control-lg" name="date" />
                  <label class="form-label" for="form3Example3cg">Date of Entry</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="types" />
                  <label class="form-label" for="form3Example3cg">Crochet Types</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="description" />
                  <label class="form-label" for="form3Example3cg">Description</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="price"/>
                  <label class="form-label" for="form3Example4cg">Price</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cdg" class="form-control form-control-lg" name="size" />
                  <label class="form-label" for="form3Example4cdg">Size</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cdg" class="form-control form-control-lg" name="colors" />
                  <label class="form-label" for="form3Example4cdg">colors</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="file" id="form3Example1cg" class="form-control form-control-lg" name="prod_img" />
                  <label class="form-label" for="form3Example1cg">Picture</label>
                </div>
                

                <div class="d-flex justify-content-center">
                  <button type="submit" name="add_products" class="btn btn-success btn-block btn-lg gradient-custom-4  text-body">Add</button>
                </div>

                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>


