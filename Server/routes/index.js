var express = require('express');
var router = express.Router();
var fs = require('fs');

/* GET home page. */
router.get('/', function(req, res) {
  res.render('index', { title: 'Express' });
});

router.get('/getData', function(req,res){
  fs.readFile('./data.json','utf8', function(err, data){
    if(err) 
      console.log(err);
    data = JSON.parse(data);
    console.log(data);
    res.send(data);
  });
});

module.exports = router;
