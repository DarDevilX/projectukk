const express = require('express');
const app = express();
const path = require('path');
const db = require(__dirname+'/databaseConfig.js');
const mysql = require('mysql');

app.set("views", path.join(__dirname, "views"));
app.set("view engine", "ejs");
app.use(express.static(path.join(__dirname, "public")));

app.get('/',(req,res)=>{
    let sql = "SELECT * FROM siswa"
    db.query(sql,(err,result)=>{
        if(err)throw err;
        res.render('pages/home',{
            userData : result
        })
    })
    
})

app.listen(3000,(err)=>{
    if(err){
        console.log("Error Starting Server!");
    }else{
        console.log("Server Started On http://localhost:3000");
    }
})