var express = require('express');
var bodyParser = require('body-parser');
var json = require('json-file');
var file = json.read('./db/task.json');
var dbtasks = file.get('tasks');
var app = express();
var countId;
if(dbtasks.length == 0 ){
    countId = 0;
}
else{
    var lastElement = dbtasks[dbtasks.length - 1];
    countId = lastElement.id
}


app.use(bodyParser.urlencoded({extended: false}));
app.use(express.static('public'));

app.post('/task', function (req, res) {
    file.writeSync();
    res.send(dbtasks);
});

app.post('/addtask', function (req, res) {
    dbtasks.push({"id": countId, "task": req.body.taskName, "status": "new"});
    file.writeSync();
    res.send(dbtasks);
    countId++;
});

app.post('/delltask', function (req, res) {
    dbtasks.forEach(function (item, i) {
        if (req.body.taskid == item.id) {
            dbtasks.splice(i, 1);
            file.writeSync();
        }
    });
    res.send(dbtasks);
});

app.listen(2000, function () {
    console.log('listen 2000');
});