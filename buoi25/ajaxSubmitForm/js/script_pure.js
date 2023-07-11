$("form").submit(function (e) { 
    e.preventDefault();
    var method = $(this).attr("method");
    var submitUrl = $(this).attr("action");
    var fullname = $("input[name=fullname]").val();
    var email = $("input[type=email]").val();
    var content = $("textarea").val();
    $(".message").html("Đang gởi mail. Vui lòng chờ ...");

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.querySelector(".message").innerHTML = this.responseText;
    }
    xhttp.open("POST", submitUrl );
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`fullname=${fullname}&email=${email}&content=${content}`);

    // $.ajax({
    //     type: method,
    //     url: submitUrl,
    //     data: {fullname: fullname, email: email, content: content},
    //     success: function (response) {
    //         $(".message").html(response);
    //     }
    // });

});