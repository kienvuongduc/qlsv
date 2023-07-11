var buttonTong = document.getElementById("id4");
buttonTong.onclick = function() {
	var inputA = document.getElementById("id1");
	var soA = inputA.value;

	var errorSoATag = document.getElementById("errorSoA");
	errorSoATag.innerHTML = "";
	if (soA == "") {
		errorSoATag.innerHTML = "Vui lòng nhập số a";
		return;// không chạy code phía dưới
	}

	var inputB = document.getElementById("id2");
	var soB = inputB.value;

	var errorSoBTag = document.getElementById("errorSoB");
	errorSoBTag.innerHTML = "";
	if (soB == "") {
		
		errorSoBTag.innerHTML = "Vui lòng nhập số b";
		return;// không chạy code phía dưới
	}

	//ajax here
	var numberA = $("#id1").val();
	var numberB = $("#id2").val();
	$.ajax({
		type: "GET",
		url: "calc.php",
		data: {soA:numberA, soB: numberB},
		success: function (response) {
			$("#id3").html(response);
		}
	});
}
