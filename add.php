<html>
<head>
	<title>Add Data</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="public/jquery/jquery-3.3.1.min.js"></script>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='public/sweetalert/sweetalert2.css'>
</head>

<body>
	<h1 style="text-align: center;margin-top: 10px;">Sistem Crud</h1>
	<div class="container">
	<div class="card component-card_1" style="width: 800px; margin-left: 180px">
    	<div class="card-body">
		<form action="addFunct.php" method="post" name="form1" style="width">
				<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required >
				</div> 
				<div class="form-group">
				<label for="kelas">Kelas</label>
				<select id="kelas" name="kelas" class="form-control">
					<option value="10">X</option>
					<option value="11">XI</option>
				</select> 
				</div>
				<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required> 
				</div>
				<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" required> 
				</div>
				<div class="form-group">
				<label for="jurusan">jurusan</label>
				<select id="jurusan" name="jurusan" class="form-control">
					<option value="MM">Multimedia</option>
					<option value="RPL">RPL</option>
					<option value="BC">Broadcast</option>
					<option value="ANM">Animasi</option>
					<option value="AV">Audio Visual</option>
					<option value="TKJ">TKJ</option>
					<option value="EI">Elektronik Industri</option>
					<option value="MT">Mekatronika</option>
				</select> 
				</div>
				<div class="form-group">
				<label for= "organisasi">Organisasi</label>
				<select id="organisasi" name="organisasi" class="form-control">
					<option value="pmr">Palang Merah Indonesia</option>
					<option value="paskib">Paskibraka</option>
					<option value="ambalan">Ambalan</option>
					<option value="bdi">BDI</option>
					<option value="osis">OSIS</option>
				</select>
				</div>
				<div class="form-group">
				<label for= "eskul">Ekskul</label>
				<select id="eskul" name="eskul" class="form-control">
					<option value="basket">Basket</option>
					<option value="voli">Voli</option>
					<option value="td">Tarung Derajat</option>
					<option value="mp">Merpati Putih</option>
					<option value="band">Band</option>
					<option value="tari">Tari</option>
				</select>
				</div>
				</div>
				<center>
					<a href="index.php" class="btn btn-danger">Back</a>
					<input type="submit" class="btn btn-primary" name="Submit" value="Add Data">
				</center>
		</form>
	</div>
	</div>
	</div>
</body>
</html>

