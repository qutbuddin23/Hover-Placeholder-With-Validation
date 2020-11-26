<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hover Placeholder With Validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="container">
		<h1>REGISTER</h1>
		<form id="registration_form">
			<div>
				<input type="text" id="form_fname" name="" required="">
				<span class="error_form" id="fname_error_message"></span>
				<label>
					First Name
				</label>	
			</div>
			<div>
				<input type="text" id="form_sname" name="" required="">
				<span class="error_form" id="sname_error_message"></span>
				<label>
					Second Name
				</label>	
			</div>
			<div>
				<input type="email" id="form_email" name="" required="">
				<span class="error_form" id="email_error_message"></span>
				<label>Email id</label>	
			</div>
			<div>
				<input type="password" id="form_password" name="" required="">
				<span class="error_form" id="password_error_message"></span>
				<label>Password</label>	
			</div>
			<div>
				<input type="password" id="form_retype_password" name="" required="">
				<span class="error_form" id="retype_password_error_message"></span>
				<label>Re-Enter Password</label>	
			</div>
			<input type="submit" value="Register" name="">
		</form>
	</div>
	<script type="text/javascript">
      $(function() {

         $("#fname_error_message").hide();
         $("#sname_error_message").hide();
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();

         var error_fname = false;
         var error_sname = false;
         var error_email = false;
         var error_password = false;
         var error_retype_password = false;

         $("#form_fname").focusout(function(){
            check_fname();
         });
         $("#form_sname").focusout(function() {
            check_sname();
         });
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_password").focusout(function() {
            check_password();
         });
         $("#form_retype_password").focusout(function() {
            check_retype_password();
         });

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_sname() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#form_sname").val()
            if (pattern.test(sname) && sname !== '') {
               $("#sname_error_message").hide();
               $("#form_sname").css("border-bottom","2px solid #34F458");
            } else {
               $("#sname_error_message").html("Should contain only Characters");
               $("#sname_error_message").show();
               $("#form_sname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#form_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#form_retype_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#registration_form").submit(function() {
            error_fname = false;
            error_sname = false;
            error_email = false;
            error_password = false;
            error_retype_password = false;

            check_fname();
            check_sname();
            check_email();
            check_password();
            check_retype_password();

            if (error_fname === false && error_sname === false && error_email === false && error_password === false && error_retype_password === false) {
               alert("Registration Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>
</body>
</html>

<style>

body
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url(college.png);
	background-repeat: no-repeat;
	background-size: cover;
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMn4VlnZ5Bwdtu1Wx92s9QHDWa6HTtD71Fnw&usqp=CAU);
}
.container
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 700px;
	background: #fff;
	padding: 45px;
	box-sizing: border-box;
	border :1px solid rgba(0,0,0,.1);
	box-shadow: 0 5px 10px rgba(0,0,0,.2);
}
.container h1
{
	text-align: center;
	margin: 0 0 40px;
	padding: 0;
	color: rgb(66,133,244);
	letter-spacing: 2px;
}
.container input
{
	padding: 5px;
	margin-bottom: 30px;
	width: 55%;
	box-sizing: border-box;
	box-shadow: none;
	outline: none;
	border:none;
	border-bottom: 2px solid #999;
}
.container input[type="submit"]
{
	border-radius: 25px;
	font-size: 20px;
	height: 40px;
	cursor : pointer;
	background: rgb(66,133,244);
	color: #fff;
	margin-bottom: 0;
}
.container input[type="submit"]:hover
{
	background: #34F458;
	color: #fff;
}
.container form div
{
	position: relative;
}
.container form div label
{
	position: absolute;
	top: 3px;
	pointer-events: none;
	left: 0;
	transition: .5s;
}
.container input:focus ~label,
.container input:valid ~label
{
	left: 0;
	top: -20px;
	color: rgb(66,133,244);
	font-size: 12px;
	font-weight: bold;
}
.container input:focus,
.container input:valid
{
	border-bottom: 2px solid rgb(66,133,244);
}
.error_form
{
	top: 12px;
	color: rgb(216, 15, 15);
    font-size: 15px;
    font-family: Helvetica;
}

</style>

</body>
</html>