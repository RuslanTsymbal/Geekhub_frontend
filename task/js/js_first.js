
;+function(){
     var objectUser = {
         nameUser: true,
         change: function (name){
            objectUser.nameUser = name;
         },
         retrieve: function () {
            if (typeof(objectUser.nameUser) === 'boolean' ){
                return objectUser.nameUser;
            } else {
                return false;
            }
        },
         check: function (){
             if(objectUser.nameUser != true){
                 objectUser.nameUser = true;
             }
         }
    };
    objectUser.change("hello");
    window.objectUser = objectUser;
}();

