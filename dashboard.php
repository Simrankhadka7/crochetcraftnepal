<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:login.php');
}
include ('database_conn.php');
include ('dependencies.php');

$userid= $_SESSION['userid'];

$query= "select * from user_data where ID='$userid'";
$result = $conn->query($query);
$datauser = $result->fetch_assoc();


$query= "select * from products";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <title>User Dashboard</title>
    <link href="dash_css.css" rel="stylesheet">
</head>
<body>

<header id="header" class="fixed-top d-flex align-items-center">
    <?php include('navbar2.php');?>
  </header>

  <div class="mq-wrapper">
		<!-- Sidebar -->
        <br>
        <br>
        <br>
        
        
        <br>
		<div class="mq-sidebar">
        <div class="row">
            <br>
            <br>
    <center><h2><b><br>Your Info:</b></h2>
    <br>
    <br>
            <h4>Name: <?php echo $datauser['Name']?></h4>
            <br>
            <h4>Email: <?php echo $datauser['Email']?></h4>
            <br>
            <h4>Address: <?php echo $datauser['Address']?></h4>
            <br>
            <h4>Phone: <?php echo $datauser['PhoneNo']?></h4>
            </center>
        </div>
                        



</div>
			
		</div>

		<!-- widgets -->
		<div class="mq-container">
			<!-- Breadcrums -->
			<div class="mq-bread-crumbs">
			<center>	
            <h2> <b> <br>Your Dashboard </b></h2>
            <br>
            <br>
            </center>
            <?php while ($datauser=$result->fetch_assoc()){
                if ($_SESSION['userid'] == $datauser['Posted_by']) { ?>




            <div class="row">

            <div class="col-md-12">
            <center>

            <p><a href="reviews.php?id=<?php echo $datauser['ID'] ?>"><img src="product_img/<?php echo $datauser['Picture']?>" class = "img-thumbnail"/></a></p>
            <h3>Type: <i><?php echo $datauser['Type'];?></i></a></h3>
            <h3>Description: <i><?php echo $datauser['Description'];?></i></h3>
            <h3>Price: <i><?php echo $datauser['Price'];?></i></h3>
            <h3>Size: <i><?php echo $datauser['Size'];?></i></h3>
            <h3>Color: <i><?php echo $datauser['Colors'];?></i></h3>
            <br>
            <a href="edit.php?id=<?php echo $datauser['ID'] ?>"> Edit</a>
			<a href="delete.php?product_id=<?php echo $datauser['ID'] ?>"> Delete</a>
                </center>
            <br>
            <br>

			<?php }
						}
								?>



							

     
			</div>
            
       

			

			

	
		</div>
	</div>


</body>
</html>







    <section>
    <div>
        <br>
<div class="col-md-3">

</div>
<div class="col-md-9">
    
    </div>
    </div>
    </section>