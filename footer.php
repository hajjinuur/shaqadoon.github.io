<?php
include('sql.php');
include('session.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style type="text/css">
  footer{
   width: 100%;
   height: 30%;
  justify-content: center;
  align-items: center;
   position: absolute;
   
   right: 5px;
   top: 100%;
   padding-bottom: 2px;
   padding-top: 13px;
   margin-bottom: 2px;
   }
 </style>
 <body>
  
 </body>
 <div class="container">
<div class="container my-4">

  <section class="">
  <!-- Footer -->
 <footer class="text-center text-white" style="background-color: #9db7ffe7;">
    <!-- Grid container -->
    <div class="container p-2 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <a href="logout.php">
		<?php echo $_SESSION['username'];?>
	
          <button type="button" class="btn btn-outline-light btn-rounded">
            Logout!
          </button></a>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #4070f4;">
      © 2022 Copyright:
      <a class="text-white" href="regist.php/">@Shaqa-doon.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  </section>
</div>
</div>
 </html>
 
 
