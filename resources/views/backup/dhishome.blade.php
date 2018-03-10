<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('image/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dhisha</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="{{ asset('bootstrap3/css/bootstrap.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

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
	<link href="{{ asset('css/gsdk.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/logo.css') }}" rel="stylesheet" />
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


							<div class="navbar-brand">
								DHISHA
							</div>
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
						<li><a href="#">Dhisha</a></li>
						<li><a href="#">Dhisha</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="javascript:void(0)" data-toggle="modal" onclick="openLoginModal();" class="btn btn-round btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login / Sign-Up</a></li>
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
					<div class="modal-body">
						<div class="row">

							<!-- <div class="col-sm-6">
							<div class="form-group label-floating">
							<label class="control-label">City</label>

							<input type="text" class="form-control" id="exampleInputEmail1">
						</div>
					</div> -->





					<div class="col-sm-6">
						<div class="form-group label-floating">
							<label class="control-label">Blood Group</label>
							<select name="BloodGroup" class="form-control">
								<option disabled="" selected=""></option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
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
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="Bombay Blood Group">Bombay Blood Group</option>
								<option value="INRA">INRA</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
								<option value="...">...</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group label-floating">
							<label class="control-label">State</label>
							<select name="country" class="form-control">
								<option disabled="" selected=""></option>
								<option value="29|dpState">Andaman and Nicobar Islands </option>
								<option value="1|dpState">Andhra Pradesh</option>
								<option value="2|dpState">Arunachal Pradesh </option>
								<option value="3|dpState">Assam </option>
								<option value="4|dpState">Bihar </option>
								<option value="30|dpState">Chandigarh </option>
								<option value="5|dpState">Chhattisgarh </option>
								<option value="31|dpState">Dadra and Nagar Haveli </option>
								<option value="32|dpState">Daman and Diu </option>
								<option value="35|dpState">Delhi </option>
								<option value="6|dpState">Goa </option>
								<option value="7|dpState">Gujarat </option>
								<option value="8|dpState">Haryana </option>
								<option value="9|dpState">Himachal Pradesh </option>
								<option value="10|dpState">Jammu and Kashmir </option>
								<option value="11|dpState">Jharkhand </option>
								<option value="12|dpState">Karnataka </option>
								<option value="13|dpState">Kerala </option>
								<option value="33|dpState">Lakshadweep </option>
								<option value="14|dpState">Madhya Pradesh </option>
								<option value="15|dpState">Maharashtra </option>
								<option value="16|dpState">Manipur </option>
								<option value="17|dpState">Meghalaya </option>
								<option value="18|dpState">Mizoram </option>
								<option value="19|dpState">Nagaland </option>
								<option value="20|dpState">Odisha</option>
								<option value="34|dpState">Pondicherry</option>
								<option value="21|dpState">Punjab </option>
								<option value="22|dpState">Rajasthan </option>
								<option value="23|dpState">Sikkim </option>
								<option value="24|dpState">Tamil Nadu </option>
								<option value="36|dpState">Telangana</option>
								<option value="25|dpState">Tripura </option>
								<option value="27|dpState">Uttar Pradesh</option>
								<option value="26|dpState">Uttaranchal </option>
								<option value="28|dpState">West Bengal</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group label-floating">
							<label class="control-label">District</label>
							<select name="country" class="form-control">
								<option disabled="" selected=""></option>

								<option value="...">...</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group label-floating">
							<label class="control-label">City</label>
							<select name="country" class="form-control">
								<option disabled="" selected=""></option>

								<option value="...">...</option>
							</select>
						</div>
					</div>






				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<button type="button" class="btn btn-danger btn-round" data-dismiss="modal"><span class="glyphicon glyphicon-remove glyphred" aria-hidden="true"></span> Cancel</button>
						<button type="button" class="btn btn-primary btn-round"><span class="glyphicon glyphicon-search glyphblue" aria-hidden="true"></span> Search</button>
					</div>

				</div>





				<!-- <div class="row">
				<div class="col-sm-12">
				<h4 class="info-text"> Let's start with the basic details</h4>
			</div>
			<div class="col-sm-5 col-sm-offset-1">
			<div class="form-group label-floating">
			<label class="control-label">City</label>
			<input type="text" class="form-control" id="exampleInputEmail1">
		</div>
	</div>
	<div class="col-sm-5">
	<div class="form-group label-floating">
	<label class="control-label">Country</label>
	<select name="country" class="form-control">
	<option disabled="" selected=""></option>
	<option value="Afghanistan"> Afghanistan </option>
	<option value="Albania"> Albania </option>
	<option value="Algeria"> Algeria </option>
	<option value="American Samoa"> American Samoa </option>
	<option value="Andorra"> Andorra </option>
	<option value="Angola"> Angola </option>
	<option value="Anguilla"> Anguilla </option>
	<option value="Antarctica"> Antarctica </option>
	<option value="...">...</option>
</select>
</div>
</div>
<div class="col-sm-5 col-sm-offset-1">
<div class="form-group label-floating">
<label class="control-label">Accommodates</label>
<select class="form-control">
<option disabled="" selected=""></option>
<option>1 Person</option>
<option>2 Persons </option>
<option>3 Persons</option>
<option>4 Persons</option>
<option>5 Persons</option>
<option>6+ Persons</option>
</select>
</div>
</div>
<div class="col-sm-5">
<div class="form-group label-floating">
<label class="control-label">Rent price</label>
<div class="input-group">
<input type="text" class="form-control">
<span class="input-group-addon">$</span>
</div>
</div>
</div> -->


<!-- wizard container -->
...
</div>
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
						<a id="google_login" class="circle google" href="/auth/google_oauth2">
							<i class="fa fa-google-plus fa-fw"></i>
						</a>
						<a id="facebook_login" class="circle facebook" href="/auth/facebook">
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
						<form method="post" action="/login" accept-charset="UTF-8">
							<input id="email" class="form-control" type="text" placeholder="Email" name="email">
							<input id="password" class="form-control" type="password" placeholder="Password" name="password">
							<input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
						</form>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="content registerBox" style="display:none;">
					<div class="form">
						<form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
							<input id="Name" class="form-control" type="text" placeholder="Name" name="name">
							<input id="email" class="form-control" type="text" placeholder="Email" name="email">
							<input id="password" class="form-control" type="password" placeholder="Password" name="password">
							<input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
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


<div class="blurred-container">

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
						<br/><br/><button class="btn btn-info btn-round btn-fill">DONATE</button></p>



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
							<img class="card-img-top" src="..." alt="Card image cap">
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
							<img class="card-img-top" src="..." alt="Card image cap">
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
							<img class="card-img-top" src="..." alt="Card image cap">
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
<div class="main">


	<div class="container">
		<div id="extras">
			<div class="space"></div>

			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="text-center">
						<img src="{{ asset('image/dulau.jpg') }}" alt="Rounded Image" class="img-rounded img-responsive img-dog">
					</div>
				</div>
				<!-- body content -->
				<!-- col-md-5 col-sm-12
				col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1 -->
				<div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">

					<h1 class="text-center">About Creative Tim

						<small class="subtitle">Get to know us</small></h1>
						<hr>
						<p>
							Creative Tim offers Bootstrap based design elements that speed up your development work. From plugins to complex kits, we have everything you need.
						</p>
						<p>
							We love the web and care deeply for how users interact with a digital product. The idea behind Creative Tim was creating a standard of things we actually need and would personally use inside our web projects. We power businesses and individuals to create better looking web projects around the world.
						</p>
						<p>
							We take great interest in how our customers use our resources and offer strong support and unlimited updates. We are constantly thinking about how to make our products intuitive, beautiful and extremely easy to understand, so feel free to tell us your thoughts!
						</p>

					</div>

				</div>

			</div>

		</div>
		<div class="space-30"></div>
	</div>

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
<div class="main">


		<div class="space-30"></div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="credits">
					&copy; <script>document.write(new Date().getFullYear())</script> DHISHA Web, made with <i class="fa fa-heart heart" alt="love"></i> for a better web.
				</div>
			</div>
		</div>
</div>



	</body>


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
	</html>
