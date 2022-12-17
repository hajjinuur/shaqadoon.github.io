<?php
session_start();
include('sql.php');


?>
<?php
if(isset($_POST['login'])){
    $username  = $_POST['username'];
    $passsword = $_POST['passphrase'];
    $epasssword = md5($passsword);
    $sql    = "SELECT username,passphrase FROM signin WHERE username='$username'
    AND passphrase='$epasssword'";
    $result= mysqli_query($db,$sql);

    if(mysqli_num_rows($result)>0){
        $_SESSION['username']=$_POST['username'];
        header('Location:home.php');
    }
    else{
        echo 'Invalid Username';
        header('Location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<div class="mynav">
<nav class="navbar navbar-st">
  <div class="container justify">
    <span class="navbar-brand mb-0 h1"><h4>Shaqadoon</h4></span>
    <ul class="nav ">
</ul>
<div class="float-right"> 
            <a href="regist.php">Logout</a>
        </div>
  </div>
</nav>
</div>
<body>
   
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h5>Admin Login </h5></div>
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username"> Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="passphrase"> Password</label>
                            <input type="passphrase" name="passphrase" class="form-control">
                        </div>
                        <div class="form-group">
                        <hr class="3">
                        <button type="submit" class="btn btn-success" name="login">Login</button>
                        </div>
                        
                    </form>
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
    .container{
        margin-top: 20px;
        top: auto;
    }
    .card-body{
    background-color:rgb(41, 173, 255);
}
.card-header{
    background-color: blue;
    color: blue;
}
h5{
    color: #fff;
    text-align: center;
}
.btn .btn-success{
    height: 10px;
    width: 10px;
    margin-left: 100px;

}
</style>
</html>


