<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:login.php');
    $query="select * from products";
    $result=$conn->query($query);
    print_r($result);
  
}
include ('database_conn.php');
include ('dependencies.php');
$userid= $_SESSION['userid'];

$query= "select * from user_data where ID='$userid'";
$result = $conn->query($query);
$dataUser = $result->fetch_assoc();



$query="select * from products where Posted_by='$userid'";
$result=$conn->query($query);
$data_prod=$result->fetch_assoc();

$id = $_GET['id'];
$query = "select * from products where ID='$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Reviews</title>
    <link href="dis.css" rel="stylesheet">

</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <?php include('navbar2.php');?>
  </header>

  <section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">
              
            <div>
                <h6 class="fw-bold text-primary mb-1"><?php echo $dataUser['Name'] ?></h6>
                <p class="text-muted small mb-0">
                User
                </p>
              </div>
            </div>

            <p class="mt-3 mb-4 pb-2">
            <p><img src="product_img/<?php echo $data['Picture']?>" class = "img-thumbnail"/></p>
            <h3>Type: <i><?php echo $data['Type'];?></i></a></h3>
            <h3>Description: <i><?php echo $data['Description'];?></i></h3>
            <h3>Price: <i><?php echo $data['Price'];?></i></h3>
            <h3>Size: <i><?php echo $data['Size'];?></i></h3>
            <h3>Color: <i><?php echo $data['Colors'];?></i></h3>
            <br>
            <br>

            </p>

            <div class="small d-flex justify-content-start">
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-thumbs-up me-2"></i>
                <p class="mb-0">Like</p>
              </a>
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-comment-dots me-2"></i>
                <p class="mb-0">Comment</p>
              </a>
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="fas fa-share me-2"></i>
                <p class="mb-0">Share</p>
              </a>
            </div>
            <br>
                          <?php $query_cmt = "select * from reviews";
              $result = $conn->query($query_cmt);
              $cmt_data = $result->fetch_assoc();
              ?>

            <?php while($cmt_data = $result->fetch_assoc()){

                if($cmt_data['commented_on_id']==$_GET["id"]){ ?>

                    <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="card card-white post">
                        <div class="post-heading">
                            <div class="float-left image">
                            </div>
                            <div class="float-left meta">
                                <div class="title h5">
                                  <b><?php echo $cmt_data['commented_by']?></b>
                                </div>
                                <h6 class="text-muted time"><?php echo $cmt_data['date']?></h6>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p style="color:black"><?php echo $cmt_data['comment']?></p>

                        </div>
                        <?php if ($_SESSION['userid'] == $cmt_data['commented_by_id']) { ?>
                        <a href="del_cmt.php?cmt_id=<?php echo $cmt_data['ID'] ?>"> Delete</a>
                        <?php } ?>
                    </div>
                </div>
                
            </div>
                </div>
                <?php } 
                }?>




                
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
                

    <form action="action.php?id=<?php echo $data['ID'] ?>" method="post">
              <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" style="background: #fff;" name="cmt"></textarea>
                <label class="form-label" for="textAreaExample">Message</label>
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
              <button type="Submit" class="btn btn-primary btn-sm" name="cmt_btn">Post comment</button>
              <a href="Display_product.php"><button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
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