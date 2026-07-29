	<?php
	include 'koneksi.php';

	// Gunakan mysqli_real_escape_string untuk mencegah SQL Injection
	$username = mysqli_real_escape_string($koneksi, $_POST['username']);
	$password = md5($_POST['password']);

	// Periksa apakah username sudah terdaftar
	$sql = "SELECT * FROM `akun` WHERE username = '$username'";
	$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

	if (mysqli_num_rows($query) == 0) {
		// Masukkan data ke tabel akun
		$input_akun = "INSERT INTO `akun` (`username`, `password`, `level`) VALUES ('$username', '$password', '3')";

		// Masukkan data ke tabel murid
		$nisn = mysqli_real_escape_string($koneksi, $_POST['Nisn']);
		$nama_murid = mysqli_real_escape_string($koneksi, $_POST['Nama_Murid']);
		$kota = mysqli_real_escape_string($koneksi, $_POST['Kota']);
		$jenkel = mysqli_real_escape_string($koneksi, $_POST['Jenis_Kelamin']);
		$agama = mysqli_real_escape_string($koneksi, $_POST['Agama']);
		$jurusan = mysqli_real_escape_string($koneksi, $_POST['Jurusan']);
		$kelas = mysqli_real_escape_string($koneksi, $_POST['Kelas']);
		$input_murid = "INSERT INTO `murid` (`nisn`, `nama_murid`, `kota`, `jenkel`, `agama`, `jurusan`, `kelas`) 
						VALUES ('$nisn', '$nama_murid', '$kota', '$jenkel', '$agama', '$jurusan', '$kelas')";

		// Eksekusi query
		if (mysqli_query($koneksi, $input_akun) && mysqli_query($koneksi, $input_murid)) {
			echo ("<script>
					alert('Berhasil Registrasi');
					window.location.href='index.php';
				</script>");
		} else {
			echo ("<script>
					alert('Registrasi Gagal. Silakan coba lagi.');
					window.location.href='index.php';
				</script>");
		}
	} else {
		echo ("<script>
				alert('Registrasi Gagal. Username sudah terdaftar.');
				window.location.href='index.php';
			</script>");
	}
	?>
