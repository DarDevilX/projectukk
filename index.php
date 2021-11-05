<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id ASC"); // using mysqli_query instead
$queryres =  mysqli_num_rows($result);
?>

<html>
<head>	
	<title>Homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- <script src="public/jquery/jquery-3.3.1.min.js"></script> -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='assets/sweetalert/sweetalert2.css'>
</head>

<body class="alt-menu">
    <!--  BEGIN NAVBAR  -->
            <h1 style="text-align: center;margin-top: 10px;">Sistem Crud</h1>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="padding: none;">
            <div class="layout-px-spacing">
                <!-- CONTENT AREA -->
                <div class="card component-card_1" style="width: 1285px; margin-left: 22px;">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                          <thead>
                              <tr>
                                  <th class="" hidden>Id</th>
                                  <th class="text-center">
								  	<input type="checkbox" id="todoAll">
                                  </th>
                                  <th class="">Nama</th>
                                  <th class="">Alamat</th>
                                  <th class="">Email</th>
                                  <th class="">Jurusan</th>
                                  <th class="">Kelas</th>
                                  <th class="">Eskul</th>
                                  <th class="">Organisasi</th>
                                  <th class="text-center">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php if($queryres != null){while($data = mysqli_fetch_array($result)): ?>
                              <tr>
                                  <td hidden><?=$data['id']?></td>
                                  <td class="text-center">
								  	<input type="checkbox" name="todo" value="<?= $data['id']?>">
                                  </td>
                                  <td>
                                      <p class="mb-0"><?= $data['nama']?></p>
                                  </td>
                                  <td><?= $data['alamat']?></td>
                                  <td><?= $data['email']?></td>
                                  <td><?= $data['jurusan']?></td>
                                  <td><?= $data['kelas']?></td>
                                  <td><?= $data['eskul']?></td>
                                  <td><?= $data['organisasi']?></td>
                                  <td class="text-center">
                                    <a href="edit.php?id=<?=$data['id']?>" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                    <a href="delete.php?id=<?=$data['id']?>" data-toggle="tooltip" value="<?=$data['id']?>" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                  </td>
                              </tr>
                                <?php endwhile;}else{?>
                                <tr>
                                    <td colspan="10">
                                        <h3 style="text-align: center;">Tidak Ditemukan Data</h3>
                                    </td>
                                    </tr>
                                <?php } ?>
                          </tbody>
                      </table>
                      <!-- Button trigger modal -->
					  <a class="btn btn-primary" href="add.php" id="addBtn">Add New Data</a>
                    <button class="btn btn-danger" id="deleteBtn">Delete Selected Data</button>
                <!-- CONTENT AREA -->
            </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
	<div class="container" id="jmlData" hidden><?php echo $queryres; ?></div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->				
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
	<script type="text/javascript">
	let batas = document.getElementById('jmlData').innerHTML
	console.log(batas)
		if(batas >= 30){
			$('#addBtn').removeAttr('href')
		}
	</script>
    <script  type="text/javascript">
    $("#todoAll").click(function(){
        $('input[name="todo"]').prop('checked',this.checked);
		$('#deleteBtn').prop('disabled', !$('.checkbox:checked').length);
    });
    </script>
</body>
</html>
