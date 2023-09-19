<?php
require_once "../includes/configsession.inc.php";
require_once "../includes/signup_view.inc.php";
?>

<!DOCTYPE html>
<html>
    <body>

        <link rel='stylesheet' href='signupstyle.css'>
<P> Welcome to the signup system of the Todo list site</p>

<p>Enter the below information to create an acount</p>


<form name='signupinfo' method='POST' action='../includes/signup.inc.php'>
<label for='firstName'> Enter first Name </label>
<input type='text' name= 'firstName' placeholder='First Name' ><br><br>
<label for='lastname'>Enter last Name</label>
<input name='lastName' type='text' placeholder='Last Name' ><br><br>
<label for='userName'>  Enter a username </label>
<input name='username' type='text' placeholder='User name'><br><br>

<label for='email'>  Enter email address </label>
<input name='email' type='text' placeholder='email' ><br><br>
<label for='passsword'>  Enter a password </label>
<input name='password' type='password' placeholder='password'><br><br>

<button> signup <button>

</form>

<?php


check_signup_errors();
?>


<p> Already has an acount? Click on the login link </p> <a href="../login.php/loginindex.php">login</a>
</body>
    </html>