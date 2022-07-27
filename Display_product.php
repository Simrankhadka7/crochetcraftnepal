<?php session_start();
  include("dependencies.php");
  include("database_conn.php");

  $query="select * from products";
  $result=$conn->query($query);

  print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dis.css" rel="stylesheet">
  
  <title>Document</title>
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <?php include('navbar2.php');?>
  </header>


<section style="background-color: #eee;">
<div class="container">
<div class="row">

<?php while($dataUser = $result->fetch_assoc()){?>

        <div class="col-md-4">
            
            

            <p><a href="reviews.php?id=<?php echo $dataUser['ID'] ?>"><img src="product_img/<?php echo $dataUser['Picture']?>" class = "img-thumbnail"/></a></p>
            <h3>Type: <i><?php echo $dataUser['Type'];?></i></a></h3>
            <h3>Description: <i><?php echo $dataUser['Description'];?></i></h3>
            <h3>Price: <i><?php echo $dataUser['Price'];?></i></h3>
            <h3>Size: <i><?php echo $dataUser['Size'];?></i></h3>
            <h3>Color: <i><?php echo $dataUser['Colors'];?></i></h3>




        </div>
    
<?php } ?>
</div>
</div>
</section>
  
</body>
</html>





