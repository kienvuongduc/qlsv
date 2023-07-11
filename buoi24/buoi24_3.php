<?php 
$filename = "files/demo.txt";
$fp = fopen($filename, "r");//read
//feof: file end of file
while (!feof($fp)) { //file end of file
	$c = fgetc($fp); //fgetc - file get character
	if ($c == "\n") {
		$c = "<br>";
	}
	echo $c;
}
// echo $fp;
fclose($fp);

echo "<br>";
$fp = fopen($filename, "r");

// fgets
while (!feof($fp)) {
	$line = fgets($fp);
	$line = str_replace("\n", "<br>", $line);
	echo $line;
	// echo "<br>";
}
fclose($fp);

// file_get_contents
echo "Đọc theo kiểu file_get_contents() <br>";
$content = file_get_contents($filename);
$content = str_replace("\n", "<br>", $content);
echo $content;

// r: read
// a: append
// w: write
$filename = "files/demo1.txt";
$fp = fopen($filename, "a");
// fwrite($fp, "\n");
// fwrite($fp, "Nguyen Thi D");
fwrite($fp, "\nNguyen Thi D");
fclose($fp);

$content = "\nxyz...abc";
file_put_contents($filename, $content, FILE_APPEND);

//xóa file
$removed_file = "files/demo2.txt";
if (file_exists($removed_file)) {
	//xóa
	unlink($removed_file);
}