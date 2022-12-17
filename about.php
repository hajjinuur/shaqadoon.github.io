<?php
include('session.php');
include('sql.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<div class="mynav">
<nav class="navbar navbar-st">
  <div class="container justify">
    <span class="navbar-brand mb-0 h1"><h4>Shaqadoon</h4></span>
    <ul class="nav ">
  <li class="nav-item">
    <a class="nav-link active" href="home.php"><h5>Home</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="table.php"><h5>Employee</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php"><h5>Contact Us</h5></a>
  </li>
  
</ul>
<div class="float-right"> 
            <a href="logout.php">Logout</a>
        </div>
  </div>
</nav>
    </nav>
</div>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h1>ABOUT US</h1>
                
            </div>
            <hr class="mb-3">
            <div class="card-body">
           
                <div class="content justify-content-center">
                    <div class="image">
                    <img src="image.png" alt="content image" class="fluid-center">
                    </div>
                </div>
                <hr class="mb-3">
                <p>
                Welcome to our website. On the about page, we discuss a few things. Thanks for using this open source. You will receive more tools from this website, including an admin panel, a registration panel, a home panel, and others.
                </p>
            </div>
            <hr class="mb-3">
            <div class="card-footer">
            <div class="text-center p-3" style="background-color: #4070f4;">
                © 2022 Copyright:
                <a class="text-white" href="regist.php">@Shaqa-doon.com</a>
                </div>
            </div>
        </div>    
        </div>
        </div>
    </div>
</body>
<style>
    body{
    background-image:  url(image.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    font-family: 'Lato','sans-serif';
    background-color:#9db7ffe7;
    color: #222;
    overflow-x: hidden;
    margin: 0;
    }
    h1{
        font-size: 35px;
        text-align: center;
    }
    .fluid-center{
        background-color:lightblue;
        width: 500px;
        opacity: 0.5;
        margin-left: 120px;
        margin-top: -10px;
        overflow: hidden;
    }
    .image img{
        justify-content: center;
        align-items: center;
        text-align: center;
        align-content: center;
    }
    .mynav{
        background-color: blue;
      }
    .card-header{
        background-color: lightblue;
    }
    h5{
    color: #fff;

  }
  h4{
    color: #fff;
  }
  .float-right{
        color: #fff;
        border: 5px;
        padding-right: 10px;
        padding-left: 10px;
        background-color: #fff;
        background-size: 15px;
      }
      p{
        font-size: 22px;
        font-family: 'Times New Roman', Times, serif;
        font-style: normal;
        color: #9db7ffe7;
        text-align: center;
        text-transform: capitalize;
        font-kerning: auto;
        font: optional;
      }
</style>
</html>