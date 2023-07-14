<?php require "../layout/header.php";?>
<h1>Danh sách Môn Học</h1>
<a href="add.php" class="btn btn-info">Add</a>
<form action="list.php" method="GET">
    <label class="form-inline justify-content-end">Tìm kiếm: <input type="search" name="search" class="form-control"
            value="">
        <button class="btn btn-danger">Tìm</button>
    </label>
    <input type="hidden" name="c" value="subject">
</form>
<?php 
                require "../config.php";
                require "../connect_DB.php";
                require "../functions.php";
            ?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã MH</th>
            <th>Tên</th>
            <th>Số tín chỉ</th>
            <th colspan="2">Tùy Chọn</th>
        </tr>
    </thead>
    <tbody>
	<?php 
                        $sql = "SELECT * FROM subject";
                        if(!empty($_GET["search"])) {
                            $pattern = $_GET["search"];
                            $sql .= " WHERE name LIKE '%$pattern%'";
                        }
                        //query = thực thi
                        $result = $conn->query($sql);
						$stt = 0;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $stt++;
                               ?>

        <tr>
            <td><?=$stt?></td>
            <td><?=$row["id"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["number_of_credit"]?></td>
            <td><a href="edit.php?id=<?= $row["id"]?>">Sửa</a></td>
            <td><button class="btn btn-danger btn-sm delete" data-url="delete.php?id=<?= $row["id"]?>">Xóa</button></td>
        </tr>
		<?php
                            }
                        }
                    ?>

    </tbody>
</table>
<div>
    <span>Số lượng: 3</span>
</div>
<?php require "../layout/footer.php";?>