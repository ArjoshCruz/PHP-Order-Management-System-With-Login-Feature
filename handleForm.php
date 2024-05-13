<?php 
	session_start();
	require_once('dbConfig.php');
	require_once('functions.php');

	// If register button is submitted, this serves as verifier
	if (isset($_POST['registerBtn'])) {
		$username = $_POST['regUserTextField'];
		$password = password_hash($_POST['regPasswordTextField'], PASSWORD_DEFAULT);

		// If the input field is empty, it will return to register.php
		if(empty($username) || empty($password)){
			echo '<script> 
			alert("The input field is empty!");
			window.location.href = "register.php";
			</script>';
		}else{
			// If it is successful, it will proceed to login.php
			if(addUser($conn, $username, $password)){
				header('Location: login.php');
			}else{
				// It errors when the username is already taken, then will go back to register.php
				echo '<script> 
				alert("The username is already taken!");
				window.location.href = "register.php";
				</script>';
			}
		}
	}

	// If login button is submitted, this serves as verifier
	if(isset($_POST['loginBtn'])) {
		$username = $_POST['userTextField'];
		$password = $_POST['passwordTextField'];

		// If the input field is empty, it will return to login.php
		if(empty($username) && empty($password)) {
			echo "<script>
			alert('Input fields are empty!');
			window.location.href='login.php'
			</script>";
		}else{
			// If it is successful, it will proceed to the landing page of menuPage.php
			if(login($conn, $username, $password)) {
				header('Location: menuPage.php');		
			}else{
				// Error if username and/or password is incorrect
				echo "<script>
				alert('The username and/or password is incorrect!');
				window.location.href='login.php'
				</script>";
			}
		}
	}
?>