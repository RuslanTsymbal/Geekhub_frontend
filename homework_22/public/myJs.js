$(document).ready(function () {
    $('#addTask').click(function (e) {
         e.preventDefault();
        var taskName = $('#task').val();
        var data = taskName;
        
        $.ajax({
            type: 'POST',
            data: JSON.stringify(data),
            url: 'http://localhost:3000/task',
            success: function (data) {
                console.log(JSON.stringify(data));
            }
        })
    });

});
