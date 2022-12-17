<?php
include('sql.php');

?>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>    
    <body>
   

<?php
if (isset($_SESSION['message'])) {
  echo '<div class="alert alert-success">'.$_SESSION['message']."</div>";
  unset($_SESSION['message']);
}
?>

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
    <a class="nav-link" href="about.php"><h5>About Us</h5></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login" tabindex="-1" aria-disabled="false"><h5>Login</h5></a>
  </li>
</ul>
<div class="float-right"> 
            <a href="register.php">Sign Up</a>
        </div>
  </div>
</nav>
    </nav>
  </div><div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
    <div class="card-body">

              <?php if(isset($_GET['error'])): ?>
                <p> <?php echo $_GET['error'];?></p>
                <?php endif ?>
            <form action="database.php" method="post" enctype="multipart/form-data">
            <div class="card-header">
                Add Your Data !
            </div>
            <div class="card-body">
            <hr class="mb-3">
               
               <div class="form-group">
                <label for="name"> Name</label>
                <input type="text" name="name" class="form-control" required>
               </div>
               <div class="form-group">
                <label for="email"> Email</label>
                <input type="email" name="email" class="form-control" required >
               </div>
               <div class="form-group">
                <label for="skills"> Skills</label>
                <input type="text" name="skills" class="form-control" required >
               </div>
               <div class="form-group">
                <label for="education"> Education Level</label>
                <input type="text" name="education" class="form-control" required >
               </div>
               <div class="form-group">
                <label for="wages"> Current Wages</label>
                <input type="number" name="wages" class="form-control" required >
               </div>
               <div class="form-group">
                <label for="address"> Address</label>
                <input type="text" name="address" class="form-control" >
                <div class="form-group">
                <label for="gender"> Gender</label>
                <div class="form-check">
            Male:
            <input class="form-check-input"  type="radio" name="gender" value="male" >
          </div>
          <div class="form-check">
            Female:
            <input class="form-check-input"  type="radio" name="gender" value="female" >
            </div>
          </div>
           
            <label class="form-label"> Profile Pic</label>
            <input type="file" name="image">
          
            <hr class="mb-3">
            <input class="btn btn-success" type="submit" name="btnSubmit"  value="Sign Up">

               </div>


            </div>
            </form>
        </div>
</div>
</div>
    </div>
</div>

<style type="text/css">
            .card{
                margin-top: 10px;
            }

  .card-header{
    background-color: blue;
    color: #fff;
  }
  h5{
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
        </style>
        
            </body>
        </html>