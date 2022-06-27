<!DOCTYPE html>
<html>
<head>
	<title>SmartEd : An E-Learning Website</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="index.php"><b>SmartEd</b></a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    		</button>

	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      		<ul class="navbar-nav ml-auto">
	        		<li class="nav-item">
	        		  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link" href="learner/learnermodule/login.php">Learner</a>
	        		</li>
	       			<li class="nav-item">
	        		  <a class="nav-link" href="instructor/instructorlogin.php">Instructor</a>
	        		</li>
	        		<li class="nav-item">
	         		  <a class="nav-link" href="Courses/courses.php">Courses</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link" href="feedbackhome.php">Feedback</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link" href="contact/contact.php">Contact Us</a>
	        		</li>
	        	</ul>
	    	</div>
  		</div>
	</nav>
	
	<!-- Home image -->
	<div class="home-image" style="padding-bottom: 40px;">
		<img src="images/home_image.jpeg" alt="Home image" style="width: 100%">
	</div>

	<hr style="padding-bottom: 30px;">

	<!-- Top categories -->
	<div class="top categories">
		<div class="container-fluid">
			<h1 style="padding-bottom: 30px; text-align: center;" ><b>Top Categories</b></h1>
			<!-- 1st row -->
			<div class="row" style="text-align: center;">
				<div class="col-lg-3 col-md-4 col-6" style="padding-bottom: 15px;" >
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">HTML & CSS</a></h4>
	   					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-6">
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">Python Programming</a></h4>
	   					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-6"  >
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">C++ Programming</a></h4>
	   					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-6"  >
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">Adobe Photoshop</a></h4>
	   					</div>
					</div>
				</div>

			</div>

			<!-- 2nd row -->
			<div class="row" style="text-align: center;">
				<div class="col-lg-3 col-md-4 col-6" style="padding-bottom: 50px;" >
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">Java Programming</a></h4>
	   					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-6"  >
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">Database Design</a></h4>
	   					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-6"  >
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">Data Analysis</a></h4>
	   					</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-6"  >
	                   <div class="card" style="width: 260px;">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">MySQL</a></h4>
	   					</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<hr style="padding-bottom: 10px;">

	<!-- Courses -->
	<div class="back" style="height: 650px; width: 100%; margin-top: 150px; color: #fff; text-align: center; padding-top: 0px;">
		<h1 style="padding-top: 50px; padding-bottom: 50px; font-size: 120"><b>Top Courses</b></h1>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12"  style="padding-top: 30px;">
	                   <div class="card" style="width: 350px; height: 350px">
	  					<img class="card-img-top" src="images/html&css.png" alt="Card image"  style="width: 348px; height: 200px">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">HTML & CSS Courses</a></h4>
	   						<p class="card-text" style="color: #000;">Start designing your website with the help of HTML & CSS</p>
	  					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
	                   <div class="card" style="width: 360px; height: 350px">
	  					<img class="card-img-top" src="images/python.png" alt="Card image" style="width: 350px; height: 200px">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">Python Programming</a></h4>
	   						<p class="card-text" style="color: #000;">Start learning Python now!</p>
	  					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12" style="padding-top: 30px;">
	                   <div class="card" style="width: 350px; height: 350px">
	  					<img class="card-img-top" src="images/c++.png" alt="Card image" style="width: 348px; height: 200px">
	  					<div class="card-body">
	   						<h4 class="card-title"><a href="Courses/courses.php" style="color: #000;">C & C++</a></h4>
	   						<p class="card-text" style="color: #000;">Start your coding with C & C++ language</p>
	  					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Members -->
	<section class="my-5">
		<div>
			<h2 class="text-center" style="padding-top: 10px; padding-bottom: 20px;"><b>Members</b></h2>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 ">
	                   <div class="card"  style="width: 348px; height: 250px;">
	  					<img class="card-img-top" src="images/mem1.jpg" alt="Card image">
	  					<div class="card-body">
	   						<h4 class="card-title">Dhwani Kutmutia</h4>
	   						<p class="card-text">Student</p>
	  					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 ">
	                   <div class="card">
	  					<img class="card-img-top" src="images/mem2.jpg" alt="Card image">
	  					<div class="card-body">
	   						<h4 class="card-title">Saakshi Pawar</h4>
	   						<p class="card-text">Student</p>
	  					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 ">
	                   <div class="card">
	  					<img class="card-img-top" src="images/mem3.jpg" alt="Card image">
	  					<div class="card-body">
	   						<h4 class="card-title">Kirti Gawade</h4>
	   						<p class="card-text">Student</p>
	  					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 ">
	                   <div class="card">
	  					<img class="card-img-top" src="images/mem4.jpg" alt="Card image">
	  					<div class="card-body">
	   						<h4 class="card-title">Shweta Upadhyay</h4>
	   						<p class="card-text">Student</p>
	  					</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 ">
	                   <div class="card">
	  					<img class="card-img-top" src="images/mem5.jpg" alt="Card image">
	  					<div class="card-body">
	   						<h4 class="card-title">Priyanka Ghule</h4>
	   						<p class="card-text">Guide</p>
	  					</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="footer-area">
		<div class="footer-wave-box">
			<div class="footer-wave footer-animation"></div>
		</div>
		<div class="main">
			<div class="footer">
				<div class="single-footer">
					<h4><b>About us</b></h4>
					<p> We are Third year Engineering students of Shah and anchor Kutchhi Engineering college, Mumbai , Maharashtra <br><br>This site is not only for all the students who wants to learn various subjects while sitting at home but also for the teachers who wants to show their skills by teaching online.</p>
					<div class="footer-social">
						<a href="https://www.facebook.com/dhwani.kutmutia"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/in/dhwani-kutmutia-a2b6511b2/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://instagram.com/dhwani_kutmutia?utm_medium=copy_link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/in/dhwani-kutmutia-a2b6511b2/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="single-footer">
					<h4><b>Main menu</b></h4>
					<ul>
						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>home</a></li>
						<li><a href="Courses/courses.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>courses</a></li>
						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>About us</a></li>
						<li><a href="contact/contact.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Contact us</a></li>
					</ul>
				</div>
				<div class="single-footer">
					<h4><b>Quick links</b></h4>
					<ul>
						<li><a href="Courses/courses.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>HTML Course</a></li>
						<li><a href="Courses/courses.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>CSS Course</a></li>
						<li><a href="Courses/courses.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>PHP courses</a></li>
						<li><a href="Courses/courses.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Python Courses</a></li>
					</ul>
				</div>
			</div>
			<div class="copy">
				<p>&copy; 2021 all rights reserved</p>
			</div>
			<div class="adminlogin.php" style=" text-align: center;">
				<a href="http://localhost/website/admin/dashboard/index.php" style="color: #fff;">Admin</a>
			</div>
		</div>
	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>