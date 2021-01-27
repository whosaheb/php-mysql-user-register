<!DOCTYPE html>
<html>
	<head>
		<title>RegistrationPage</title>
		<style>
			* {
			  margin: 0px;
			  padding: 0px;
			}
			body {
			  font-size: 120%;
			  background: #F8F8FF;
			}

			.header {
			  width: 30%;
			  margin: 50px auto 0px;
			  color: white;
			  background: #6374ef;
			  text-align: center;
			  border: 1px solid #B0C4DE;
			  border-bottom: none;
			  border-radius: 10px 10px 0px 0px;
			  padding: 20px;
			}
			form, .content {
			  width: 30%;
			  margin: 0px auto;
			  padding: 20px;
			  border: 1px solid #B0C4DE;
			  background: white;
			  border-radius: 0px 0px 10px 10px;
			}
			.input-group {
			  margin: 10px 0px 10px 0px;
			}
			.input-group label {
			  display: block;
			  text-align: left;
			  margin: 3px;
			}
			.input-group input {
			  height: 30px;
			  width: 93%;
			  padding: 5px 10px;
			  font-size: 16px;
			  border-radius: 5px;
			  border: 1px solid gray;
			}
			.btn {
			  padding: 10px;
			  font-size: 15px;
			  color: white;
			  background: #6374ef;
			  border: none;
			  border-radius: 5px;
			}
			.success {
			  color: #3c763d; 
			  background: #dff0d8; 
			  border: 1px solid #3c763d;
			  margin-bottom: 20px;
			}
		</Style>
	</head>
	<body>
		<div class="header">
			<h1> User registration page </h1>
		</div>
		<?php include('server.php'); ?>
		<br />
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<br />
			<div class="input-group">
			  <label>Username</label>
			  <input type="text" name="username" value="<?php echo $username; ?>">
			</div><br />
			<div class="input-group">
			  <label>Email</label>
			  <input type="email" name="email" value="<?php echo $email; ?>">
			</div><br />
			<div class="input-group">
			  <label>Password</label>
			  <input type="password" name="password_1">
			</div><br />
			<div class="input-group">
			  <label>Confirm password</label>
			  <input type="password" name="password_2">
			</div><br />
			<div class="input-group">
			  <button type="submit" class="btn" name="reg_user">Register</button>
			</div><br />
			<p>
				Already a member? <a href="">Sign in</a>
			</p>
		</form>
	</body>
</html>