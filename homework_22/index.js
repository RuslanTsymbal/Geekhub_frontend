var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var jsonFile = require('json-file');

var file = jsonFile.read('./db/tasks.json');
var tasks = file.get('tasks');

app.use(bodyParser.urlencoded());

app.use('/', express.static('public'));
var countId = 0;
app.post('/task', function (req, res) {
    var name = req.body;
    console.log(name);
    tasks.push({
        "id": countId,
        "name": name,
        "status": "new"
    });
    file.writeSync();
    res.send(req.query.callback + '('+ JSON.stringify(file) + ');');
    countId++;
});
/*app.get('/endpoint', function(req, res){
 var obj = {};
 obj.title = 'title';
 obj.data = 'data';

 console.log('params: ' + JSON.stringify(req.params));
 console.log('body: ' + JSON.stringify(req.body));
 console.log('query: ' + JSON.stringify(req.query));

 res.header('Content-type','application/json');
 res.header('Charset','utf8');
 res.send(req.query.callback + '('+ JSON.stringify(obj) + ');');
 });*/

//app.post('/endpoint', function (req, res) {
//    //var obj = {};
//    //console.log('body: ' + JSON.stringify(req.body));
//    //res.send(req.body);
//});


app.listen(3000, function () {
    console.log(' listen on 3000');
});