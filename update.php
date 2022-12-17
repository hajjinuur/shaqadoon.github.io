<?
include('sql.php');


$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$skills=$_POST['skills'];
$education=$_POST['education'];
$wages=$_POST['wages'];
$address=$_POST['address'];
$gender=$_POST['gender'];


$result = mysqli_query($db, "UPDATE users set name='
$name', email= '$email',skills='$skills', education='$education', wages='$wages', address='
$address', gender='$gender' WHERE id='$id' ");

if($result==true){
    session_start();
    $_SESSION['message']='Updated Employee information!!';
    header('location:table.php');
}
?>