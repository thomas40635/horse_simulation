$(document).ready(function () {
    var showprocess = $('#show-process');
    showprocess.on('click', function(event){
        event.preventDefault();
        $.ajax({
            url: "/showprocess",
            success: function (response) {
                var div = document.createElement('div');
                $(div).addClass('message error');

                div.append(response);
                showprocess.after(div);
            }
        });
    });

    var killprocess = $('#kill-process');
    killprocess.on('click', function(event){
        event.preventDefault();
        var data = $('#process');
        $.ajax({
            url: "/killprocess",
            data: data,
            success: function (response) {
                var div = document.createElement('div');
                $(div).addClass('message error');

                div.append(response);
                killprocess.after(div);
            }
        });
    })
});