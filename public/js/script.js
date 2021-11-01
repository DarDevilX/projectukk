// import Swal from 'sweetalert2';

const { default: Swal } = require("sweetalert2")
const conn = require('../databaseConfig.js');

function addStudent(){
    let nama = document.getElementById('nama').value
    let alamat = document.getElementById('alamat').value
    let email = document.getElementById('email').value
    let jurusan = document.getElementById('jurusan').value
    let sql = "INSERT INTO siswa (nama,alamat,email,jurusan) VALUE('"+nama+"','"+alamat+"','"+email+"','"+jurusan+"')"
    conn.query(sql,(err)=>{
        if(err){
                Swal.fire('Upss!','Gagal Menambah Data Ke Database','warning')           
        }else{
                Swal.fire('Success','Sukses Menambah Data Ke Database','success')           
        }
    })
}