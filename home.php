<?php 

include('header.php');
include('footer.php');
include('session.php');
if (isset($_SESSION['message'])) {
  echo '<div class="alert alert-success">'.$_SESSION['message']."</div>";
  unset($_SESSION['message']);

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
    

      body {
        
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        min-height: 100vh;
		
        margin: 0;
        padding: 0;
      }
      .slide-container{
		margin-top: 50px;
		max-width: 1120px;
		width: 190%;
		height: 69%;
		position: absolute;
        left: 10px;
        right: 10px;
		align-items: center;
		justify-content: center;
		top: 100px;
		background-color: #9db7ffe7;
		padding: 40px;
		
	}

    .slide-content{
		margin:10 50px;
	}
	.card{
		
		border-radius:25px;
		background-color: #fff; 
	}
	.image-content, .card-content{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		padding:5px 5px;

	}
		.image-content{
		position: relative;
		row-gap:5px;
		padding:15px 0;

	}
	.overlay{
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width:100%;
		background-color: #4070f4;
		border-radius: 25px 20px 0 25px;
	}
	.overlay::before,
	.overlay::after{
		content: '';
		position: absolute;
		right: 0;
		bottom: -40px;
		height: 40px;
		width: 40px;
		background-color: #4070f4;

	}
	.overlay::after{
		border-radius: 0 25px 0 0;
		background-color: #fff;
	}
	.card-image{
		position: relative;
		height: 160px;
		width: 160px;
		border-radius: 90px;
		background-color:#fff;
		padding:3px;
	}
	
	h5{
        color: #fff;
      }

	
	.card-image .card-img{
		height: 100%;
		width:100%;
		display: flex;
		object-fit: cover;
		border-radius: 90px;
		border:4px solid #4070f4;
	}
	.name{
		font-size: 20px;
		font-weight: 500;
		color: #333;
	}
	.description{
		font-size: 14px;
		color: #707070;
		text-align: center;
	}
	.button{
		border: none;
		font-size: 15px;
		color: #fff;
		padding: 8px 16px;
		background-color: #4070f4; 
		border-radius: 5px;
		margin: 14px;
		cursor: pointer;
		transition: all 0.3s ease;
	}
	.button:hover{
		background:#265DF2;
	}
	a{
		border: none;
		font-size: 15px;
		color: #fff;
		padding: 8px 16px;
		background-color: #4070f4; 
		border-radius: 5px;
		margin: 14px;
		cursor: pointer;
		transition: all 0.3s ease;
	}
	.float-right{
      margin: left 6px;
      position: relative;
      color:#222;
      margin: bottom 10px;
      bottom: 10px;
      top:0;
    }
    </style>
  </head>

  <body>
    <!-- Swiper -->
	<div class="slide-container">
	<div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
      <?php  
		include('sql.php');
		$sql="SELECT *FROM users";
        $result =mysqli_query($db,$sql);
        $check_conn=mysqli_num_rows($result) > 0;

        if($check_conn){
        	while ($row=mysqli_fetch_array($result)) {
        		?>
        <div class="card swiper-slide">
        <div class="image-content">
        <span class="overlay"></span>
        <div class="card-image">
		<img src="upload/<?php  echo $row['Images']; ?>"  alt="Profile pic" class="card-img">
		</div>
        </div>
        <div class="card-content">
		<h2 class="name"><?php  echo $row['name']; ?></h2>
		<p class="description"> <?php  echo $row['email']; ?> </p>
		

		<button type="button" class="btn btn-primary">
		  <a href="view.php?id=<?=$row['id'];?>"> View More</a></button>
		</div>
		</div>
        <?php	
        	}
        }else{
        	echo 'no personal data entry';
        }
		?>
		

       </div> 
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>
