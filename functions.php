<?php 
function addUser($conn, $username, $password) {
	$sql = "SELECT * FROM useraccs WHERE username=?"; // Correct table name

	// Accesses the database
	$stmt = $conn->prepare($sql);
	$stmt->execute([$username]);

	// If username does not exist, then proceed to create account
	if($stmt->rowCount()==0) {
		$sql = "INSERT INTO useraccs (username,password) VALUES (?,?)";
		$stmt = $conn->prepare($sql);
		return $stmt->execute([$username, $password]);
	}
}

// Login function that gets the data from phpmyadmin
function login($conn, $username, $password) {
	$query = "SELECT * FROM useraccs WHERE username=?"; // should be the correct table name "useraccs"

	// accesses the database
	$stmt = $conn->prepare($query);
	$stmt->execute([$username]);

	// If username does exist, then proceed with password verification
	if($stmt->rowCount() == 1) {
		// returns account info
		$row = $stmt->fetch();

		// Stores account info as session variable
		$_SESSION['userInfo'] = $row;

		// get values from the session variable
		$uid = $row['user_id'];
		$uname = $row['username'];
		$passHash = $row['password'];

		// Password validator
		if(password_verify($password, $passHash)) {
			$_SESSION['user_id'] = $uid;
			$_SESSION['username'] = $uname;
			$_SESSION['email'] = $email;
			$_SESSION['userLoginStatus'] = 1;
			return true;
		}
		else {
			return false;
		}
	}
}