<?php
include 'db.php';

if(isset($_FILES['fileToUpload'])){
    $errors = array();
   $file_name = $_FILES['fileToUpload']['name'];
   $file_size = $_FILES['fileToUpload']['size'];
   $file_tmp = $_FILES['fileToUpload']['tmp_name'];
   $file_type = $_FILES['fileToUpload']['type'];
   $file_ext = explode('.',$file_name);

   $new_name = time()."_".basename($file_name);
   $target = "upload/".$new_name;

   if (empty($errors) == true) {
     move_uploaded_file($file_tmp,$target);
   }else{
    print_r($errors);
    die();
   }
}



$name = mysqli_real_escape_string($conn, $_POST['name']);
$description = mysqli_real_escape_string($conn, $_POST['description']);


$sql = "INSERT INTO products (product_name,product_image,product_description) VALUES ( '{$name}' , '{$new_name}', '{$description}' ) ";

if (mysqli_query($conn,$sql) ) {
    header("location:http://localhost/techverden/admin/index.php");
}else{
    echo "<h2> PLease Check Again </h2>";
}



?>