<?php
include "../koneksi.php";

$NISN_Lama = mysqli_real_escape_string($koneksi, $_POST['NISN_Lama']);
$NISN = mysqli_real_escape_string($koneksi, $_POST['NISN']);
$Nama = mysqli_real_escape_string($koneksi, $_POST['Nama']);
$Username = mysqli_real_escape_string($koneksi, $_POST['Username']);
$Kota = mysqli_real_escape_string($koneksi, $_POST['Kota']);
$Jenis_Kelamin = mysqli_real_escape_string($koneksi, $_POST['Jenis_Kelamin']);
$Agama = mysqli_real_escape_string($koneksi, $_POST['Agama']);
$Jurusan = mysqli_real_escape_string($koneksi, $_POST['Jurusan']);
$Kelas = mysqli_real_escape_string($koneksi, $_POST['Kelas']);
$username_check_query = "SELECT username FROM akun WHERE username = '$Username'";
$username_check_result = mysqli_query($koneksi, $username_check_query);

if (mysqli_num_rows($username_check_result) == 0) {
    echo ("<script>
            alert('Error: Username does not exist in the akun table.');
            window.location.href='murid_edit.php?kode=$NISN_Lama';
          </script>");
    exit();
}

if (empty($NISN)) {
    $sqlstr = "UPDATE murid SET 
                nama_murid = '$Nama', 
                username = '$Username',
                kota = '$Kota', 
                jenkel = '$Jenis_Kelamin', 
                agama = '$Agama', 
                jurusan = '$Jurusan', 
                kelas = '$Kelas' 
               WHERE nisn = '$NISN_Lama'";
} else {
    $sqlstr = "UPDATE murid SET 
                nisn = '$NISN',
                nama_murid = '$Nama', 
                username = '$Username',
                kota = '$Kota', 
                jenkel = '$Jenis_Kelamin', 
                agama = '$Agama', 
                jurusan = '$Jurusan', 
                kelas = '$Kelas' 
               WHERE nisn = '$NISN_Lama'";
}

if (mysqli_query($koneksi, $sqlstr)) {
    header('Location: murid.php');
    exit();
} else {
    error_log("MySQL error: " . mysqli_error($koneksi));
    echo ("<script>
            alert('Error updating record: " . mysqli_error($koneksi) . "');
            window.location.href='murid_edit.php?kode=$NISN_Lama';
          </script>");
    exit();
}
?>
