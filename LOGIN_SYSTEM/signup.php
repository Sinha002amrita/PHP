<?php
$showAlert =false;
if($_SERVER["REQUEST_METHOD"] =="POST"){

include 'partials/_dbconnect.php';
$name= $_POST["name"];
$email= $_POST["email"];
$password= $_POST["password"];
$cpassword= $_POST["cpassword"];
$phone= $_POST["phone"];
//$exists=false;

//check whether this name exists
$existSql ="Select * FROM 'users' WHERE email = '$email'";
$result = mysql_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0) {
  //$exists = true;
  $showError = "Email already exists";
}
else{
  //$exists = false;
if($password == $cpassword) {
   $sql= "INSERT INTO 'users' ('name', 'email', 'password', 'phone') VALUES ('$name', '$email', '$password', '$phone')";
   $result = mysqli_query ($conn, $sql);
   if($result){
    $showAlert = true;
   }
}
else{
$showError ="Paasword do not match ";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Signup</title>
</head>
<body>
    
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert){
     echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can now login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
';
    }
   
    if($showAlert){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
  
    <div class="container">
    <h1 class="text-center">Signup To Our Website</h1>
  
    
    <form class="row g-3">
    <div class="col-auto">
    <label for="inputName" class="visually-hidden">Name</label>
    <input type="name" class="form-control" id="inputname" placeholder="Name">
  </div>
  <div class="col-auto">
    <label for="inputEmail2" class="visually-hidden">Email</label>
    <input type="email" class="form-control" id="inputEmail2" placeholder="Email">
  </div>
  <div class="col-auto">
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="Confirm password" class="form-control" id="inputPassword2" placeholder=" Confirm Password">
  </div>
  <div class="col-auto">
    <label for="inputPhone" class="visually-hidden">Phone</label>
    <input type="phone" class="form-control" id="inputPhone" placeholder="Phone">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Register</button>
  </div>
</form>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </div>
  </body>
</html>
