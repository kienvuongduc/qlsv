//forEach() - Duyệt các phần tử trong array
//Cách 1: anonymus function - function không có tên
var arr22 = [5, 7, 1, 2, 9];
document.write("====Hàm forEach() ====<br>");
arr22.forEach(function(value, index, arr){
	// this có giá trị là 2, được truyền vào ở tham số thứ 2 của forEach()
	document.write(index + ": " + (value + this));
	document.write("<br>");
	// Cập nhật lại các phần tử trong array nếu muốn
	// arr[index] = value + this;
}, 2);

//Cách 2: arrow function in ES6
var arr22 = [5, 7, 1, 2, 9];
document.write("====Hàm forEach() ====<br>");
arr22.forEach((value, index, arr) => {
	// Không truyền được số 2 vào this
	console.log(this);
	document.write(index + ": " + (value + 2));
	document.write("<br>");
	// Cập nhật lại các phần tử trong array nếu muốn
	// arr[index] = value + this;
}, 2);


