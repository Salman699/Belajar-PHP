<form method="POST">
	<label>Username</label><br>
	<input type="text" name="uname"><br>
	<label>Password</label><br>
	<input type="Password" name="pass"><br>


	<input type="submit" name="login" value="login">
</form>

<?php 
$username = $_POST['uname'];
$password = $_POST['pass'];
$login = $_POST['login'];
if(isset($login)){
	echo 'Hallo ' .$username.'<br> Password anda ' .$password;
}

 ?>