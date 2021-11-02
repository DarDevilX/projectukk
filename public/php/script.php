<?php
    include '../db.php';
    $query = "SELECT * FROM siswa";
    $result = mysqli_query($conn,$query);
    function addStudent(){
        $name = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kelas =$_POST['kelas'];
    }
?>