<?php

include_once '../class/main.php';


if(isset($_POST['name']) and
isset( $_POST['username']) and
isset($_POST['phonenumber']) and 
isset($_POST['email']) and 
isset($_POST['password'])){
  $name=$_POST['name'];
  $username=$_POST['username'];
  $phonenumber=$_POST['phonenumber'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $output = user::signup($name,$username,$phonenumber,$email,$password);

  if ($output){
    load_tamplates('sign-in');
    die("");
   
  }
  else{
    load_tamplates('sign-infail');
    die("");

    
  }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>sign-up page</title>

    <link rel="canonical" href="project / signup">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method ="post">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" name="name"class="form-control" id="floatingInput" placeholder="name">
      <label for="floatingInput">name</label>
    </div>
    <div class="form-floating">
      <input type="text" name="username"class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="number"name="phonenumber"class="form-control" id="floatingInput" placeholder="phone number">
      <label for="floatingInput">phone number</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email"class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password"class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>