<?php
include('sql.php');
include('header.php');
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
<style>
   body {
       
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
       
        min-height: 100vh;

        margin: 0;
        padding: 0;
      }
    .cont{
      margin-bottom:20px;
    background: #9db7ffe7;
		position: absolute;
    top: 100px;
    left: 10px;
    right: 10px;
		align-items: center;
		justify-content: center;
		padding: 40px;
    border:2 solid #222;
	}
  .table-bordered{
    bottom: 10px;
    border: solid #333;
  }
  img{
      height: 50px;
      width: 50px;
    }
    .float-right{
      margin: left 6px;
      position: relative;
      color:#222;
      margin: bottom 10px;
      bottom: 10px;
      top:0;
    }
    label{
      color: #222;
    }
</style>

</head>
<body>
<?php  
        $sql="SELECT *FROM users";
        $result =mysqli_query($db,$sql);
    ?>
<div class="cont"> 
  <?php
 
if(isset($_SESSION['message'])){
  echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
  unset($_SESSION['message']);
};
  ?>
<h2 class="text-center">ShaqaDoon Data-Table</h2>
<div class="float-right">
  Hello,<?php echo $_SESSION['username']; ?><a href="logout.php"> Logout</a> <br>
Total Job Vancancy:<?php echo mysqli_num_rows($result); ?>
</div>
<table id="table_id" class="table-bordered">
    <thead>
        <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Skills</th>
        <th>Education</th>
        <th>Current-W.</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Pictures</th>
        <th>Option</th>
        </tr>
        
        
    </thead>
    <tbody>
    <?php  foreach ($result  as $results){
    ?>  
        <tr>
                    <td class="fonts"> <?php echo $results['id'];?>     </td>
                    <td class="fonts"> <?php echo $results['name'];?>     </td>
                    <td class="fonts"> <?php echo $results['email'];?>    </td>
                    <td class="fonts"> <?php echo $results['skills'];?>   </td>
                    <td class="fonts"> <?php echo $results['education'];?></td> 
                    <td class="fonts"> <?php echo $results['wages'];?>    </td>
                    <td> <?php echo $results['address'];?>  </td>
                    <td> <?php echo $results['Gender'];?>  </td>
                    <td> <?php echo $results['Images'];?>
                    <img src="upload/<?php echo $results['Images']?>"></td>
                    <td> <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		                     <a href="view.php?id=<?=$results['id'];?>"> View</a></button> 
                         <a onclick="return confirm('Do you want delete this data')" href='delete.php?id=<?php echo $results['id']; ?>'><button class="btn btn-danger">delete</button></a>
                         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $results ['id']; ?>">
                            Edit
                         </button>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $results ['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel<?php echo $results ['id']; ?>"><?php echo $results ['name']; ?> </h1>
                            <h4 class="modal-title fs-4" id="exampleModalLabel">  </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="update.php" method="post">
                          <div class="modal-body">
                           <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $results['id'];?>">
                           <label for="name"> Name</label>
                              <input type="text" name="name" class="form-control" value="<?php echo $results['name'];?>" >
                            </div>
                            <div class="form-group">
                              <label for="email"> Email</label>
                              <input type="email" name="email" class="form-control" value="<?php echo $results['email'];?>" >
                            </div>
                            <div class="form-group">
                              <label for="skills"> Skills</label>
                              <input type="text" name="skills" class="form-control" value="<?php echo $results['skills'];?>" >
                            </div>
                            <div class="form-group">
                              <label for="education"> Education Level</label>
                              <input type="text" name="education" class="form-control" value="<?php echo $results['education'];?>" >
                            </div>
                            <div class="form-group">
                              <label for="wages"> Current Wages</label>
                              <input type="number" name="wages" class="form-control" value="<?php echo $results['wages'];?>" >
                            </div>
                            <div class="form-group">
                              <label for="address"> Address</label>
                              <input type="text" name="address" class="form-control" value="<?php echo $results['address'];?>" >
                            <div class="form-group">
                            <div class="form-group">
                              <label for="gender"> Gender</label>
                              <input type="text" name="gender" class="form-control" value="<?php echo $results['Gender'];?>" >
                            </div>
                            </div>
                              <div class="form-group">
                              <label class="form-label"> Profile Pic</label>
                              <input type="file" name="image" class="form-control" value="<?php echo $results['Images'];?>" >
                            </div>
                           
                         
                          <div class="modal-footer">
                            
                            <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                      <?php }; ?>
        </tr>
       
        
    </tbody>
</table>
</div>
</body>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</html>