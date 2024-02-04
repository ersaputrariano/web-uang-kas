<<<<<<< HEAD
<?php 
	require 'connection.php';
	$id_pengeluaran = $_GET['id_pengeluaran'];
	if (isset($id_pengeluaran)) {
		if (deletePengeluaran($id_pengeluaran) > 0) {
			setAlert("Pengeluaran has been deleted", "Successfully deleted", "success");
		    header("Location: pengeluaran.php");
	    }
	} else {
	   header("Location: pengeluaran.php");
=======
<?php 
	require 'connection.php';
	$id_pengeluaran = $_GET['id_pengeluaran'];
	if (isset($id_pengeluaran)) {
		if (deletePengeluaran($id_pengeluaran) > 0) {
			setAlert("Pengeluaran has been deleted", "Successfully deleted", "success");
		    header("Location: pengeluaran.php");
	    }
	} else {
	   header("Location: pengeluaran.php");
>>>>>>> 65582248febb4d8ffe28d25c54121d8a15e969ec
	}