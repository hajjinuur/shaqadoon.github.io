<?php
session_start();
include('header.php');
include('sql.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<?php    

$myid= mysqli_real_escape_string($db, $_GET['id']);
$sql="SELECT *FROM users WHERE id='$myid'";
$result =mysqli_query($db,$sql);
$check_conn=mysqli_num_rows($result) > 0;

if($row=mysqli_fetch_array($result)) {
        ?>
        		

<div class="container">
    <div class="row-cols-1">
    <div class="col-md-5 float-md-left">
        <div class="card">
            <div class="card-header">
            <h4>New Message</h4>
            </div>
            <div class="card-body">
                <form action="message.php?php=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="to">To</label>
                        <input type="email" name="position" class="form-control" value="example@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="Job">Subject</label>
                        <input type="text" name="position" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="Job">File</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="from-group">
                    <hr class="mb-3">
            <button class="btn btn-success"  name="btnSubmit"> Message</button>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="row-cols-1">
    <div class="col-md-6 float-right">
    <div class="card">
    <div class="card-header">
        <div class="img">
        <img class="img-thumbnail" src="upload/<?php echo $row['Images'];?>" alt="profile picture">
        </div>
    </div>
    <hr class="mb-3">
 <div class="card-body">
    <div class="row"> 
    <div class="col">
 <form action="home.php" method="post">
        <div class="form-group">
        <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>" >
        </div>
        </div>
        <div class="col">
            <div class="form-group">
            <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>">
            </div>
        </div>
            <div class="form-group">
            <label for="skills">Skills</label>
                <input type="text" name="skills" class="form-control" value="<?php echo $row['skills'];?>">
            </div>
        <div class="col">
            <div class="form-group">
            <label for="wages">Current Wages</label>
                <input type="number" name="wages" class="form-control" value="<?php echo $row['wages'];?>">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="address"> Address </label>
                <input type="text" name="address" class="form-control" value="<?php echo $row['address'];?>">
            </div>    
        </div>
        <div class="col">
        <div class="form-group">
                <label for="gender"> Gender</label>
                <input type="text" name="gender" id="gender" class="form-control" value="<?php echo $row['Gender'];?>">
          </div>
        </div>  
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" value="Cities">
            </div>
            
        <div class="col">
            <div class="form-group">
                <label for="region">Region</label>
                <input type="text" name="region" class="form-control" value="Region">
            </div>
        </div>
       
               </div>
 </form>
    
    
        </div>
        </div>
        </div>
    </div>
</div>
</div>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success">'.$_SESSION['message']."</div>";
            unset($_SESSION['message']);
          
          }
        ?>
        <?php	
        	
        }else{
        	echo 'no personal data entry';
        }
		?>

</body>
<style>
.container{
    margin-top: 10px;
}
.image{
    size: 50px;
    align-items: center;
    justify-content: center;
}
.img{
    border: blue solid 2px;
    justify-content: center;
    align-items: center;
    background-color: blue;
    
}

.img-thumbnail{
  height: 190px;
  width: 170px;
  position:relative;
  left: 30%;
  margin-left: -(half ot the image width)px

}
.card-header{
    justify-content: center;
    align-items: center;
}
.card{
    bottom: 10px;
}
.card-header{
    background-color: blue;
    color: #fff;
  }
  .col-md-4 .float-md-left{
    margin-left: -30px;
  }
  .col-md-5 .float-right{
    right: -30px;
  }
  .btn .btn-success{
    align-content: center;
    align-items: center;
    text-align: center;
    left: -30px;
    margin-left: 30px;
  }
</style>
</html>