<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form validation with JavaScript</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<br>
<br>
  <div id="wrapper">
   <form method="POST" action="index.php" onsubmit="return Validate()" name="vform" class = "register_form" >
   	<div id="username_div">
   	  <label>Username</label> <br>
   	  <input type="text" name="username" class="textInput">
   	  <div id="name_error"></div>
   	</div>
   	<div id="email_div">
   	  <label>Email</label> <br>
   	  <input type="email" name="email" class="textInput">
   	  <div id="email_error"></div>
   	</div>
   	<div id="password_div">
   	  <label>Password</label> <br>
   	  <input type="password" name="password" class="textInput">
   	</div>
   	<div id="pass_confirm_div">
   	   <label>Password confirm</label> <br>
   	   <input type="password" name="password_confirm" class="textInput">
   	   <div id="password_error"></div>
   	</div>
   	<div>
   	<input type="submit" name="register" value="Register" class="btn">
   	</div>
   </form>
  </div>
</body>

<script type="text/javascript">

// SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	document.getElementById('password_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
  if (password.value === password_confirm.value) {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
}
</script>

<!-- adding user input to database, still working on this -->
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'loginsystem';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error)


if($mysqlCon->connect_errno)
{
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

$_SESSION['username'] = $_Post['username'];
$_SESSION['password'] = $_Post['password'];
$_SESSION['email'] = $_Post['email'];

// Escape all post variables to protect against injection

$name = $mysqli->escape_string($_POST['username']);
$email = $mysqli->escape_string($_POST['email']);

// password has to be hashed in order to insert into mysql database
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));

// create hash key
$hash = $mysqli->escape_string(md5(rand(0,1000)));

//check if user with that email exist

$emCheck = $mysqli->query("SELECT * FROM account WHERE email='$email' ") or die($mysqli->error());

if($emCheck->num_rows > 0)
{
    $_SESSION['message'] = "This email already exist";
    header("location: register.php");
}

else
{
    $sql = "INSERT INTO users (username, password, email)"
    . "Values ('$name', '$password', '$email')";

    if( $mysqli->query($sql) )
    {
        $_SESSION['message'] = "Registration Successful";
        header("location: profile.php")
    }
}

?>