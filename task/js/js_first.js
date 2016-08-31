
function testUser() {
    var objectUser = {
        nameUser: true,
        change: function (retrieve){
                if(objectUser.nameUser == false){
                objectUser.nameUser = true;
            }
        },
        retrieve: function () {
            if (typeof(objectUser.nameUser) == boolean){
                return  false;
            }
        }
    };
}

