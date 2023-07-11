<?php require "../layout/header.php"; ?>
<h1>Danh sách sinh viên </h1>
<a href="add.php" class="btn btn-info">Add</a>
<form action="list.php" method="GET">
    <label class="form-inline justify-content-end">Tìm kiếm: <input type="search" name="search" class="form-control"
            value="<?=!empty($_GET["search"]) ? $_GET["search"] : ""?>">
        <button class="btn btn-danger">Tìm</button>
    </label>
    <input type="hidden" name="c" value="register">
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
            <th>Mã SV</th>
            <th>Tên SV</th>
            <th>Ngày sinh</th>
            <th>GIới tính</th>
            <th>Điểm</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
                        $sql = "SELECT * FROM student";
                        if(!empty($_GET["search"])) {
                            $pattern = $_GET["search"];
                            $sql .= " WHERE name LIKE '%$pattern%'";
                        }
                        //query = thực thi
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $stt = 0;
                            while($row = $result->fetch_assoc()) {
                                $stt++;
                               ?>
        <tr>
            <td><?= $stt?></td>
            <td><?= $row["id"]?></td>
            <td><?= $row["name"]?></td>
            <td><?= convertDateToVnFormat( $row["birthday"])?></td>
            <td><?= getGenderName($row["gender"]) ?></td>
            <td>5</td>
            <td><a href="edit.php?id=<?= $row["id"]?>">Sửa</a></td>
            <td><a data="1" class="delete" href="list.html" type="student">Xóa</a></td>
        </tr>


        <?php
                            }
                        }
                    ?>
    </tbody>
</table>
<div>
    <span>Số lượng: <?= $stt?></span>
</div>
<?php require "../layout/footer.php"; ?>