<?php include('database_conn.php');
include('dependencies.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$id = $_GET['id'];
$query = "select * from products where ID='$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
//print_r($data);
?>

<div class="edit">
      <div>
      
        <!-- Modal content-->
        <div>
        <div>
          </div>
          <div>

            <center><h3><b>Edit Details</b></h3></center>

          </div>
          <div >
          
          <form method="post" action="action.php"> <!-- enctype is for image -->
          <div class="modal-body mx-3">

          <div class="md-form mb-5" >

            <label></i> Edit:</label>
            <br>
            <label></i> Type:</label>
            <input type="text" id="form32" class="form-control validate" name="edit_type" value="<?php echo $data['Type']; ?>" required>
            <br>
            <label></i> Description:</label>
            <input type="text" id="form32" class="form-control validate" name="edit_des" value="<?php echo $data['Description']; ?>" required>
            <br>
            <label></i> Price:</label>
            <input type="text" id="form32" class="form-control validate" name="edit_price" value="<?php echo $data['Price']; ?>" required>
            <br>
            <label></i> Size:</label>
            <input type="text" id="form32" class="form-control validate" name="edit_size" value="<?php echo $data['Size']; ?>" required>
            <br>
            <label></i> Colors:</label>
            <input type="text" id="form32" class="form-control validate" name="edit_colors" value="<?php echo $data['Colors']; ?>" required>

            <input type="text" id="id" name="id" value="<?php echo $data['ID']; ?>" hidden>
          </div>

        


        
        <div class="modal-footer d-flex justify-content-center" style="background:white">
          <button class="btn btn-unique" name="edit_btn"><b>Edit Details</b></button>
        </div>

        </form>




          </div>
          <div class="modal-footer">
            <a href="dashboard.php"><button type="button" class="btn btn-default" data-dismiss="modal"><b>Back</b></button></a>
          </div>
        </div>
        
      </div>
    </div>

</body>
</html>




