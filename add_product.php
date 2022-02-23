<?php 

session_start();

$con = new PDO('mysql:host=localhost;dbname=onlineshoppingsystem', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//$request = $con->query("SELECT * FROM product WHERE id = ". $_SESSION["id"]);

// if ($request->rowCount() == 1) {
// 	$info = $request->fetch();

//     $old_prodname = $info["name"];
//     $old_price = $info["price"];
//     $old_desc = $info["description"];
//     $old_id = $info["id"];
// }else{
//     $old_prodname = $info[""];
//     $old_price = $info[""];
//     $old_desc = $info[""];
//     $old_id = $info[""];
// }


if (isset($_POST['submit'])) {
    $prodname = $_POST["name"];
	$price = $_POST["price"];
	$desc = $_POST['description'];
    $img = "imgs/products/" . $_FILES['photo']["name"];

    move_uploaded_file($_FILES['photo']["tmp_name"], $img);

    //$sql = "SELECT MAX(id) FROM product";
    $em = "user2@gmail.com";

    // $sql = 'INSERT INTO product (email, name, price, description) 
    //         VALUES ('.$_SESSION["email"].'","'.$prodname.'","'.$price.'","'.$desc.'")';
    // $result = mysqli_query($conn, $sql);

     $request = $con->query('INSERT INTO product (email, name, price, description, photo) VALUES ('.$em.'","'.$prodname.'","'.$price.'","'.$desc.'","'.$img.'")');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Sign up</title>
</head>
<body>
   <div class="container">
       <form  class="form" id="form" method="post">
           <div class="header">
               <h2>Add Product</h2>
           </div>
    <div class="padding">
    <div class="form-control ">
     <label for="name">Name</label>
     <input type="text" placeholder="Enter the Name of the product" id="name" name="name" >
     <i class="fas fa-check-circle"></i>
     <i class="fas fa-exclamation-circle"></i>
     <small>error msg</small>
    </div>

    <!-- <div class="form-control  ">
        <label for="email"> Email</label>
        <input type="text" placeholder="Enter your email" id="email" >
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>error msg</small>
       </div> -->

       <div class="form-control ">
        <label for="price">Price</label>
        <input type="number" placeholder="Enter your price" id="price" name="price">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>error msg</small>
       </div>

       <div class="form-control ">
        <label for="img">image</label>
        <input type="file" id="img" name="img" accept="image/*" >
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>error msg</small>
       </div>

       <div class="form-control ">
        <label for="description">description</label>
        <input type="text" placeholder="Enter your description" id="description" name="description">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>error msg</small>
       </div>

       <!-- <div class="form-control ">
        <label for="confrim-password">Confirm Password</label>
        <input type="password" placeholder="Confirm your password" id="confirm-password">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>error msg</small>
       </div> -->

       <!-- <div class="form-control radio ">
           <p>Create as</p>
         <div>
             <input type="radio" name="role" id="customer" checked>
             <label for="customer" > customer</label>
            </div>  
             
            <div>

                <input type="radio" name="role" id="seller">
                <label for="seller"> seller</label>
            </div>
             
        
       </div> -->
       <div>
           <button id="submit" name="submit" type="submit">Add</button>

       </div>
    </form>
</div>

   </div> 
   <!-- <script  src="./js/add_product.js"></script> -->
</body>
</html>