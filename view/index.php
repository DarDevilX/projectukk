<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Blank Page | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="../public/jquery/jquery-3.3.1.min.js"></script>
    <link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../public/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='../public/sweetalert/sweetalert2.css'>
    <script src="../public/js/add.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    
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
                              <?php include '../public/php/script.php';  if($result != null){while($data = mysqli_fetch_assoc($result)): ?>
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
                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                    <a href="javascript:void(0);" data-toggle="tooltip" value="<?=$data['id']?>" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="exampleModal" >Add New Data</button>
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
                                <form action="add.php" method="post">
                                    <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" >
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
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"> 
                                    </div>
                                    <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"> 
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
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary top-right" type="submit" name="kirimData" id="kirimData" >Kirim</button>
                            </div>
                        </form>
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
    <script src="../public/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="../public/bootstrap/js/popper.min.js"></script>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../public/assets/js/app.js"></script>
    <script src="../public/assets/js/custom.js"></script>
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