<html>
<head>
	<title>Add Data</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$kelas =$_POST['kelas'];
	$jurusan = $_POST['jurusan'];
	$organisasi = $_POST['organisasi'];
	$eskul = $_POST['eskul'];
	// Send Data To DataBase
		$result = mysqli_query($mysqli, "INSERT INTO siswa(nama,alamat,email,kelas,jurusan,organisasi,eskul) VALUES('$nama','$alamat','$email','$kelas','$jurusan','$organisasi','$eskul')");
}
?>
	<?php 
		if($result){
			echo "
				<script src'sweetalert2.js'></script>
				<script>
					swal({
					title: 'Success',
					text: 'Succsess Adding Data To Database',
					type: 'success',
					}).then((value) => {
					window.location = 'index.php'
					}).catch(swal.noop)
				</script>";
		}
	?>
</body>
</html>
