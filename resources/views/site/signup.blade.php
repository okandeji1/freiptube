<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <!-- CSRF TOKEN -->
      <meta name="csrf-token" content="{{csrf_token()}}">
      <script>
          window.Laravel = { csrfToken: '{{ csrf_token()}}'}
      </script>

      <title>{{ config('app.name', 'Freiptube')}}</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/ico" href="/img/logot.ico">
      <!-- Bootstrap core CSS-->
      <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="{{asset('/css/osahan.css')}}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('/vendor/owl-carousel/owl.theme.css')}}">
      <style>
		 .d-none {
			 display: none;
		 }
	  </style>
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <a href="/"><img src="/img/logot.png" width="100" height="100" class="img-fluid" alt="LOGO"></a>
                        <h5 class="mt-3 mb-3">Welcome to Freiptube</h5>
                        <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
                     </div>
                     <form onsubmit="return sendData()" action="/register" method="POST">
                        <div class="form-group">
                           <label>First name</label>
                           <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
						</div>
						<div class="form-group">
                           <label>Last name</label>
                           <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
						</div>
						<div class="form-group">
						   <label>Your Email</label>
						   <input class="form-control" name="email" id="email" placeholder="Email Address" type="email">
						</div>
                        <div class="form-group">
                           <label>Password</label>
                           <input type="password" class="form-control" name="passpord" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                           <label>Confirm Password</label>
                           <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
						</div>
						<div class="form-group">
                           <label>Your Gender</label>
                           <select name="gender" id="gender" class="form-control">
							   <option value="">Select Gender</option>
							   <option value="male">Male</option>
							   <option value="female">Female</option>
						   </select>
                        </div>
                        <div class="mt-4">
							<div class="alert alert-danger d-none" id="msg"></div>
                           <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign Up</button>
                        </div>
                     </form>
                     <div class="text-center mt-5">
                        <p class="light-gray">Already have an Account? <a href="/login">Sign In</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Create GIFs</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <!-- Owl Carousel -->
      <script src="{{asset('/vendor/owl-carousel/owl.carousel.js')}}"></script>
      <!-- Custom scripts for all pages-->
	  <script src="{{asset('/js/custom.js')}}"></script>
	  
	  <script>

				function sendData(){
				// Get user input value
				let firstname = document.getElementById('firstname').value;
				let lastname = document.getElementById('lastname').value;
				let email = document.getElementById('email').value;
				let password = document.getElementById('password').value;
				let cpassword = document.getElementById('cpassword').value;
				let gender = document.getElementById('gender').value;
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
			}

		</script>
   </body>
</html>