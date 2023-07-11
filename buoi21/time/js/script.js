$("button").click(function(e){
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "server.php",
        success: function (response) {
            $("#kq").html(response);
        }
    });
});