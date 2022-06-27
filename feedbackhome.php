<!DOCTYPE html>
<html>
<head>
	<title>FeedBack | SmartEd</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="feedbackstyle.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#">EduPlex</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    		</button>

	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      		<ul class="navbar-nav ml-auto">
	        		<li class="nav-item">
	        		  <a class="nav-link" aria-current="page" href="index.php">Home</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link" href="learner/learnerlogin.php">Learner</a>
	        		</li>
	       			<li class="nav-item">
	        		  <a class="nav-link" href="instructor/instructorlogin.php">Instructor</a>
	        		</li>
	        		<li class="nav-item">
	         		  <a class="nav-link" href="Courses/courses.php">Courses</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link active" href="feedbackhome.php">Feedback</a>
	        		</li>
	        		<li class="nav-item">
	        		  <a class="nav-link" href="contact/contact.php">Contact Us</a>
	        		</li>
	        	</ul>
	    	</div>
  		</div>
	</nav>

	<div class="feedbackform">
	    <h1 class="feedback_box" style="text-align: center;">Feedback Form</h1>
	    <div class="feedback_question wrap">
		  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
		    <form action="feedback.php" method="post" class="feedback_form">
			  <h2>How satisfied were you with our Service?</h2>
				 <ul class="feedback_ans">
					 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
					 	  <label for="excellent">excellent</label>
					      <div class="check w3"></div>
					 </li>
					 <li><input type="radio" name="view" value="good" id="good"> 
						  <label for="good"> good</label>
					      <div class="check w3ls"></div>
					 </li>
					 <li><input type="radio" name="view" value="neutral" id="neutral">
						 <label for="neutral">neutral</label>
					     <div class="check wthree"></div>
					 </li>
					 <li><input type="radio" name="view" value="poor" id="poor"> 
						  <label for="poor">poor</label>
					      <div class="check w3_agileits"></div>
					 </li>
				 </ul>	  
				<h2>If you have specific feedback, please write to us...</h2>
				<textarea placeholder="Additional comments" class="feeddback_summary" name="comments" required=""></textarea>
				<input type="text" placeholder="Your Name (optional)" name="name"  />
				<input type="email" placeholder="Your Email (optional)" style="padding-left: 10px;" name="email"/>
				<input type="text" placeholder="Your Number (optional)" name="num"  /><br>
				<center><input type="submit" value="submit Feedback" class="feedback_submit" /></center>
		  </form>
		</div>
	</div>

	<footer style="padding-top: 40;">
		<p class="p-3 bg-dark text-white text-center">For more information Contact us</p>
	</footer>


	</body>
</html>


<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web 	template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script> -->