<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- Stylesheet -->
		<link rel="stylesheet" href="css/style.css">

		<!--Responsive meta tag-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--jQuery, Popper.js and Bootstrap Javascript-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/jquery-validate.js"></script>

		<!--Bootstrap Stylesheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<!--Google ReCAPTCHA-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/jquery-validate.js"></script>

		<!-- Font Awesome -->
		<script src="https://use.fontawesome.com/afd596ca1b.js"></script>

		<title>Kev/Devo</title>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid p-0">
			<!--            <a class="navbar-brand" href="#">Kev/Devo</a>-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-tabs">
					<li class="nav-item nav-link p-4 text-center">
						<h3><a href="#kev-devo">Kev/Devo</a></h3>
					</li>
					<li class="nav-item nav-link p-4 text-center">
						<h3><a href="#portfolio">Portfolio</a></h3>
					</li>
					<li class="nav-item nav-link p-4 text-center">
						<h3><a href="#about">About</a></h3>
					</li>
					<li class="nav-item nav-link p-4 text-center">
						<h3><a href="#contact">Contact</a></h3>
					</li>
					<!--<span class="sr-only">(current)</span>-->
				</ul>
			</div>
		</nav>

<!--		<div class="nav nav-tabs border-0 mb-4 container-fluid">-->
<!--			<h3 class="nav-item col-2 nav-link p-4 text-center kev-devo"><a href="#kev-devo">Kev/Devo</a></h3>-->
<!--			<h3 class="nav-item col-2 nav-link p-4 text-center portfolio"><a href="#portfolio">Portfolio</a></h3>-->
<!--			<h3 class="nav-item col-2 nav-link p-4 text-center about"><a href="#about">About</a></h3>-->
<!--			<h3 class="nav-item col-2 nav-link p-4 text-center contact"><a href="#contact">Contact</a></h3>-->
<!--		</div>-->
		<main>

			<div id="kev-devo" class="kev-devo"><!--Kev/Devo-->
				<div class="row">
            	<div class="col text-center">
            		<img class="professional-image mb-4 img-fluid rounded-circle" src="images/professional-image.png" height="300" width="300" alt="Kevin D Atkins">
            		<h2 class="text-center">Kevin D. Atkins</h2>
            		<h2 class="texts-center">Full-Stack Web Developer</h2>
            	</div>
            </div>
			</div><!--/Kev/Devo-->

			<div id="portfolio" class="portfolio container-fluid"><!--Portfolio-->
				<div class="row">
					<div class="col-md-4 align-self-center">
						<h2 class="text-center">Portfolio</h2>
					</div>
					<div class="col-md-8 carousel slide" data-ride="carousel" data-interval="6000">
						 <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="images/thomas-millot-276847.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/lou-batier-365323.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/thomas-millot-276847.png" alt="Third slide">
                      </div>
                    </div>
					</div>
				</div>
			</div><!--/Portfolio-->

			<div id="about" class="about"><!--About-->
				<div class="row">
					<div class="col">
						<h2 class="text-center">About</h2>
						<p class="text-center">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique massa at neque scelerisque finibus. Phasellus bibendum leo vitae ipsum convallis mattis id eget arcu. Nulla eu tortor tortor. Aenean nec odio sed orci pulvinar fermentum. Aliquam semper odio elit, a pharetra lorem vehicula rutrum. Proin cursus laoreet dui ornare commodo. Nullam id justo et ligula sodales mattis id non arcu. Donec sollicitudin pretium lectus, quis ultricies diam bibendum id. Praesent sapien leo, gravida vestibulum orci eu, fermentum elementum nulla.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 align-center">
						<h3 class="text-center">Back-End</h3>
						<ul class="d-block">
							<li>mySQL & Data Design</li>
							<li>Query Optimization</li>
							<li>Object Oriented Programming</li>
							<li>C++</li>
							<li>Java</li>
							<li>PHP</li>
							<li>Ruby</li>
							<li>Terminal/Git</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h3 class="text-center">Front-End</h3>
						<ul>
							<li>HTML/CSS</li>
							<li>Bootstrap</li>
							<li>Javascript</li>
							<li>Angular 5 & Node</li>
							<li>UI/UX</li>
						</ul>
					</div>
					<div class="col-md-4 align-center">
						<h3 class="text-center">Security</h3>
						<ul>
							<li>Session Security</li>
							<li>PHP Type Declarations</li>
							<li>Angular Form Validation</li>
							<li>Cookie Security</li>
							<li>SQL Injection</li>
							<li>Shell Injection</li>
							<li>Encrypted Property Files</li>
						</ul>
					</div>
				</div>
			</div><!--/About-->

<!--			<div id="contact" class="contact container">--><!--Contact-->

				<form id="contact" class="contact container" action="php/mailer.php" method="post" novalidate>
					<div div class="col-md-6 mx-auto">
						<div class="form-group">
							<label for="name">Name <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- Google reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LealjoUAAAAAGWURKR7BdJmgMd-hkVEEc0ytNp6"></div>

						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					</div>
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
<!--			</div>--> <!--/Contact-->

		</main>

		<div id="footer" class="footer m-4">
			<div class="row">
				<div class="col-md-5 mx-auto text-center">
					<a class="linkedin" href="https://www.linkedin.com/in/kevin-atkins/"><i class="fa fa-github fa-3x mx-4" aria-hidden="true"></i></a>
					<a class="github" href="https://github.com/KDAtkins"><i class="fa fa-linkedin-square fa-3x mx-4" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>

<!--		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>-->
<!--     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
	</body>
</html>