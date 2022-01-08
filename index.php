<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>marpers web</title>

<link href="./CSS/marper.css" rel="stylesheet" type="text/css">
<link href="./CSS/bootstrap.css" rel="stylesheet" type="text/css">
<!--	script for jquery-->
<script type="text/javascript" src="./JavaScript/jquery-3.6.0.js"></script>

</head>
<body>
	<div class= "logo">
		<img src="./assets/assets-01.png" alt="marpers web logo" height="100px" width="100px">
	</div>
<!--	navbar-->
	<div class ="container">
		<div class="navbarCustom-home"><a href="#">home</a></div>
		<div class="navbarCustom-profile"><a href="#">profile</a></div>
		<div class="navbarCustom-portfolio"><a href="#">portfolio</a></div>
		<div class="navbarCustom-connect"><a href="#">connect</a></div>
	</div>
	<hr>
<!--homepage area-->
	<div class="home">
		<section class="intro" id="intro">
		  <h1 class="introText">hello!</h1>
	      <img class="introPic" src="./assets/assets-02.png" alt="Intro">
	      <p class="introSample">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		  <p class="introSample2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</section>
		<br>
		<br>
		<section class="profile" id="profile">
		  <img class="profilePic" src="./assets/assets-03.png" alt="Profile">
		  <h1 class="profileText">Allow me<br> to introduce myself,</h1>
		  <p class = "profileSample">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		  <h4 class="profileLink"><a href="./homepage.html">know more about me...</a></h4>
		</section>
		<br>
		<br>
		<section class="portfolio" id="portfolio">
			<h1 class="portfolioText">Graphic design is my passion^^</h1>
			<p class = "portfolioSample">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<h4 class="portfolioLink"><a href="./homepage.html">Interested? Browse through my content!</a></h4>
			
		<div class="portfolioWorks">
			<div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
				<button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="./assets/illustrations/Pretty Moon.jpg" class="d-block w-100" alt="Pretty Moon">
				</div>
				<div class="carousel-item">
				  <img src="./assets/illustrations/press freedomv5.png" class="d-block w-100" alt="Defend Press Freedom">
				</div>
				<div class="carousel-item">
				  <img src="./assets/vectors/red.jpg" class="d-block w-100" alt="Red">
				</div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </button>
			</div>
		</div>
		</section>
		<br>
		<br>
		<section class="connect" id="connect">
			<h1 class="connectText">Let's get in touch!</h1>
			<p class="connectSample"><a href="https://www.flaticon.com/authors/swifticons">The following icons are designed by Swifticons from Flaticon</a></p>
			<div class="connectContainer">
				<a href="https://www.pinterest.ph/mariefherv/"><img src="./assets/social icons/160135-brand-collection/svg/pinterest.svg" alt="Pinterest" class="connectImg"></a>
				<a href="https://www.instagram.com/marpergreys"><img src="./assets/social icons/160135-brand-collection/svg/instagram.svg" alt="Instagram" class="connectImg"></a>
				<a href="https://twitter.com/marswebtwt">
				<img src="./assets/social icons/160135-brand-collection/svg/twitter.svg" alt="Behance" class="connectImg"></a>
				<a href="https://behance.com/mariefherv">
				<img src="./assets/social icons/160135-brand-collection/svg/behance.svg" alt="Behance" class="connectImg"></a>
			</div>
			<p class="connectDescription"><b>You may also opt to fill out the contact form which can be found <span class="connectLink"><u>here</u></span></b>.</p>
		</section>
	</div>
	<!-- Modal -->
	<div class="modal-background" id="modal-1">
		<div class="modal-custom">
			<div class="modal-title">
				<h1>Send me a message!</h1>
			</div>
			<div class="modal-description">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<form id="contact">
				<div class="name-label">
					<label for="name" class="labelText">name </label>
				</div>
				<div class="inputName">
					<input type="text" id="name" name="name" size="100%" placeholder="First Name, Last Name (e.g. John Doe)">
				</div>
				<div class="email-label">
					<label for="email" class="labelText">email* </label>
				</div>
				<div class="inputEmail">
					<input type="email" id="email" name="email" size="100%" placeholder="(e.g. johndoe@example.com)">
				</div>
				<div class="subject-label">
					<label for="subject" class="labelText">subject </label>
				</div>
				<div class="inputSubject">
					<input type="text" id="subject" name="subject" maxlength="36" size="100%" placeholder="What's this about?">
				</div>
				<div class="message-label">
					<label for="message" class="labelText">message* </label>
				</div>
				<div class="inputMessage">
					<textarea cols="150" id="msg" placeholder="Feel free to write me anything..."></textarea>
				</div>
				<br>
				<div class="btn-position">
					<button type="button" class="custom-button" id="btnSend">send!</button>
				</div>
			</form>
			<span class="close">x</span>
		</div>
	</div>
	
	<div class="modal-background-sent" id="modal-sent">
		<div class="modal-custom-2" id="modal2">
			<h1>Message sent!</h1>
			<p>I'll get back to you as soon as I can!</p>
			<span class="close-2">x</span>
		</div>
	</div>
	
	
	<footer>
		<p align="center">Copyright &copy; Mariefher Villanueva. All rights reserved.</p>
	</footer>
<!--	script for carousel-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
<!--	script for scroll and modal-->
	<script src="./JavaScript/marper.js"></script>
	
<!--ajax-->
<script>
	$(document).ready(function(){
	$('#btnSend').on('click', function() {
		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var msg = $('#msg').val();
		
		var valid = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

		if(msg!="" && email.match(valid)){	
		//		if the message is not empty and the email is valid
			$.ajax({
				url: "./Backend Programming/ContactForm.php",
				type: "POST",
				data: {
					name: name,
					email: email,
					subject: subject,
					msg: msg
				},
				cache: false,
				success: function(){
					$('#modal-1').removeClass('bg-active');
					$('#modal-sent').addClass('bg-active-2');
					},
				error: function(){
						alert("An unexpected error occured!");
						}			
				}); 	
			}
		else if(!(email.match(valid)) && msg==""){
			//		if email is invalid and the message is empty
			alert('Please fill up the required fields.');
			$('input[type=email]').css("border-width","3px");
			$('input[type=email]').css("borderColor","#f02e3e");
			$('input[type=email]').css("borderStyle","solid");
			$('textarea').css("border-width","3px");
			$('textarea').css("borderColor","#f02e3e");
		}
		else if(!(email.match(valid)) && msg!=""){
			//		if the email is invalid
			alert('Please enter a valid e-mail address.');
			$('input[type=email]').css("border-width","3px");
			$('input[type=email]').css("borderColor","#f02e3e");
			$('input[type=email]').css("borderStyle","solid");
			$('textarea').css("border-width","1px");
			$('textarea').css("borderColor","#000000");
			$('textarea').css("borderStyle","solid");

		}
		else if(msg==""){
			//		if the message is empty
			alert('Please enter your message.');
			$('textarea').css("border-width","3px");
			$('textarea').css("borderColor","#f02e3e");
			$('textarea').css("borderStyle","solid");
			$('input[type=email]').css("border-width","1px");
			$('input[type=email]').css("borderColor","#000000");
			$('input[type=email]').css("borderStyle","solid");
		}
	});
})

</script>


	
</body>
</html>
