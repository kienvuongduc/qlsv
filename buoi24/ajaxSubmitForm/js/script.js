$("form").submit(function (e) { 
    e.preventDefault(); // tránh không submit khi ko có thông tin
    var method = $(this).attr("method");
    var submitUrl = $(this).attr("action");
    var fullname = $("input[name=fullname]").val();
    var email = $("input[type=email]").val();
    var content = $("textarea").val();
    $(".message").html("Đang gởi mail. Vui lòng chờ ...");
    $.ajax({
        type: method,
        url: submitUrl,
        data: {fullname: fullname, email: email, content: content},
        success: function (response) {
            $(".message").html(response);
        }
    });

});