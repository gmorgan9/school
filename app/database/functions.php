<!-- WORKING -->
<?php

session_start();
require('connection.php');

function isLoggedIn()
{
	if (isset($_SESSION['user_idno'])) {
		return true;
	}else{
		return false;
	}
}

function isAdmin()
{
	if ($_SESSION['acc_type'] == 1) {
		return true;
	}else{
		return false;
	}
}