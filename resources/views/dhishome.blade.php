<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('image/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>DHISHA</title>
		<link rel="icon" href="{{ asset('image/icon.ico') }}" type="image/gif" sizes="16x16">

	{{-- CSRF Token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script> -->

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="{{ asset('bootstrap3/css/bootstrap.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
	{{-- Styles --}}
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

	<link href="{{ asset('css/hipster_cards.css') }}" rel="stylesheet"/>
	<script src="{{ asset('js/hipster-cards.js') }}"></script>

	<!-- modal table -->
	<!-- <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" /> -->

	<!-- login links -->
	<link href="{{ asset('login-register.css') }}" rel="stylesheet" />
	<script src="{{ asset('login-register.js') }}" type="text/javascript"></script>

	<!-- blood link -->
	<!-- <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/material-bootstrap-wizard.js"></script>
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" /> -->

	<!-- scroll js -->
	<script src="{{ asset('js/scroll.js') }}" type="text/javascript"></script>


	<!--     Font Awesome     -->
	<link href="{{ asset('bootstrap3/css/font-awesome.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

	<link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/logo.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/logo.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/gsdk.css') }}" rel="stylesheet" />

	<!gallery>
<style media="screen">

.gallery-title
{
	font-size: 36px;
	color: rgba(52, 172, 220, 0.98);
	text-align: center;
	font-weight: 500;
	margin-bottom: 70px;
}
.gallery-title:after {
	content: "";
	position: absolute;
	width: 7.5%;
	left: 46.5%;
	height: 45px;
	border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
	font-size: 18px;
	border: 1px solid rgba(52, 172, 220, 0.98);
	border-radius: 5px;
	text-align: center;
	color: rgba(52, 172, 220, 0.98);
	margin-bottom: 30px;

}
.filter-button:hover
{
	font-size: 18px;
	border: 1px solid rgba(52, 172, 220, 0.98);
	border-radius: 5px;
	text-align: center;
	color: #ffffff;
	background-color: rgba(52, 172, 220, 0.98);

}
.filter-button.active
{
	background-color: rgba(52, 172, 220, 0.98);
	color: white;
	border-color: rgba(52, 172, 220, 0.98);
}
.port-image
{
	width: 100%;
}

.gallery_product
{
	margin-bottom: 30px;
}

</style>


<style media="screen">
section#contact {
    background-color:rgba(52, 172, 220, 0.98);
    background-image: url('');
    background-position: center;
    background-repeat: no-repeat;
}
section {
    padding: 30px 0PX;
}
section#contact .section-heading {
    color: white;
}
section#contact .form-group {
    margin-bottom: 25px;
}
section#contact .form-group input,
section#contact .form-group textarea {
    padding: 20px;
}
section#contact .form-group input.form-control {
    height: auto;
}
section#contact .form-group textarea.form-control {
    height: 236px;
}
section#contact .form-control:focus {
    border-color: #fed136;
    box-shadow: none;
}
section#contact ::-webkit-input-placeholder {
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color:#92a5aa;
}
.gellary_bg_none img{
	width: 100%;
	height: 250px;
}
section#contact :-moz-placeholder {
    /* Firefox 18- */
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color:#92a5aa;
}
section#contact ::-moz-placeholder {
    /* Firefox 19+ */
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color:#92a5aa;
}
section#contact :-ms-input-placeholder {
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color:#92a5aa;
}
section#contact .text-danger {
    color: #e74c3c;
}

.about_our_company{
    text-align: center;
}
.about_our_company h1{
    font-size: 25px;
}
.titleline-icon {
    position: relative;
    max-width: 100px;
    border-top: 4px double #F99700;
    margin: 20px auto 20px;
}
.titleline-icon:after {
    position: absolute;
    top: -11px;
    left: 0;
    right: 0;
    margin: auto;
    font-family: 'FontAwesome';
    content: "\f141";
    font-size: 20px;
    line-height: 1;
    color: #F99700;
    text-align: center;
    vertical-align: middle;
    width: 40px;
    height: 20px;
    background: #ffffff;

}

</style>

</head>
<body>

	<div id="navbar-full">
		<div class="container">
			<nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">

				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- <a href="http://creative-tim.com"> -->
							<!-- <div class="logo-container"> -->
								<!-- <div class="logo">
								<img src="assets/img/new_logo.png">
							</div> -->
							<div class="logo-container">

								<a href="#dhisha">
							<div class="navbar-brand">
								DHISHA
							</div>
						</a>
							<!-- uncollapsable elements -->
							<!-- <ul class="nav navbar-nav visible-xs">
								<li><a href="javascript:void(0)" data-toggle="modal" onclick="openLoginModal();" type="button" class="pull-right"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
								<li><a href="#"  class="pull-right" data-toggle="modal" data-target="#blModal"> <span class="glyphicon glyphicon-tint" aria-hidden="true"></span></a></li>
	      			</ul> -->
						</div>
						<!-- </div> -->
					<!-- </a> -->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-center">
						<li><a href="#par1">Who We Are</a></li>
						<li><a href="#par2">What We Do</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#contact">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li><a href="javascript:void(0)" data-toggle="modal" onclick="openLoginModal();" class="btn btn-round btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login / Sign-Up</a></li>
						@else
						<li><a href="/home"  class="btn btn-round btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }}</a></li>
						<li><a href="{{ route('logout') }}"
								onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();" value="{{ csrf_token() }}" class="btn btn-round btn-default">
												 <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								{!! trans('titles.logout') !!} {{csrf_field()}}
						</a></li>


						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" value="{{ csrf_token() }}">
								{{ csrf_field() }}
						</form>
						@endif
						<li><a href="#" class="btn btn-round btn-default" data-toggle="modal" data-target="#blModal"> <span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Blood Donors</a></li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<!-- blood donors modal starts-->
		<div class="modal fade" id="blModal" tabindex="-1" role="dialog" aria-labelledby="BloodDonDL" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4><span class="glyphicon glyphicon-search glyphblue" aria-hidden="true"></span> Search for Blood Donor</h4>
					</div>

					<form action='/donorlist' method='post'>
					<div class="modal-body">



						<div class="row">





					<div class="" style="padding-left: 20%; padding-right: 20%;">
						<div class="form-group  label-floating">
							<label class="control-label">Blood Group</label>
							<select name="bgroup" class="form-control" required>
								<option disabled="" selected=""></option>
								<option value="...">Search All</option>
								<option value="A+VE">A+</option>
								<option value="A-VE">A-</option>
								<option value="A1+">A1+</option>
								<option value="A1-">A1-</option>
								<option value="A1B+">A1B+</option>
								<option value="A1B-">A1B-</option>
								<option value="A2+">A2+</option>
								<option value="A2-">A2-</option>
								<option value="A2B+">A2B+</option>
								<option value="A2B-">A2B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="B+VE">B+</option>
								<option value="B-VE">B-</option>
								<option value="Bombay Blood Group">Bombay Blood Group</option>
								<option value="INRA">INRA</option>
								<option value="O+VE">O+</option>
								<option value="O-VE">O-</option>

							</select>
						</div>
					</div>





				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<button type="button" class="btn btn-danger btn-round" data-dismiss="modal"><span class="glyphicon glyphicon-remove glyphred" aria-hidden="true"></span> Cancel</button>
						<button type="submit" value="Search" class="btn btn-primary btn-round ">
						<span class="glyphicon glyphicon-search glyphblue" aria-hidden="true"></span> Search</button>
					</div>

				</div>





<!-- wizard container -->

</div>
{{csrf_field()}}
</form>

<!-- <div class="modal-footer">

<div class="divider"></div>

<button type="button" class="btn btn-primary btn-round btn-sm"><span class="glyphicon glyphicon-search glyphblue" aria-hidden="true"></span> Search</button>
</div> -->
</div>
</div>
</div>
<!-- blood donors modal ends -->

<!-- login form starts -->
<div class="modal fade login" id="loginModal">
	<div class="modal-dialog login animated">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login with</h4>
			</div>
			<div class="modal-body">
				<div class="box">
					<div class="content">
						<div class="social">
							<!-- <a class="circle github" href="/auth/github">
							<i class="fa fa-github fa-fw"></i>
						</a> -->
						<a id="google_login" class="circle google" href="{{route('social.redirect',['provider' => 'google'])}}">
							<i class="fa fa-google-plus fa-fw"></i>
						</a>
						<a id="facebook_login" class="circle facebook" href="{{ route('social.redirect',['provider' => 'facebook']) }}">
							<i class="fa fa-facebook fa-fw"></i>
						</a>
					</div>
					<div class="division">
						<div class="line l"></div>
						<span>or</span>
						<div class="line r"></div>
					</div>

					<div class="error"></div>

					<div class="form loginBox">


						<form method="POST" role="form" action="{{ route('login') }}" accept-charset="UTF-8">
							  {{ csrf_field() }}

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<input id="email" class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
							@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
							@endif
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

							<input id="password" class="form-control" type="password" placeholder="Password"  name="password" required>
							@if ($errors->has('password'))
									<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
							@endif
					</div>



									<label class="checkbox" for="checkbox1">
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									</label>



									<button type="submit" class="btn btn-default btn-login">
											Login
									</button>
							<!-- <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()"> -->

							<a class = "text-center" href="{{ route('password.request') }}">
									Forgot Your Password?
							</a>
						</form>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="content registerBox" style="display:none;">
					<div class="form">
						<!-- <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8"> -->
						  {!! Form::open(['route' => 'register', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST'] ) !!}
							{{ csrf_field() }}
							<!-- <input id="Name" class="form-control" type="text" placeholder="Name" name="name"> -->
							<div class="{{ $errors->has('name') ? ' has-error' : '' }}">

									<div >
											{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Username', 'id' => 'name', 'required', 'autofocus']) !!}
											@if ($errors->has('name'))
													<span class="help-block">
															<strong>{{ $errors->first('name') }}</strong>
													</span>
											@endif
									</div>
							</div>
							<!-- <input id="email" class="form-control" type="text" placeholder="Email" name="email"> -->
							<!-- <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

									<div class="form-control">
											{!! Form::hidden('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'first_name']) !!}
											@if ($errors->has('first_name'))
													<span class="help-block">
															<strong>{{ $errors->first('first_name') }}</strong>
													</span>
											@endif
									</div>
							</div>

							<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

									<div class="form-control">
											{!! Form::hidden('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'last_name']) !!}
											@if ($errors->has('last_name'))
													<span class="help-block">
															<strong>{{ $errors->first('last_name') }}</strong>
													</span>
											@endif
									</div>
							</div> -->

							<div class="{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom: 5px;">

									<div >
											{!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'E-Mail Address', 'required']) !!}
											@if ($errors->has('email'))
													<span class="help-block">
															<strong>{{ $errors->first('email') }}</strong>
													</span>
											@endif
									</div>
							</div>
							<!-- <input id="password" class="form-control" type="password" placeholder="Password" name="password"> -->
							<div class="{{ $errors->has('password') ? ' has-error' : '' }}">


											{!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password', 'required']) !!}
											@if ($errors->has('password'))
													<span class="help-block">
															<strong>{{ $errors->first('password') }}</strong>
													</span>
											@endif

							</div>

							<div >

									<div >
											{!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'placeholder' => 'Confirm Password', 'required']) !!}
									</div>
							</div>

							<!-- <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation"> -->

							<div >
									<div >
											<div class="g-recaptcha" data-sitekey=6LetbxwUAAAAAPSFjCi2CCtRZMZoyIaP8jCTO9Mq></div>
									</div>
							</div>

							<input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="forgot login-footer">
				<span>Looking to
					<a href="javascript: showRegisterForm();">create an account</a>
					?</span>
				</div>
				<div class="forgot register-footer" style="display:none">
					<span>Already have an account?</span>
					<a href="javascript: showLoginForm();">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- login form ends -->
</div>
<!--  end container-->


<div id="dhisha" class="blurred-container">

	<div class="img-src bghome1 " ></div>
	<div class='img-src blur bghome2' ></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="motto">
					<div id="overlay_image"><img src="{{ asset('image/logo.png') }}" align="middle"></div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="heromotto">
					<h1>HELP CHANGE A CHILD'S LIFE</h1>
					<p>All children have the right to a healthy, happy and fulfilling life. Donate Money & Support Charity to Keep children safe & free from harm.
						<br/><br/><button class="btn btn-info btn-round btn-fill" data-toggle="modal" data-target="#donate">DONATE</button></p>



					</div>

				</div>



		</div>


	</div>

</div>







<!-- padding:50px 80px -->
<!-- paralaxx test -->
<!-- <div id=par1 class="main">
	<div id=par1 class="space"></div>
	<div  style="color: #ffffff;background-color:#000000;padding:50px 80px;text-align:center;text-align: justify;">
		<h3 style="text-align:center;">Parallax Demo</h3>
		<p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>

	</div>
</div> -->
<!-- paralax test ends -->
	<!-- cards -->

	<div class="modal fade don" id="donate">
		<div class="modal-dialog login animated">
			<div class="modal-content">

				<div class="container">
	<div class="row don ">
	<!-- You can make it whatever width you want. I'm making it full width
	on <= small devices and 4/12 page width on >= medium devices -->
	<div class="col-xs-12 col-md-4">


	<!-- CREDIT CARD FORM STARTS HERE -->
	<div class="panel panel-default credit-card-box">
	<div class="panel-heading display-table" >
	<div class="row display-tr" >
	<h3 class="panel-title display-td" >Payment Details</h3>
	<div class="display-td" >
	<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
	</div>
	</div>
	</div>
	<div class="panel-body">
	<form role="form" id="payment-form">
	<div class="row">
	<div class="col-xs-12">
	<div class="form-group">
	<label for="cardNumber">CARD NUMBER</label>
	<div class="input-group">
	<input
	type="tel"
	class="form-control"
	name="cardNumber"
	placeholder="Valid Card Number"
	autocomplete="cc-number"
	required autofocus
	/>
	<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
	</div>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-7 col-md-7">
	<div class="form-group">
	<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
	<input
	type="tel"
	class="form-control"
	name="cardExpiry"
	placeholder="MM / YY"
	autocomplete="cc-exp"
	required
	/>
	</div>
	</div>
	<div class="col-xs-5 col-md-5 pull-right">
	<div class="form-group">
	<label for="cardCVC">CV CODE</label>
	<input
	type="tel"
	class="form-control"
	name="cardCVC"
	placeholder="CVC"
	autocomplete="cc-csc"
	required
	/>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12">

	</div>
	</div>
	<div class="row">
	<div class="col-xs-12">
	<button class="btn btn-success btn-lg btn-block" type="submit">Start Subscription</button>
	</div>
	</div>
	<div class="row" style="display:none;">
	<div class="col-xs-12">
	<p class="payment-errors"></p>
	</div>
	</div>
	</form>
	</div>
	</div>
	<!-- CREDIT CARD FORM ENDS HERE -->


	</div>



	</div>
	</div>

		<!-- If you're using Stripe for payments -->
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

	</body>

			</div>
		</div>
	</div>


	<div class="space-100"></div>


<div id=par1 class="main navigation-example">
	<div class="space-100"></div>
	<div class="col-md-12 container">
	    <div id="map">

				<div class="row">
					<div class="col-md-5 col-sm-12">
						<div  class="text-center">
							<h1 class="text-center">Who We Are

								<small class="subtitle">Get to know us</small></h1>
								<hr>
							<!-- <img src="assets/img/dulau.jpg" alt="Rounded Image" class="img-rounded img-responsive img-dog"> -->
						</div>
					</div>
					<!-- body content -->
					<!-- col-md-5 col-sm-12
					col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1 -->
					<div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">

						<!-- <h1 class="text-center">Who We Are

							<small class="subtitle">Get to know us</small></h1>
							<hr> -->
							<p style="text-align: justify;text-justify: inter-word;">
								ജീവിതത്തിൽ ഏറ്റവും സുന്ദരമായ കാലഘട്ടം എന്ന് വിശേഷിപ്പിക്കാറുള്ളത് യുവത്വത്തെ ആയിരിക്കും .അതോടൊപ്പം തന്നെ ഏറെ കുറ്റപ്പെടുത്തലുകളും ഉണ്ടാകാറുള്ളത് യുവത്വത്തിന് നേരെ തന്നെ ആണ് . മദ്യത്തിനും മയക്കുമരുന്നിനും കീഴടങ്ങി സെൽഫി സ്റ്റിക്കിലും സോഷ്യൽ സൈറ്റുകളിലും മാത്രം അഭിരമിക്കുന്ന ധൂർത്ത്‌ ജീവിതങ്ങളായാണ് ഇന്ന് യുവത്വം നിർവചിക്കപ്പെടുന്നത് .
							</p>
							<p style="text-align: justify;text-justify: inter-word;">
								ഒരു പക്ഷെ 'ദിശ'യെ കുറിച് സംസാരിച്ചു തുടങ്ങേണ്ടതും ഇവിടെ നിന്ന് തന്നെയാണ് .പണത്തട്ടു തൂക്കി ഭാവിയെ സ്വപ്നം കാണാൻ ചെറുപ്പക്കാരെ പഠിപ്പിക്കുന്ന പുതിയ കാലത്തിന്റെ പ്രവണതകളോട് പൂർണമായി മുഖം തിരിച്ചു കൊണ്ട് നാം ജീവിക്കുന്ന സമൂഹത്തോട് നമുക്ക് നിർവഹിക്കാൻ ഉത്തരവാദിത്തങ്ങൾ ഏറെയുണ്ട് എന്ന കാഴ്ചപാട് ദിശയുടെ അന്തസത്ത : അത് ഞങ്ങളുടെ യുവത്വത്തിന് വസന്തം വിരിയിക്കാനാകുമെന്ന വലിയ ഓർമപ്പെടുത്തൽ കൂടിയാണ് .രാഷ്ട്രീയ മത പ്രസ്ഥാനങ്ങളുടെ കീഴിൽ പ്രവർത്തിക്കുന്ന ഒരു പാട് സാമൂഹിക സംഘടനകൾ നമുക്ക് ചുറ്റും ഉണ്ട് .സ്ഥാപിത താല്പര്യങ്ങൾക്ക് അപ്പുറത്തേക്ക് എത്രത്തോളം സ്വതന്ത്രമായ ഇടപെടലുകൾ അവയ്ക്ക് സാധ്യമാകും എന്ന് ചിന്തിച്ചിടത്ത് നിന്നു തന്നെയാണ് 'ദിശ ' എന്ന യുവ വിദ്യാർത്ഥി കൂട്ടായ്മ ആരംഭിക്കുന്നത്.നന്മ തന്നെയാണ് ജാതീയും മതവും നന്മയുടേത് തന്നെയാണ് രാഷ്ട്രീയവും എന്ന വിശാലമായ കാഴ്ചപ്പാടോടുകൂടി ഒരു വർഷത്തിലുപരിയായി ദിശ ജനങ്ങൾക്കിടയിൽ പ്രവർത്തിക്കുന്നു . കൂട്ട് ,പച്ച ,ഇടം എന്നിങ്ങനെ വ്യത്യസ്ത വിങ്ങുകളായാണ് ദിശയുടെ പ്രവർത്തങ്ങൾ.
							</p>


						</div>

					</div>


			</div> <!-- This one wants to be 100% height -->
	</div>
</div>


<div id=par2 class="main navigation-example">
<div class="space-100"></div>
	<div class="col-md-12 container">
	    <div id="map">

				<div class="row">
					<div class="col-sm-12">
						<div  class="text-center">
							<h1 class="text-center">What We Do

								<small class="subtitle">Our Divisions</small></h1>
								<h5>വിവിധ വിങ്ങുകളായാണ് ദിശയുടെ പ്രവർത്തനങ്ങൾ</h5>
								<hr>
							<!-- <img src="assets/img/dulau.jpg" alt="Rounded Image" class="img-rounded img-responsive img-dog"> -->
						</div>
					</div>
					<div class="col-sm-12">
						<!-- card 1 -->
						<div class="col-sm-4" style="height:100px">
							<div class="card text-center" style="width: 40rem;">
							<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
							<div class="card-block">
								<h4 class="card-title">പച്ച</h4>
								<p class="card-text">മണ്ണും മനുഷ്യനുമായിട്ടുള്ള ബന്ധം വലിയ ഒരു സംസ്ക്കാരമായി തന്നെ നമുക്കിടയിൽ വളർന്നുവന്നിട്ടുള്ളതാണ് .പരസ്പര ആശ്രിതത്വത്തിന്റെ വലിയ സംസ്കാരം.അതിനെ മുറുകെ പിടിക്കാനാണ് പച്ച യുടെ ലക്ഷ്യം</p>
								<a href="#" class="btn btn-primary">More...</a>
							</div>
						</div>
						</div>
						<!-- card 1 ends -->
						<!-- card 2 -->
						<div class="col-sm-4" style="height:100px">


						<div class="card text-center" style="width: 40rem;">
							<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
							<div class="card-block">
								<h4 class="card-title">ഇടം</h4>
								<p class="card-text">സ്ത്രീക്കും പുരുഷനും തുല്യ അവകാശങ്ങളുള്ള സ്വന്തന്ത്രമായ പൊതുഇടങ്ങൾ എന്ന പ്രഖ്യാപനമാണ് ദിശയുടെ ഇടം എന്ന വിങ് .</p>
								<a href="#" class="btn btn-primary">More...</a>
							</div>
						</div>
					</div>
						<!-- card 2 ends -->
						<!-- card 3 -->
						<div class="col-sm-4" style="height:100px">


						<div class="card text-center" style="width: 40rem;">
							<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
							<div class="card-block">
								<h4 class="card-title">കൂട്ട് </h4>
								<p class="card-text"><small>കളിച്ചു നടക്കേണ്ട പ്രായത്തിൽ തന്നെ വേദനകളോട് പൊരുതേണ്ടി വന്ന ഞങ്ങളുടെ കൂടെ പിറപ്പുകൾ .അവർക്ക് പണവും ഒരു പക്ഷെ അതിലുപരിയായി മുറുകെ പിടിക്കാൻ ഒരു കൈവിരലകനാണ് കൂട്ട് ശ്രമിക്കുന്നത് . </small></p>
								<a href="#" class="btn btn-primary">More...</a>
							</div>
						</div>
						</div>
						<!-- card 3 ends -->

					</div>
					<!-- body content -->
					<!-- col-md-5 col-sm-12
					col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1 -->
					<!-- <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">



							<p style="text-align: justify;text-justify: inter-word;">
								ജീവിതത്തിൽ ഏറ്റവും സുന്ദരമായ കാലഘട്ടം എന്ന് വിശേഷിപ്പിക്കാറുള്ളത് യുവത്വത്തെ ആയിരിക്കും .അതോടൊപ്പം തന്നെ ഏറെ കുറ്റപ്പെടുത്തലുകളും ഉണ്ടാകാറുള്ളത് യുവത്വത്തിന് നേരെ തന്നെ ആണ് . മദ്യത്തിനും മയക്കുമരുന്നിനും കീഴടങ്ങി സെൽഫി സ്റ്റിക്കിലും സോഷ്യൽ സൈറ്റുകളിലും മാത്രം അഭിരമിക്കുന്ന ധൂർത്ത്‌ ജീവിതങ്ങളായാണ് ഇന്ന് യുവത്വം നിർവചിക്കപ്പെടുന്നത് .
							</p>
							<p style="text-align: justify;text-justify: inter-word;">
								ഒരു പക്ഷെ 'ദിശ'യെ കുറിച് സംസാരിച്ചു തുടങ്ങേണ്ടതും ഇവിടെ നിന്ന് തന്നെയാണ് .പണത്തട്ടു തൂക്കി ഭാവിയെ സ്വപ്നം കാണാൻ ചെറുപ്പക്കാരെ പഠിപ്പിക്കുന്ന പുതിയ കാലത്തിന്റെ പ്രവണതകളോട് പൂർണമായി മുഖം തിരിച്ചു കൊണ്ട് നാം ജീവിക്കുന്ന സമൂഹത്തോട് നമുക്ക് നിർവഹിക്കാൻ ഉത്തരവാദിത്തങ്ങൾ ഏറെയുണ്ട് എന്ന കാഴ്ചപാട് ദിശയുടെ അന്തസത്ത : അത് ഞങ്ങളുടെ യുവത്വത്തിന് വസന്തം വിരിയിക്കാനാകുമെന്ന വലിയ ഓർമപ്പെടുത്തൽ കൂടിയാണ് .രാഷ്ട്രീയ മത പ്രസ്ഥാനങ്ങളുടെ കീഴിൽ പ്രവർത്തിക്കുന്ന ഒരു പാട് സാമൂഹിക സംഘടനകൾ നമുക്ക് ചുറ്റും ഉണ്ട് .സ്ഥാപിത താല്പര്യങ്ങൾക്ക് അപ്പുറത്തേക്ക് എത്രത്തോളം സ്വതന്ത്രമായ ഇടപെടലുകൾ അവയ്ക്ക് സാധ്യമാകും എന്ന് ചിന്തിച്ചിടത്ത് നിന്നു തന്നെയാണ് 'ദിശ ' എന്ന യുവ വിദ്യാർത്ഥി കൂട്ടായ്മ ആരംഭിക്കുന്നത്.നന്മ തന്നെയാണ് ജാതീയും മതവും നന്മയുടേത് തന്നെയാണ് രാഷ്ട്രീയവും എന്ന വിശാലമായ കാഴ്ചപ്പാടോടുകൂടി ഒരു വർഷത്തിലുപരിയായി ദിശ ജനങ്ങൾക്കിടയിൽ പ്രവർത്തിക്കുന്നു .
							</p>


						</div> -->

					</div>


			</div> <!-- This one wants to be 100% height -->
	</div>
</div>


	<!-- card ends -->


	<!-- </div> -->






	<!-- end main -->

	<!-- <div class="parallax-pro">
		<div class="img-src" style="background-image: url('http://get-shit-done-pro.herokuapp.com/assets/img/bg6.jpg');"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>
						<small>
							<a>Don't forget to check our latest release:</a>
							</small>
						</h1>
					</div>
					<div class="col-md-6 col-md-offset-3 col-md-12 text-center">
						<h1 class="hello text-center">
							<a href="http://gsdk.creative-tim.com">Get Shit Done Kit <span class="label label-warning"> Pro</span></a>
							<small>
								<ul class="list-unstyled">
									<li>50+ new elements</li>
									<li>LESS and SASS files</li>
									<li>PSD for designers</li>
									<li>New Font Icons </li>
								</ul>
							</small>
						</h1>
						<div class="actions">
							<a class="btn btn-lg btn-warning btn-fill" href="http://gsdk.creative-tim.com/?ref=get-shit-done">Live Preview Kit</a>
						</div>
					</div>
				</div>

			</div>
		</div> -->
		<div class="main" id="gallery">
			<div class="container">
					 <div class="row">
					 <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
							 <h1 class="gallery-title">Gallery</h1>
					 </div>

					 <div align="center">
							 <button class="btn btn-default filter-button active" data-filter="all">All</button>
							 <button class="btn btn-default filter-button" data-filter="pacha">PACHA</button>
							 <button class="btn btn-default filter-button" data-filter="idam">IDAM</button>
							 <button class="btn btn-default filter-button" data-filter="kootu">KOOTU</button>

					 </div>
					 <br/>



							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pacha" >
									 <img src="{{ asset('image\New folder\p1.jpg') }}" class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter kootu">
									 <img src="{{ asset('image\New folder\k5.jpg') }}" class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pacha">
									 <img src="{{ asset('image\New folder\k1.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter kootu">
									 <img src="{{ asset('image\New folder\k2.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pacha">
									 <img src="{{ asset('image\New folder\p5.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter kootu">
									 <img src="{{ asset('image\New folder\k4.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter idam">
									 <img src="{{ asset('image\New folder\p2.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pacha">
									 <img src="{{ asset('image\New folder\p3.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pacha">
									 <img src="{{ asset('image\New folder\k3.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter idam">
									 <img src="{{ asset('image\New folder\i2.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter kootu">
									 <img src="{{ asset('image\New folder\p6.jpg') }}"  class="img-responsive">
							 </div>

							 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter kootu">
									 <img src="{{ asset('image\New folder\i1.jpg') }}"  class="img-responsive">
							 </div>
					 </div>
			 </div>
		</section>

		</div>

<div class="main" id="contact">
		<div class="space-30"></div>



		<div class="container" >
		    <div class="row">
					<div class="col-sm-12">
						<div  class="text-center">
							<h1 class="text-center">Contact Us</h1>
					</div>
		        <div class="col-sm-6">
		            <div class="well">
		                <h3 style="line-height:20%;"><i class="fa fa-home fa-1x" style="line-height:6%;color:rgba(52, 172, 220, 0.98)"></i>&emsp;Address:</h3>
		                <p style="margin-top:6%;line-height:35%">Kurumbani Nagar <br> <br> <br> <br> Opposite Rajas HSS <br> <br> <br> <br> Changuvetty Kottakal</p>

		                <br />
		                <br />
		                <h3 style="line-height:20%;"><i class="fa fa-envelope fa-1x" style="line-height:6%;color:rgba(52, 172, 220, 0.98)"></i>&emsp;E-Mail Address:</h3>
		                <p style="margin-top:6%;line-height:35%"><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="e382878e8a8da3878b8a908b82cd8c9184">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></p>
		                <br />
		                <br />
		                <h3 style="line-height:20%;"><i class="fa fa-phone fa-1x" style="line-height:6%;color:rgba(52, 172, 220, 0.98)"></i>&emsp;Phone:</h3>
		                <p style="margin-top:6%;line-height:35%">9400630581 <br> <br> <br> <br> 9645909333</p>
		                <br />
		                <br />
		                <h3 style="line-height:20%;"><i class="fa  fa-globe fa-1x" style="line-height:6%;color:rgba(52, 172, 220, 0.98)"></i>&emsp;Centers:</h3>
		                <p style="margin-top:6%;line-height:35%"> Thrissur <br> <br> <br> <br> Kozhikode <br> <br> <br> <br> Thiruvananthapuram</p>
		            </div>
		        </div>
		        <div class="col-sm-6 text-center">
		          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.5567638277416!2d76.2118920640113!3d10.535533770033307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee57619569c1%3A0x5d52563713bac6f!2sDhisha+charitable+trust!5e0!3m2!1sen!2s!4v1493346092621" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		        </div>
		    </div>
		</div>
	</div>
</div>
<div class="main">


	<section id="contact" style="">
						<div class="container">
								<div class="row">
										<div class="about_our_company" style="margin-bottom: 20px;">
											<h1 style="color:#fff;" class="text-center">Write Your Suggestion

												</h1>
												<!-- <h1 style="color:#fff;">Write Your Message</h1>

												<p style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting </p> -->
										</div>
								</div>
								<div class="row">
										<div class="col-md-12">
												<form name="sentMessage" method='post' action='/getfeed' id="contactForm" novalidate="">
													{{csrf_field()}}
														<div class="row">
																<div class="col-md-7">
																		<div class="form-group">
																				<input type="text" class="form-control" name=fbname placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
																				<p class="help-block text-danger"></p>
																		</div>
																		<div class="form-group">
																				<input type="email" class="form-control" name=fbemail placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
																				<p class="help-block text-danger"></p>
																		</div>
																		<div class="form-group">
																				<div class="g-recaptcha" data-sitekey="6LetbxwUAAAAAPSFjCi2CCtRZMZoyIaP8jCTO9Mq"></div>
																				<p class="help-block text-danger"></p>
																		</div>
																		<!-- <div class="form-group">
																				<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
																				<p class="help-block text-danger"></p>
																		</div> -->
																</div>
																<div class="col-md-5">
																		<div class="form-group">
																				<textarea class="form-control" name=fbmatter placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
																				<p class="help-block text-danger"></p>
																		</div>
																</div>
																<div class="clearfix"></div>
																<div class="col-lg-12 text-center">
																		<div id="success" style="color:#fff; border-color:#fff; "></div>
																		<button type="submit" class="btn btn-default">Send Message</button>
																</div>
														</div>

												</form>
										</div>
										<!-- <div class="col-md-4">
												<p style="color:#fff;">
														<strong><i class="fa fa-map-marker"></i> Address</strong><br>
														1216/Mirpur_10 Beach, Dhaka(Bangladesh)
												</p>
												<p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
														(+8801)7123456</p>
												<p style="color:#fff;">
														<strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
														Email@info.com</p>
												<p></p>
										</div> -->
								</div>
						</div>
				</section>
<div id="footer">
<div class="container">
  <!-- <div class="row">

      <div class="col-sm-3">
        <div class="foot-header">
          Quick Links <img src="http://200.27.156.170/ean_default/img/cocha/icon-cocha.png">
        </div>
        <div class="foot-links">
          <a href="http://internet.cocha.com/nuestra-empresa/nuestra-empresa.html">Who We Are</a>
          <a href="http://cms.cocha.com/sucursales.html">What We Do</a>
          <a href="http://internet.cocha.com/_DisenoWeb/minisitios/sitio/por-que-comprar-en-cocha.html?cid=por-que-comprar-en-cocha">People Behind Dhisha</a>
          <a href="http://internet.cocha.com/virgin_galactic/virgin_galactic.html">Contact Us</a>
          <a href="http://internet.cocha.com/_DisenoWeb/minisitios/sitio/trabaja-con-nosotros.html?cid=trabaja_en_cocha">Donate</a>
					<a href="http://internet.cocha.com/_DisenoWeb/minisitios/sitio/trabaja-con-nosotros.html?cid=trabaja_en_cocha">Blood Donors Database</a>
          <!-- <a href="http://www.cochainbound.com/" target="_blank">¿Vienes a Chile?</a> -->
        <!-- </div> -->
      <!-- </div> -->
    <!-- <div class="col-sm-3">
      <div class="foot-header"> Servicio al cliente <img src="http://200.27.156.170/ean_default/img/cocha/servicio-al-cliente-icon.png"></div>
      <div class="foot-links">
      	<a href="javascript:Contacto()">Contáctanos</a>
        <a href="http://internet.cocha.com/_DisenoWeb/minisitios/sitio/servicio-al-pasajero.html?cid=atencion-al-pasajero">Atención al pasajero</a>
        <a href="http://internet.cocha.com/_DisenoWeb/minisitios/sitio/faq.html?cid=preguntas-frecuentes">Preguntas frecuentes</a>
        <a href="http://cms.cocha.com/terminos-y-condiciones">Términos y Condiciones Generales</a>
        <a href="http://internet.cocha.com/_DisenoWeb/check-in/check-in.html?cid=check-in-on-line">Check-in en línea </a>
        <a href="http://www.cocha.com/ibe/bookingManagement/retrieveBookingForm.do">Consultar reserva</a>
        <a href="http://internet.cocha.com/manual-del-viajero.pdf" target="_blank">Manual del viajero</a>
      </div>
    </div> -->
    <!-- <div class="col-sm-3">
      <div class="foot-header">
        Media <img src="http://200.27.156.170/ean_default/img/cocha/card-icon.png">
      </div>
      <div class="foot-links">
        <p>
          <i class="fa fa-check text-success"></i> Tarjetas de crédito<br>
          <img src="http://200.27.156.170/ean_default/img/cocha/visa-card.png">
          <img src="http://200.27.156.170/ean_default/img/cocha/master-card.png">
          <img src="http://200.27.156.170/ean_default/img/cocha/dinner-club-card.png">
        </p>
        <p>
          <i class="fa fa-check text-success"></i> Transferencias bancarias<br>
          <img src="http://200.27.156.170/ean_default/img/cocha/banco-santander-card-1.png">
          <img src="http://200.27.156.170/ean_default/img/cocha/banco-de-chile-card-1.png">
        </p>
        <p>
          <i class="fa fa-check text-success"></i> Tarjeta Ripley<br>
          <img src="http://200.27.156.170/ean_default/img/cocha/ripley-card.png">
        </p>
      </div>
    </div>
    <!-- <div class="col-sm-3">
      <img src="http://200.27.156.170/ean_default/img/cocha/tripadvisor-logo.jpg" class="img-responsive img-thumbnail">
      <br><br>
      <a href="http://internet.cocha.com/especiales/sello-de-calidad-turistica.html" style="float: left;">
        <img src="http://200.27.156.170/ean_default/img/cocha/sello_de_calidad_turistica.png" width="121" height="70" alt="sello de calidad turistica">
      </a>
      <a href="http://www.chileestuyo.cl/" target="_blanck" style="float: left; margin-left: 20px;">
        <img src="http://200.27.156.170/ean_default/img/cocha/Logo_Chileestuyo.png" height="70" alt="Logo Chileestuyo">
      </a>
    </div> -->

  	<!-- </div><!--/row-->
  <div class="row">

    <div id="bottom-footer">
      <div class="row">
        <div class="col-sm-8">
    	<a href="#">Who We Are</a>
        <a href="#">Wht We Do</a>
        <a href="#">People Behind</a>
        <a href="#">Contact</a>
        <a href="#">Donate</a>
        <a href="#">Blood Donors Database</a>
        <a href="#">Login/Signup</a>
        <!-- <a href="http://cms.cocha.com/destinos.html">Destinos</a>
        <a href="http://internet.cocha.com/_DisenoWeb/minisitios/sitio/viajes-corporativos.html?cid=viajes-corporativos">Empresas</a> -->
        </div>
        <div class="col-sm-2 phone">
<i class="fa fa-phone fa-2x pull-left" aria-hidden="true"></i>
          <div class="pull-left">
            <span class="red">9400630581  <small>Office</small></span>
          </div>
					</div>
					<div class="col-sm-2 phone">
   <i class="fa fa-mobile fa-2x "  aria-hidden="true"></i>
					<div class="pull-right">

            <span class="red">9645909333<small>Mobile</small></span>
          </div>
          </div>
				</div>
    </div>
  </div><!--/row 2-->
      <div class="row" id="final-footer">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4 text-center">
        	Copyright © 2017 RSRV. All Rights Reserved
        </div>
        <div class="col-sm-4 text-right">
        	<a href="https://www.facebook.com/dhishakerala/"><span class="fa-stack fa-lg">
              <i class="fa fa-circle text-primary fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
          <!-- <span class="fa-stack fa-lg">
              <i class="fa fa-circle text-info fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          <span class="fa-stack fa-lg">
              <i class="fa fa-circle text-danger fa-stack-2x"></i>
              <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
            </span> -->
        </div>
      </div>
  </div><!--/container-->
</div><!--/footer--></div>


            <div id="push"></div>
</div>


	</body>

	<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap-table.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}" ></script>
	<script src="{{ asset('jquery/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('bootstrap3/js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/gsdk-checkbox.js') }}"></script>
	<script src="{{ asset('js/gsdk-radio.js') }}"></script>
	<script src="{{ asset('js/gsdk-bootstrapswitch.js') }}"></script>
	<script src="{{ asset('js/get-shit-done.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>

	<!-- autohide navbar -->
	<script type="text/javascript">
		$("div.navbar-fixed-top").autoHidingNavbar();
	</script>

	<script type="text/javascript">
  var CaptchaCallback = function() {
    $('.g-recaptcha').each(function(index, el) {
      grecaptcha.render(el, {'sitekey' : '6LetbxwUAAAAAPSFjCi2CCtRZMZoyIaP8jCTO9Mq'});
    });
  };
</script>


	<script type="text/javascript">

	$('.btn-tooltip').tooltip();
	$('.label-tooltip').tooltip();
	$('.pick-class-label').click(function(){
		var new_class = $(this).attr('new-class');
		var old_class = $('#display-buttons').attr('data-class');
		var display_div = $('#display-buttons');
		if(display_div.length) {
			var display_buttons = display_div.find('.btn');
			display_buttons.removeClass(old_class);
			display_buttons.addClass(new_class);
			display_div.attr('data-class', new_class);
		}
	});
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
		value: 70,
		orientation: "horizontal",
		range: "min",
		animate: true
	});
	$('.carousel').carousel({
		interval: 4000
	});


	</script>

	<!gallery>
<script type="text/javascript">
$(document).ready(function(){

	$(".filter-button").click(function(){
			var value = $(this).attr('data-filter');

			if(value == "all")
			{
					//$('.filter').removeClass('hidden');
					$('.filter').show('1000');
			}
			else
			{
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
					$(".filter").not('.'+value).hide('3000');
					$('.filter').filter('.'+value).show('3000');

			}
	});

});
</script>

	</html>
