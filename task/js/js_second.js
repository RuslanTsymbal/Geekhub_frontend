;+function() {
    function First (fn,name) {
        this.fn = function(fn){

        };
        this.name = function(name){
            return name;
        }
    }
    var first  = new First (objectUser.retrieve, objectUser.nameUser );
    console.log(first.name);
}();





/*напиши проверку, что бы задавалось
true и потом выводился результат retrieve
и он должен быть true соответственно*/