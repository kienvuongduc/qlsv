// concat()
var arr1 = [2, 5, 7];
var arr2 = [4,8];
var arr3 = arr1.concat(arr2);
console.log("====Hàm concat()====");
console.log(arr3);


//join() - ngược của hàm split() của chuỗi
var arr4 = ["xin", "chao", "ban"];
var seperator = " ";
var str5 = arr4.join(seperator);
console.log("====Hàm join()====");
console.log(str5);


//push()
var arr6 = ["nam", "nhan", "hai"];
arr6.push("tien");
console.log("====Hàm push()====");
console.log(arr6);


//pop()
var arr7 = ["nam", "nhan", "hai"];
var str1 = arr7.pop();
console.log("====Hàm pop()====");
console.log(str1);

console.log(arr7);



//unshift()
var arr8 = ["nam", "nhan", "hai"];
arr8.unshift("tien");
console.log("====Hàm unshift()====");
console.log(arr8);


//shift()
var arr9 = ["nam", "nhan", "hai"];
var str2 = arr9.shift();
console.log("====Hàm shift()====");
console.log(str2);

console.log(arr9);


//splice() (thêm/xóa phần tử bất kỳ vị trí trong array)
// arr.splice(start, length, added_array);
var arr10 = ["nam", "nhan", "hai", "thanh"];
var start = 1;
var length = 2;
var arr11 = arr10.splice(start, length);
console.log("====Hàm splice() - Xóa ====");
console.log(arr11);

console.log(arr10);


var arr12 = ["nam", "nhan", "hai", "thanh"];
var start = 1;
var length = 0;
var arr13 = arr12.splice(start, length, "hoa", "hanh");
console.log("====Hàm splice() - Thêm ====");
console.log(arr13);

console.log(arr12);


//sort() - Sắp xếp theo thứ tự tăng dần theo alphabet
var arr14 = [51, 7, 1, 2, 9];
arr14.sort();
console.log("====Hàm sort() ====");
console.log(arr14);

// sort - sắp xế theo thứ tự tăng dần của các con số
var arr14 = [51, 7, 1, 2, 9];
arr14.sort(function(a, b) {

	//Nếu a - b > 0      	=> a > b
	//Nếu a - b < = 		=> a < b
	// Nếu a - b == 0 		=> a = b
	return a - b;
});
console.log(arr14);

// sort - sắp xế theo thứ tự giảm dần của các con số
var arr14 = [51, 7, 1, 2, 9];
arr14.sort(function(a, b) {
	return b - a;
});
console.log(arr14);

// sort - sắp xế theo thứ tự giảm dần của các con số, chuỗi
var arr14 = [51, 7, 1, 2, 9, 9.7, 9.2, 9.4, "8", "11"];
arr14.sort(function(a, b) {
	return Number(b) - Number(a);
});
console.log(arr14);

// sort - sắp xế theo thứ tự giảm dần của các con số, chuỗi bằng arrow function
var arr14 = [51, 7, 1, 2, 9, 9.7, 9.2, 9.4, "8", "11"];
arr14.sort((a, b) => Number(b) - Number(a));
console.log(arr14);


//reverse()
var arr15 = [5, 7, 1, 2, 9];
arr15.reverse();
console.log("====Hàm reverse() ====");
console.log(arr15);


//Bài tập sắp xếp theo thứ tự giảm dần của arr151
var arr151 = [5, 7, 1, 2, 9];
arr151.sort();
arr151.reverse();
console.log("====Sắp xếp giảm dần ====");
console.log(arr151);


//includes()
var arr16 = [5, 7, 1, 2, 9];
var result = arr16.includes(7);
console.log("====Hàm includes() ====");
console.log(result);


//slice()
var arr17 = [5, 7, 1, 2, 9];
var start = 1;
var end = 3;//bỏ phần tử end ra
var arr18 = arr17.slice(start, end);
console.log("====Hàm slice() ====");
console.log(arr18);
// Không ảnh hưởng trên array thao tác
console.log(arr17);


// indexOf() (trả về chỉ index của phần tử đầu tiên được tìm thấy)
var arr19 = ["nam", "nhan", "hai", "thanh", "hai", "tien"];
var searchElement = "hai";
var index = arr19.indexOf(searchElement);
console.log("====Hàm indexOf() ====");
console.log(index);


// lastIndexOf() (trả về chỉ index của phần tử cuối cùng được tìm thấy)
var arr20 = ["nam", "nhan", "hai", "thanh", "hai", "tien"];
var searchElement = "hai";
var index = arr20.lastIndexOf(searchElement);
console.log("====Hàm lastIndexOf() ====");
console.log(index);


// toString()
var arr21 = ["nam", "nhan", "hai", "thanh", "hai", "tien"];
// bằng với arr21.join(",");
var str4 = arr21.toString();//"nam,nhan,hai,thanh,hai,tien"
console.log("====Hàm toString() ====");
console.log(str4);

// join()
var arr21 = ["nam", "nhan", "hai", "thanh", "hai", "tien"];
var str4 = arr21.join(" ");
console.log(str4);


//forEach() - Duyệt các phần tử trong array
var arr22 = [5, 7, 1, 2, 9];
// var arr22 = ["a", "b", 5, "c"];

console.log("====Hàm forEach() ====");
arr22.forEach(callBackForEach, 2);//callback

// Tăng 2 đơn vị cho giá trị của các phần tử trong array
function callBackForEach(value, index, arr) {
	// this có giá trị là 2, được truyền vào ở tham số thứ 2 của forEach()
	console.log(index + ": " + (value + this));
	
	// Cập nhật lại các phần tử trong array nếu muốn
	// arr[index] = value + this;
}

// map() - Tạo mảng mới từ mảng cũ

console.log("====Hàm map() ====");
var arr23 = [5, 7, 1, 2, 9];
var arr24 = arr23.map(callbackMap, 3);

// Cộng mỗi phần tử 3 đơn vị
function callbackMap(value, index, arr) {
	// this có giá trị là 3, được truyền vào ở tham số thứ 2 của map()
	return value + this;
}
console.log(arr24);


// filter() - Tạo mảng mới từ các phần tử của mảng cũ dựa vào điều kiện

console.log("====Hàm filter() ====");
var arr25 = [5, 7, 1, 2, 9];
var arr26 = arr25.filter(callbackFilter, 5);

// Lọc những phần tử lớn hơn hoặc bằng 5
function callbackFilter(value, index, arr) {
	// this có giá trị là 5, được truyền vào ở tham số thứ 2 của filter()
	return value >= this;
}
console.log(arr26);

// filter() - Tạo mảng mới từ các phần tử của mảng cũ dựa vào điều kiện

console.log("====Hàm filter() ====");
var arr25 = ["toan", "ly", "hoa"];
var arr26 = arr25.filter(callbackFilterSubject, "o");

// Lọc những phần tử lớn hơn hoặc bằng 5
function callbackFilterSubject(value, index, arr) {
	// this có giá trị là 5, được truyền vào ở tham số thứ 2 của filter()
	return value.includes(this);
}
console.log(arr26);


// reduce() - Trả về giá trị đơn

console.log("====Hàm reduce() ====");
var arr27 = [5, 7, 1, 2, 9];
var init_sum = 0;
var total = arr27.reduce(callbackReduce, init_sum);

// Cộng những phần tử  trong mảng
function callbackReduce(sum, value, index, arr) {
	// sum được khởi tạo là giá trị init_sum (giá trị truyền vào cho tham số thứ 2)
	return sum + value;
}
console.log(total);



// reduceRight() - Trả về giá trị đơn

console.log("====Hàm reduceRight() ====");
var arr28 = [5, 7, 1, 2, 9];
var init_sum = 100;
var total = arr28.reduceRight(callbackReduceRight);

// Trừ các phần tử trong mảng từ phải sang trái
// Nếu có tham số thứ 2 thì sum được khởi tạo là giá trị của tham số thứ 2
//  => Lặp 5 lần từ phải sang trái: 9, 2, 1, 7, 5
// Nếu không có tham số thứ 2 thì sum được khởi tạo là giá trị của phần tử cuối cùng bên phải
//  => Lặp 4 lần từ phải sang trái: 2, 1, 7, 5
function callbackReduceRight(sum, value, index, arr) {
	// sum được khởi tạo là giá trị init_sum (giá trị truyền vào cho tham số thứ 2)
	return sum - value;
}
console.log(total);


//every() - Trả về true nếu tất cả các phần tử đều thõa mản điều kiện

console.log("====Hàm every() ====");
var arr29 = [5, 7, 1, 2, 9];
var avg_score = 5;
var result = arr29.every(callbackEvery, avg_score);

// Cộng những phần tử  trong mảng
function callbackEvery(value, index, arr) {
	// sum được khởi tạo là giá trị init_sum (giá trị truyền vào cho tham số thứ 2)
	return value >= this;
}
console.log(result);


//some() - Trả về true nếu tồn tại 1 phần tử thõa mản điều kiện

console.log("====Hàm some() ====");
var arr30 = [5, 7, 1, 2, 9];
var avg_score = 5;
var result = arr30.some(callbackEvery, avg_score);

// Cộng những phần tử  trong mảng
function callbackEvery(value, index, arr) {
	// this có giá trị là 5, được truyền vào ở tham số thứ 2 của some()
	return value >= this;
}
console.log(result);


