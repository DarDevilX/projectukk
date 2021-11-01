const express = require('express');
const app = express();
const path = require('path');
const db = require('./databaseConfig');
const bodyParser = require('body-parser');
const morgan = require('morgan');

// Request Log
// app.use(morgan('tiny'))

// View Engine
app.set("views", path.join(__dirname, "views"));
app.set("view engine", "ejs");

// Path
app.use(express.static(path.join(__dirname, "public")));
app.use(('/css'),express.static(path.resolve(__dirname, "assets/css")));
app.use(('/img'),express.static(path.resolve(__dirname, "assets/img")));
app.use(('/js'),express.static(path.resolve(__dirname, "assets/js")));
app.use(express.static(path.join(__dirname,'public/js')))

// Body Parser
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())

let arrResult = []

app.get('/',(req,res)=>{
    data = undefined
    let sql = "SELECT * FROM siswa"
    db.query(sql,(err,result)=>{
        if(err){
            console.log("Error :"+err);
        }else{
            arrResult.push(result)
        res.render('home',{
            result : data,
            userData : result
        })
        }
    })
});

app.post('/add-student',(request,response)=>{
    let data = undefined
    var nama = request.body.nama
    var alamat = request.body.alamat
    var email = request.body.email
    var jurusan = request.body.jurusan
    let sql = "INSERT INTO siswa (nama,alamat,email,jurusan) VALUE('"+nama+"','"+alamat+"','"+email+"','"+jurusan+"')"
    db.query(sql,(err)=>{
        if(err){
            data = true
            response.redirect('/')
        }else{
            data = false
            response.redirect('/')
        }
    })
})

app.post('/add-student',(request,response,next)=>{
    var nama = request.body.nama
    var alamat = request.body.alamat
    var email = request.body.email
    var jurusan = request.body.jurusan
    let sql = "INSERT INTO siswa (nama,alamat,email,jurusan) VALUE('"+nama+"','"+alamat+"','"+email+"','"+jurusan+"')"
    db.query(sql)
})

app.listen(3000,(err)=>{
    if(err){
        console.log("Error Starting Server!");
    }else{
        console.log("Server Started On http://localhost:3000");
    }
});