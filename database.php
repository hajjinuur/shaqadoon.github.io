<?php
include('sql.php');
session_start();
//this code is an database insert and connection.


if(isset($_POST['btnSubmit']) && isset($_FILES['image'])){
	
    $name=$_POST['name'];
    $email=$_POST['email'];
    $skills=$_POST['skills'];
    $education=$_POST['education'];
    $wages=$_POST['wages'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
	
    	//This is a image connector

    	$image_name=$_FILES['image']['name'];
        $image_size=$_FILES['image']['size'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $error=$_FILES['image']['error'];

        if ($error === 0) {
        	if ($image_size > 1225000) {
        		echo "Fadlan Sawirkaga xajmigiisaa weyn"."<a href='regist.php</a>'";
        	}else{
        		 $img_ex= pathinfo($image_name, PATHINFO_EXTENSION);
        		 $img_ex_to_alc=strtolower($img_ex);

        		 $allowed_exs=array('jpg','jpeg','png');

		        		 if(in_array($img_ex_to_alc, $allowed_exs)){
		            $new_img_name=uniqid("IMG-",true).'.'.$img_ex_to_alc;
		            $img_upload_path='upload/'.$new_img_name;
		            move_uploaded_file($tmp_name, $img_upload_path);
		           
		            //insert into Database

			             $sql="INSERT INTO users(name,email,skills,education,wages,address,Gender,Images)VALUES('$name','$email','$skills','$wages','$address','$education','$gender','$new_img_name')";
	  					  $result=mysqli_query($db,$sql);
	  					  if($result == true){
	  					    $_SESSION['message']='Waxaa soo galay shaqaale cusub';
							header('Location:home.php');
	   						 }

		             }else{
		             	 echo "Fadlan  waxaa ilowday profile  "."<a href='regist.php</a>'";
		             }
        	}
        }else{
        	 echo "Fadlan  waxaa ilowday profile pic "."<a href='regist.php</a>'";
        }

}else{
    echo "Fadlan dhameystir Magacaaga, Emailkaga iyo Xirfadada "."<a href='regist.php</a>'";
}