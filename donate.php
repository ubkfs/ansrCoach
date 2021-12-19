<?php
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '../www/new/in/db_connect.php';
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
$sql= "INSERT INTO `payee` ( `Name`, `Phone`, `Email`, `Order Id`, `Date`) VALUES ('$name','$phone', '$email', '13sd1c313f1s13s1s1111a1adga1a15arg64e6g4e6g', CURRENT_TIMESTAMP())";
$result = mysqli_query($conn,$sql);
if($result){
    $showAlert=true;
  }
}
?>








<?php require "/ansrCoach/nav.php" ?>

<br><br><br><br><br><br><br><br><br><br>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Donate</title>
  </head>
  <body>

<style>
  body{
        background: linear-gradient(rgb(15, 138, 175),rgb(81, 124, 81),rgb(115, 165, 36)) fixed;
    }
.card{
    width:360px;
    background: rgb(14, 13, 13);
    display:block;
    margin:auto;
    border-top-left-radius:14px;
    border-bottom-right-radius:14px;
    box-shadow: rgba(114, 61, 61, 0.4) 5px 5px,
    rgba(184, 42, 42, 0.3) 10px 10px, 
    rgba(221, 24, 24, 0.2) 15px 15px,
     rgba(236, 11, 11, 0.1) 20px 20px, 
     rgba(253, 2, 2, 0.05) 25px 25px;
     margin-bottom:50px;
}
.card-title{
    color:white;
}
.form-group{
    color:white;
}
</style>
<?php
if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Success </strong>Welcome to my room.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';}
 ?>
<div class="card text-center">

<div class="card-body">
  <h2 class="card-title">Donate to uplift society</h2>
  <form action="/ansrCoach/pay.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control my-2" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control my-2" id="email" name="email">
        </div>
        <a href="#" type="submit" class="btn btn-outline-primary">Submit</a>
     </form>
</div>

</div>
</body>
</html>