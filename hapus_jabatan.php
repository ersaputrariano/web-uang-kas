<<<<<<< HEAD
<?php 
	require 'connection.php';
	$id_jabatan = $_GET['id_jabatan'];
	if (isset($id_jabatan)) {
		if (deleteJabatan($id_jabatan) > 0) {
			setAlert("Jabatan has been deleted", "Successfully deleted", "success");
		    header("Location: jabatan.php");
	    }
	} else {
	   header("Location: jabatan.php");
=======
<?php 
	require 'connection.php';
	$id_jabatan = $_GET['id_jabatan'];
	if (isset($id_jabatan)) {
		if (deleteJabatan($id_jabatan) > 0) {
			setAlert("Jabatan has been deleted", "Successfully deleted", "success");
		    header("Location: jabatan.php");
	    }
	} else {
	   header("Location: jabatan.php");
>>>>>>> 65582248febb4d8ffe28d25c54121d8a15e969ec
	}