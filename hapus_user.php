<<<<<<< HEAD
<?php 
	require 'connection.php';
	$id_user = $_GET['id_user'];
	if (isset($id_user)) {
		if (deleteUser($id_user) > 0) {
			setAlert("User has been deleted", "Successfully deleted", "success");
		    header("Location: user.php");
	    }
	} else {
	   header("Location: user.php");
=======
<?php 
	require 'connection.php';
	$id_user = $_GET['id_user'];
	if (isset($id_user)) {
		if (deleteUser($id_user) > 0) {
			setAlert("User has been deleted", "Successfully deleted", "success");
		    header("Location: user.php");
	    }
	} else {
	   header("Location: user.php");
>>>>>>> 65582248febb4d8ffe28d25c54121d8a15e969ec
	}