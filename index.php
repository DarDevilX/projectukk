<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id DESC"); // using mysqli_query instead
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
    <script src="public/js/add.js"></script>
</head>

<body class="alt-menu">
    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm expand-header">
            <h1 style="margin-left: 520px;margin-top: 10px;">Sistem Crud</h1>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="padding: none;">
            <div class="layout-px-spacing">
                <!-- CONTENT AREA -->
                <div class="card component-card_1" style="margin-top: 80px; width: 1285px; margin-left: 22px;">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                          <thead>
                              <tr>
                                  <th class="" hidden>Id</th>
                                  <th class="checkbox-column text-center">
                                      <div class="custom-control custom-checkbox checkbox-primary">
                                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll">
                                        <label class="custom-control-label" for="todoAll"></label>
                                      </div>
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
                              <?php if($result != null){while($data = mysqli_fetch_assoc($result)): ?>
                              <tr>
                                  <td hidden><?=$data['id']?></td>
                                  <td class="checkbox-column text-center">
                                      <div class="custom-control custom-checkbox checkbox-primary">
                                        <input type="checkbox" class="custom-control-input todochkbox" value="<?= $data['id']?>" id="todo-5">
                                        <label class="custom-control-label" for="todo-5"></label>
                                      </div>
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
                                    <td colspan="6">
                                        <h3 style="text-align: center;">Tidak Ditemukan Data</h3>
                                    </td>
                                    </tr>
                                <?php } ?>
                          </tbody>
                      </table>
                      <!-- Button trigger modal -->
					  <a class="btn btn-primary" href="add.html">Add New Data</a>
                    <button class="btn btn-danger">Delete Selected Data</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                <!-- CONTENT AREA -->
            </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script  type="text/javascript">
    $("#todoAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    </script>
</body>
</html>
