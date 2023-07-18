//List.php
<?php require "../layout/header.php"; ?>
<h1>Danh sách sinh viên</h1>
<a href="add.php" class="btn btn-info">Add</a>
<form action="list.php" method="GET">
    <label class="form-inline justify-content-end">Tìm kiếm: <input type="search" name="search" class="form-control" value="<?= !empty($_GET["search"]) ? $_GET["search"] : ""?>">
    <button class="btn btn-danger">Tìm</button>
    </label>
    <input type="hidden" name="c" value="register">
</form>
<?php 
    require "../config.php";
?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Mã SV</th>
            <th>Tên SV</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Điểm</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM student";
            if(!empty($_GET["search"])) {
                $pattern = $_GET["search"];
                $sql .= " WHERE name LIKE '%$pattern%'";
            }
            $result = $conn->query($sql);
            $stt= 0;
            if($result-> num_rows>0){
                while($row =$result->fetch_assoc()) {
                    $stt++;
                    ?>

                    <tr>
                        <td><?=$stt?></td>
                        <td><?=$row["id"]?></td>
                        <td><?=$row["name"]?></td>
                        <td><?=convertDateToVnFormat($row["birthday"])?></td>
                        <td><?=getGenderName($row["gender"])?></td>
                        <td><a href="edit.php?id=<?= $row["id"]?>">Sửa</a></td>
                        <td><button class="btn btn-danger btn-sm delete" data-url="delete.php?id=<?=$row["id"]?>">Xóa</button></td>

                    </tr>
                    <?php 
                                    }
                                }
                    
                    ?>
    </tbody>
</table>