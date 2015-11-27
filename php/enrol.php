<?php 
require_once(dirname(__FILE__) . '/extlib/vdaemon/vdaemon.php');
//require_once(dirname(__FILE__) . '/extlib/recaptchalib.php');
require_once(dirname(__FILE__) . '/core/config.php');
 ?>

<html>
<head>

<style type="text/css">
body {
	background: #e4e4e4;
}

.form {
	width: 600px;
	margin: 0 auto;
	background: #fff;
	padding: 45px;
	border: 1px solid #c2c2c2;
}

.error {
    color: #AA0000
}
.controlerror {
    background-color: #ffffdd;
    border: 1px solid #AA0000;
}

.input {
	width: 80%;
	height: 35px;
	margin-left: 10px;
}


</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<div class="form">

<?php
//$msg = $_GET['msg'];

//if ( $msg == '1' ) {
//	echo '<p>Your information was submitted successfully.</p>';
//}
?>


<form action="core/process.php" method="post" id="registration" runat="vdaemon">
<vlsummary class="error" headertext="Error(s) found:">
<input type="hidden" name="formID" value="candidates" />
<input type="hidden" name="redirect_to" value="" />

<h3>Pune District Roller Skating Adhoc Committee</h3>

<br>

<p><strong><vllabel errclass="error" validators="InputNameReq" for="name" cerrclass="controlerror">Name: </vllabel><input type="text" name="name" class="input" />
	<vlvalidator name="InputNameReq" type="required" control="name" errmsg="Your name is required."></strong></p>
	
  <br>

<p><strong><vllabel errclass="error" validators="Input2NameReq" for="email" cerrclass="controlerror">Email: </vllabel> <input type="text" name="email" class="input" />
	<vlvalidator name="Input2NameReq" type="required" control="email" errmsg="Your email is required."></strong></p>
	
  <br>

  <p><strong><vllabel errclass="error" validators="Input3NameReq" for="email" cerrclass="controlerror">Contact no.: </vllabel> <input type="integer" name="contact" class="input" style="width:40%;"/>
  <vlvalidator name="Input3NameReq" type="required" control="contact" errmsg="Your contact is required."></strong></p>

<br/>

<div>
<label for="address">Address</label>
    <textarea class="form-control" id="address" rows="3"></textarea>
</div>
<br/>

 <label>Gender: &nbsp;&nbsp;&nbsp;</label>
  <div class="radio">
   
    <label>
      <input type="radio" name="gender" id="gender1" value="male" checked>
      Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>


    <label>
      <input type="radio" name="gender" id="gender2" value="female">
      Female
    </label>
  </div>

<br>

<!-- Date of birth -->

 <div class="form-group">
 <label>Date of Birth: &nbsp;&nbsp;&nbsp;</label><br/>
        <div class="col-xs-5 date">
            <div class="input-group input-append date" id="datePicker">
                <input type="text" class="form-control" name="date" />
                
            </div>
        </div>
        <br/>
        <small class="text-muted">DD/MM/YYYY</small>
    </div>

  <br/>
<label for="age">Age Group:</label>


  <div class="radio">
    <label>
      <input type="radio" name="agegroup" id="age1" value="8" checked>
      8 to 10 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <label>
      <input type="radio" name="agegroup" id="age2" value="10">
      10 to 12 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <label>
      <input type="radio" name="agegroup" id="age3" value="12">
      12 to 16 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <label>
      <input type="radio" name="agegroup" id="age4" value="16">
      Above 16
    </label>
  </div>

<br>
<br>

<label for="category">Category :</label>

<select name="category">
    <option disabled>QUAD RACES</option>
	<option value="1">Rink I</option>
	<option value="2">Rink II</option>
	<option value="3">Rink III</option>
  <option value="4">Road I</option>
      <option disabled>INLINE TRACK RACES</option>
  <option value="5">Rink IV</option>
  <option value="6">Rink V</option>
    <option value="7">Rink VI</option>
  <option value="8">Relay</option>
  <option value="9">P.T.P.</option>
    <option value="10">Elem.</option>
      <option disabled>INLINE ROAD RACES</option>
          <option value="11">Road II</option>
    <option value="12">Elem.</option>
    <option value="13">Marathon</option>


</select>

<br>
<br>
<br>
<br>

<input type="submit" value="Submit" style="margin-left:40%;width:20%;"/>

<br>

<!--<p>I'm at least 18 years of age: Yes: <input type="radio" name="old_enough" value="yes" /> No: <input type="radio" name="old_enough" value="no" /></p>-->

<!--<p>Checkbox1 <input type="checkbox" name="checkbox" value="checkbox1" /> Checkbox2: <input type="checkbox" name="checkbox" value="checkbox2" /></p>-->
<!--
<?php
	echo recaptcha_get_html(R_PUBLIC);
?>
<br />
-->
<!--<div class="dropdown">
 <p> <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Type
    <span class="caret"></span></p>
  </button>-->
 
 <!--</div>-->

<input type="submit" value="Submit" />
</form>
</div>
</body>
</html>
<?php VDEnd(); ?>

