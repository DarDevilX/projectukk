var mysql = require("mysql");
var conn = mysql.createConnection({
  host: "localhost", 
  user: "root", 
  password: "", 
  database: "projectukk", 
});
let i = 5
function startTimer() {

  var countdownTimer = setInterval(function() {
      console.log("Reconnecting In : "+i);
      i = i - 1;
      if (i <= 0) {
          clearTimeout(countdownTimer);
      }
  }, 1000);
}

conn.connect(function (err) {
  if (err){
    console.log("An Error Was Occured While Trying To Connect Database");
    startTimer()
    setTimeout(reconnect,6000)
  }else{
    console.log("Database is connected successfully!");
  }
});
function reconnect(){
  try{
    conn.connect(function(err){
      if(!err){
        console.log('Database is connected Successfully!');
      }else{
        let patt = /Cannot enqueue Handshake after fatal error/g
        let string = ""+err
        let result = string.match(patt)
        if(result){
          console.log("Error Connecting To Database Because Xampp Is Not Started Yet");
        }else{
          console.log("Error Connecting Database!");
        }
      }
    })
  }catch(e){
  }
  
}
module.exports = conn;