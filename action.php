<?php
session_start();
include("database_conn.php");

if(isset($_POST['reg_btn']))
{
    if(isset($_POST['pass'])==($_POST['pass1']))
    {
        $usr= $_POST['uname'];
        $pass= md5($_POST['pass']);
        $email= $_POST['email'];
        $addr= $_POST['addr'];
        $phn= $_POST['phn'];

        $query_data= "insert into user_data (ID, Name, Email, Password, Address, PhoneNo) values (NULL, '$usr', '$email', '$pass', '$addr', '$phn')";
        $conn->query($query_data);
        header("location:login.php");
        //registration code
    }
}

        //login code
 if(isset($_POST['login'])) {
            $username=$_POST['uname'];
            $password=md5($_POST['pass']);
            $query="select * from user_data where Name='$username' and Password='$password'" ;
           $result= $conn->query($query);
           //fetches data from database;
           $userdata= $result->fetch_assoc();
             $count = $result->num_rows;
             if($count==0) {
                echo"Invalid login details";
                //login detail fail
             }
             else{
                $_SESSION['ticket']='ok';
                $_SESSION['userid']= $userdata['ID'];
                header('location:dashboard.php');
             }
        }
        //add product
        
      if(isset($_POST['add_products'])) {
        
        $type=$_POST['types'];
        $des=$_POST['description'];
        $price=$_POST['price'];
        $size=$_POST['size'];
        $colors=$_POST['colors'];
        $pimage=$_FILES['prod_img']['name']; //this is actual image name

        $ext=strtolower(pathinfo($_FILES['prod_img']['name'], PATHINFO_EXTENSION));
        $random=rand(1,10000000);
        $newpicname=$random."_clothing." .$ext;
        $user_data_id = $_SESSION['userid'];


        if($ext=='jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif'){
          move_uploaded_file($_FILES['prod_img'] ['tmp_name'], "product_img/".$newpicname);


              $query="insert into products (ID, Type, Description, Price, Size, Colors, Picture, Posted_by) values(NULL, '$type' , '$des' , '$price' , '$size', '$colors','$newpicname', '$user_data_id')";
              $result = $conn->query($query);
              header("location:dashboard.php");
        }
        else{
          echo '<script>alert("Invalid image extension!!")</script>';
        }
          
      }


if(isset($_POST['cmt_btn'])){

  $date= date("Y-m-d");
  date_default_timezone_set('Asia/Kathmandu');
  $time = date("h:i:sA");
  $op=$date." ".$time;

  $cmtby_id=$_SESSION['userid'];

  $query_sel="select * from user_data where ID='$cmtby_id'";
  $result=$conn->query($query_sel);
  $user_data = $result->fetch_assoc();

  $query_sel1="select * from products";
  $result1=$conn->query($query_sel1);
  $prod_data=$result1->fetch_assoc();

  $cmtby_name = $user_data['Name'];
  $comment = $_POST['cmt'];

  $id = $_GET['id'];
  $query = "select * from products where ID='$id'";
  $result = $conn->query($query);
  $data = $result->fetch_assoc();

  $cmton_prod = $data['ID'];

  $query_data = "insert into reviews (ID, commented_by_id, commented_by, commented_on_id, comment, date) values (NULL, '$cmtby_id', '$cmtby_name', '$cmton_prod', '$comment', '$op')";

  $conn->query($query_data);
  header("location:reviews.php?id=".$id);
  //header("location:Display_product.php");
}

if(isset($_POST['edit_btn']))
{
    $id=$_POST['id'];
    $edit_type=$_POST['edit_type'];
    $edit_des=$_POST['edit_des'];
    $edit_price=$_POST['edit_price'];
    $edit_size=$_POST['edit_size'];
    $edit_colors=$_POST['edit_colors'];
    $query="update products set Type='$edit_type', Description='$edit_des', Price='$edit_price', Size='$edit_size', Colors='$edit_colors' where ID='$id' ";
    $conn->query($query);
    

    

    header("location:dashboard.php");

}

      ?>
        

