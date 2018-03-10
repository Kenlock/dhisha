<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/icon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('assets/img/icon.ico') }}">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- SEO elements -->
	<title>Dhisha - A charity Organization based in kerala.</title>
	<meta name="description" content="">
	<link rel="icon" href="{{ asset('image/icon.ico') }}" type="image/gif" sizes="16x16">
	<!-- SEO elements ends -->
	{{-- CSRF Token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ asset('bootstrap3/css/bootstrap.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/gsdk.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/logo.css') }}" rel="stylesheet" />

		<!--     Font Awesome     -->
		<link href="{{ asset('bootstrap3/css/font-awesome.css') }}" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

		<!-- card -->
		<link href="{{ asset('assets/css/hipster_cards.css') }}" rel="stylesheet"/>
		<link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
		<!-- contact -->
		<link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet" />
		<!-- iframe -->
		<link href="{{ asset('assets/css/iframec.css') }}" rel="stylesheet" />
		<!-- blog -->
		<link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet" />
		<!-- validation -->
		<script src="{{ asset('assets/js/valid.js') }}" type="text/javascript"></script>
		<link href="{{ asset('assets/css/valid.css') }}" rel="stylesheet" />


</head>
<body>
  <div>
    <div class="container">
      <nav class="navbar navbar-ct-blue navbar-fixed-top" role="navigation">

        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">


            <div class="logo-container">
              <a href="#dhisha">
                <div class="navbar-brand">
                  DHISHA
                </div>
              </div>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div><!--  end container-->
</div>

<div style="padding: 30px;">

</div>

<div class="container">
	<div class="row">
				<div class="col-md-4">

				</div>
        <div class="col-md-4">
						<legend class="text-center">Valid information is <span class="req"><small> required *</small></span></legend>
            <form action="" method="post" id="fileForm" role="form">
            <fieldset>

            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Mobile Number: </label>
                    <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="10" onkeyup="validatephone(this);" placeholder="not used for marketing"/>
            </div>

            <div class="form-group">
                <label for="firstname"><span class="req">* </span> Name: </label>
                    <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required />
                        <div id="errFirst"></div>
            </div>

            <!-- <div class="form-group">
                <label for="lastname"><span class="req">* </span> Last name: </label>
                    <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />
                        <div id="errLast"></div>
            </div> -->

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label>
                    <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />
                        <div class="status" id="status"></div>
            </div>

            <!-- <div class="form-group">
                <label for="username"><span class="req">* </span> User name:  <small>This will be your login user name</small> </label>
                    <input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 6 letters" required />
                        <div id="errLast"></div>
            </div> -->

            <!-- <div class="form-group">
                <label for="password"><span class="req">* </span> Password: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>

                <label for="password"><span class="req">* </span> Password Confirm: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div> -->

            <!-- <div class="form-group">

                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>

                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
            </div> -->

            <div class="form-group text-center">
                <input class="btn btn-success " type="submit" name="submit_reg" value="Donate">
            </div>
                      <h5 class="text-center">You will receive a confirmation e-mail after the transaction. </h5>
                      <h5 class="text-center">Be sure to check your spam folders. </h5>


            </fieldset>
            </form><!-- ends register form -->

<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>
        </div><!-- ends col-4 -->

				<div class="col-md-4">

				</div>


	</div>
</div>








</body>
<script src="{{ asset('jquery/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('bootstrap3/js/bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsdk-checkbox.js') }}"></script>
<script src="{{ asset('assets/js/gsdk-radio.js') }}"></script>
<script src="{{ asset('assets/js/gsdk-bootstrapswitch.js') }}"></script>
<script src="{{ asset('assets/js/get-shit-done.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/hipster-cards.js') }}"></script>





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
