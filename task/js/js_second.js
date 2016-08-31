

function testUser_2() {
    function record(fn) {
        this.func = fn;
        this.func2 = function(){
            return objectUser.nameUser;
        };
    }
}

var first = new testUser_2 (objectUser.retrieve );