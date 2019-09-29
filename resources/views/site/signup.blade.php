<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="stream video online " />
        <meta name="description" content="Author - Personal video tube">
        <meta name="author" content="Soliu F. Okandeji">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script>
			window.Laravel = { csrfToken: '{{ csrf_token()}}'}
		</script>

	    <title>{{ config('app.name', 'Freiptube')}}</title>
        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel Assets -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        <!-- Main CSS -->
        <link rel="stylesheet" href="/css/style.css" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/css/responsive.css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

		<style>
		 .d-none {
			 display: none;
		 }
		</style>

    </head>

    <body class="sing-up-page">
      <!--======= log_in_page =======-->
      <div id="log-in" class="site-form log-in-form">
      
      	<div id="log-in-head">
        	<h1>Sing Up</h1>
            <div id="logo"><a href="#"><img src="/img/logo.png" alt="Logo"></a></div>
        </div>
        
        <div class="form-output">
          <form id="reg-form" onsubmit="return sendData()" action="/register" method="post">
		  @csrf
            <div class="form-group label-floating">
					<label class="control-label">First Name</label>
					<input class="form-control" name="firstname" id="firstname" placeholder="First Name" type="text">
                </div>
                <div class="form-group label-floating">
					<label class="control-label">Last Name</label>
					<input class="form-control" name="lastname" id="lastname" placeholder="Last Name" type="text">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Your Email</label>
					<input class="form-control" name="email" id="email" placeholder="Email Address" type="email">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Your Password</label>
					<input class="form-control" name="password" id="password" placeholder="Password" type="password">
				</div>
                
				<div class="form-group label-floating">
					<label class="control-label">Confirm Your Password</label>
					<input class="form-control" name="cpassword" id="cpassword" placeholder="Confirm password" type="password">
				</div>

				<div class="form-group label-floating is-select">
					<label class="control-label">Your Gender</label>
					<select class="selectpicker form-control" name="gender" id="gender">
						<option value="">Select gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>

				<div class="form-group label-floating">
					<label class="control-label">Date Of Birth</label>
					<input class="form-control" name="dob" placeholder="Date Of Birth" id="dob" type="date">
				</div>
                
				<div class="remember">
					<div class="checkbox">
						<label>
							<input name="optionsCheckboxes" type="checkbox">
							I accept the <a href="#">Terms and Conditions</a> of the website
						</label>
					</div>
				</div>

				<div class="alert alert-danger d-none" id="msg"></div>
                
			  <button type="submit" class="btn btn-lg btn-primary full-width">Complete sign up !</button>
			  <div class="or"></div>

				<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>sign up with Facebook</a>

				<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>sign up with Twitter</a>


				<p>you have an account? <a href="/login"> Sing in !</a> </p>
            </form>
        </div>
      </div>
      <!--======= // log_in_page =======-->
	</body>

</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>

function sendData(){
	// Get user input value
	let firstname = document.getElementById('firstname').value;
	let lastname = document.getElementById('lastname').value;
	let email = document.getElementById('email').value;
	let password = document.getElementById('password').value;
	let cpassword = document.getElementById('cpassword').value;
	let gender = document.getElementById('gender').value;
	let dob = document.getElementById('dob').value;
// Checking for validation
	if(firstname === '' || firstname === 'undefined'){
		document.getElementById('msg').classList.remove('d-none');
		document.getElementById('msg').innerHTML  = 'Please first name is required';
		return false
	}

	if(lastname === '' || lastname === 'undefined'){
		document.getElementById('msg').classList.remove('d-none');
		document.getElementById('msg').innerHTML  = 'Please last name is required';
		return false
	}

	if(email === '' || email === 'undefined'){
		document.getElementById('msg').classList.remove('d-none');
		document.getElementById('msg').innerHTML  = 'Please email is required';
		return false
	}

	if(password === '' || password === 'undefined'){
		document.getElementById('msg').classList.remove('d-none');
		document.getElementById('msg').innerHTML  = 'Please password is required';
		return false
	}

	if(cpassword === '' || cpassword != password){
		document.getElementById('msg').classList.remove('d-none');
		document.getElementById('msg').innerHTML  = 'Password do not match';
		return false
	}

	if(gender === '' || gender === 'undefined'){
		document.getElementById('msg').classList.remove('d-none');
		document.getElementById('msg').innerHTML  = 'Please select a gender';
		return false
	}

	if(dob === '' || dob === 'undefined'){
		document.getElementById('msg').classList.remove('d-none');
		document.getElementById('msg').innerHTML  = 'Please confirm your date of birth';
		return false
	}
}

</script>