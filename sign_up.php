<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("dependencies.php") ?>
    <title>Document</title>
</head>
<body>
  
<header id="header" class="fixed-top d-flex align-items-center">
    <?php include('navbar2.php');?>
  </header>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="img.jpg">
                <alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .35rem; border-bottom-left-radius: .35rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase"> Registration form</h3>
                
                <form method="post" action="action.php">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="uname"/>
                      <label class="form-label" for="form3Example1m">Name</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" name="email" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="Password" id="form3Example1n" class="form-control form-control-lg" name="pass"/>
                      <label class="form-label" for="form3Example1n">Password</label>
                    </div>
                  </div>
                </div>
                

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="Password" id="form3Example1n" class="form-control form-control-lg" name="pass1"/>
                      <label class="form-label" for="form3Example1n">Repeat Password</label>
                    </div>
                  </div>
                </div>
                

                <div class="row">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" name="addr" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>
                </div>
                <div class="row">

                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="phn" />
                      <label class="form-label" for="form3Example1m1">Phone Number</label>
                </div>
                </div>

          
                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="reg_btn">Submit form</button>
                </div>
                </div>
</form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
</body>
</html>