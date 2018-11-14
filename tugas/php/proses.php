<?php 
	if (isset($_POST['btn_submit'])) {
		$pass=$_POST['password'];
		$confP=$_POST['confPass'];
		$npm=$_POST['NPM'];
		$nama=$_POST['Nama'];
		$kelas=$_POST['Kelas'];
		
		if (empty($pass) || empty($confP) || empty($npm) || empty($nama) || empty($kelas)) {
			header("Location: ../index.php?submit=empty&pass=$pass&npm=$npm&nama=$nama&kelas=$kelas");
			exit();
		} 

		if (!empty($pass) && !empty($npm) && !empty($nama) && !empty($kelas)){
			if ($pass == $confP) {
				header("Location: ../index.php?submit=succes&pass=$pass&confPass=$confP&npm=$npm&nama=$nama&kelas=$kelas");
			} else {
				header("Location: ../index.php?submit=succes&pass=$pass&npm=$npm&nama=$nama&kelas=$kelas");
			}
		}
	}
?>