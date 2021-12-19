<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</head>
 <style>
   *{
     box-sizing: border-box;
   }
   .navbar {
        background-color: rgb(43, 39, 39);
        height: 100px;
    }

    .navbar-expand-lg {
        height: 60px;
    }

    nav ul {
        display: flex;
    }

    .list-item {
        color: blanchedalmond;
        list-style: none;
        padding: 10px;
        margin: 5px;
        background-color: burlywood;
    }

      #imgg {
        display: block;
        flex-wrap: wrap;
        margin: auto;
        height: 70px;
        width: 70px;
    }
    .nav-link{
        background-color: red;
    }
    .nav-item{
        list-style:none;
        padding:5px;
    }
    header {
        height: 100px;
    }
.m-auto{
  font-size:4vw;
}
    header h1 {
      display:block;
        margin: auto;
        text-shadow: 1.5px 1.5px rgb(13, 233, 178);
    }
  
    @media (max-width:640px) {
        nav ul{
          display: none;
        }
        .navbar-toggler-icon{
          display: flex;
        }   
        .m-auto{
          font-size:6vw;
          padding: 20px;
        }
        
    }
    @media (min-width:720px){
        
    }
    @media (min-width:1200px){
        
    }

     </style>
<body>
    <header><div>
        <img id="imgg" src="../new/logo.png" alt=""></div>
        <div>
        <h1 class="m-auto d-block text-center ms-3"><b><i>AnsrCoach Society Upliftment</i></b></h1></div>
    </header>
    <br><br>
    <hr>
    <hr>
 
 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/new/main.php">AnsrCoach</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link active" aria-current="page" href="/new/main.php">Home</a></button>
        </li>
    
        <li class="nav-item">
        <button type="button" class="btn btn-outline-success"><a class="nav-link" href="/new/donate.php">Donate</a></button>
        </li>
        

        
    </div>
  </div>
</nav>

</body>