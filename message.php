<?php
session_start();
error_reporting(0);
include('sql.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if(isset($_POST['btnSubmit'])){
    $path = 'upload/'.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['temp_name'], $path);
    
    $mail = new PHPMailer();

    //Server settings
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'duliwaaye33@gmail.com';                     //SMTP username
    $mail->Password   = 'soomaaliya1';                               //SMTP password
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Host       = "smtp.gmail.com";

    $mail->isHTML();
    $mail->Port       = 465; 

    //to connect to
    $email            = $result['email'];
    $mail->setFrom('duliwaaye33@gmail.com', 'Mailer');
    $mail->Subject    = $_POST['subject'];
    $mail->Body       = $_POST['message'];
    $mail->addAttachment($path);

     // add a Recipient
     $mail->addAddress($email);
     $result=$mail->send();
     if ($result==true){
        $cid        =$_GET['id'];
        $subject    =$_POST['subject'];
        $date       =date('Y-M-D');
        $message    =$_POST['message'];
        $sql="INSERT INTO messages('empolyee_id','subject','message','created')VALUE
        ('$cid','$subject','$message','$path','$date')";
        mysqli_query($db,$sql);
        $_SESSION['message']='This message is sent!!';
        header('Location:view.php');
     }
    
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="col-md-8">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
                <th>File</th>
            </tr>
            <tr>
                <td>Hi</td>
                <td>Hi</td>
                <td>Hi</td>
                <td>Hi</td>
            </tr>
        </thead>
    </table>
</div>
    </body>
</html>
