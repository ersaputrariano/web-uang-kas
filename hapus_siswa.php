<<<<<<< HEAD
<?php 
	require 'connection.php';
	$id_siswa = $_GET['id_siswa'];
	if (isset($id_siswa)) {
		if (deleteSiswa($id_siswa) > 0) {
			setAlert("Siswa has been deleted", "Successfully deleted", "success");
		    header("Location: siswa.php");
	    }
	} else {
	   header("Location: siswa.php");
=======
<?php 
	require 'connection.php';
	$id_siswa = $_GET['id_siswa'];
	if (isset($id_siswa)) {
		if (deleteSiswa($id_siswa) > 0) {
			setAlert("Siswa has been deleted", "Successfully deleted", "success");
		    header("Location: siswa.php");
	    }
	} else {
	   header("Location: siswa.php");
>>>>>>> 65582248febb4d8ffe28d25c54121d8a15e969ec
	}