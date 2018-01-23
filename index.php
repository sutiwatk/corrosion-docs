<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!--Custom CSS-->
<link href="css/custom.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	
.asterisk
{
	color: #FF0000 !important;
	
}
	
	
	</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">MTEC</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    
    
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Corrosion Data Sheet (CoDS) Registration</h1>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row text-justify well">
    <div class="col-md-6 col-md-offset-3"><ul><li>Please fill in the form below. Fields marked with a red asterisk are required.</li>
    </ul> </div>
  </div>
  <hr>
  <div class="row">
   <form class="form-horizontal" action="registration.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Login information</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email  <span class="asterisk">*</span></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  <span class="help-block"> Email Address </span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password Input  <span class="asterisk">*</span></label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="" class="form-control input-md">
    <span class="help-block"> Password </span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Password Input">Re-enter password  <span class="asterisk">*</span></label>
  <div class="col-md-4">
    <input id="Password Input" name="Password Input" type="password" placeholder="" class="form-control input-md">
    <span class="help-block">Re enter Password </span>
  </div>
</div>

<!-- Form Name -->
<legend>Register Information</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name - Lastname  <span class="asterisk">*</span></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Organization  <span class="asterisk">*</span></label> 
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address <span class="asterisk">*</span></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Country <span class="asterisk">*</span></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone No.  <span class="asterisk">*</span></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Industrial Sector</label>
  <div class="col-md-4">
  <div class="row">
  <div class="radio col-md-6">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Construction
    </label>
	</div>
	
  <div class="radio col-md-6">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Energy / Utility</label></div>
	</div>
	
	<div class="row">
	<div class="radio col-md-6">
    <label for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      Petrochemical / Chemical</label></div>
	
  <div class="radio col-md-6">
    <label for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      Transport
    </label>
	
	</div>
	
	</div>
	<div class="row">
  <div class="radio col-md-6">
    <label for="radios-4">
      <input type="radio" name="radios" id="radios-4" value="5">
      Machinery

    </label>
	</div>
  <div class="radio col-md-6">
    <label for="radios-5">
      <input type="radio" name="radios" id="radios-5" value="6">
      Defence
    </label>
	</div>
  </div>
  	<div class="row">
  <div class="radio col-md-6">
    <label for="radios-4">
      <input type="radio" name="radios" id="radios-4" value="5">
      Others

    </label>
	</div>
  <div class="radio col-md-6">
    
	</div>
  </div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Objective_use">Objectives for using Corrosion Data Sheet (CoDS)</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Objective_use-0">
      <input type="radio" name="Objective_use" id="Objective_use-0" value="1" checked="checked">
      Research</label></div>
  <div class="radio">
    <label for="Objective_use-1">
      <input type="radio" name="Objective_use" id="Objective_use-1" value="2">
      Business</label></div>
  <div class="radio">
    <label for="Objective_use-2">
      <input type="radio" name="Objective_use" id="Objective_use-2" value="3">
      Materials Selection</label></div>
  </div>
</div>


<div><!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>

<button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>  
 <!--  <div class="col-md-6 well">
 

<div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1" id="check">
      I have read<a href="https://www.nstda.or.th/th/97-about-us/about-us/548-nstda-terms-of-service" target="_blank"> NSTDA Terms Of Use Notice .</a> and  I confirm that I have read <a href="https://www.nstda.or.th/th/97-about-us/about-us/547-nstda-privacy-policy" target="_blank"> NSTDA Privacy Policy</a> and consent to the processing of my personal data for purposes of the same.
    </label>
	</div>
  <a href="#" class="btn btn-default" id="btncheck">Submit</a>
  </div>

  
  
</div> --> </div>

</fieldset>
</form>

  </div>
  

  <hr>
  <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">

      <p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; <a href="https://www.mtec.or.th/" >National Metals and Materials Technology Center</a></p>
    </div>
  </div>
  <hr>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script type="text/javascript">$('#check').change(function () {
    $('#btncheck').prop("disabled", !this.checked);
}).change()</script>
</body>
</html>
