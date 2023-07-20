<?php 
	require "layout/header.php";
?>
			<h1>Chỉnh sửa sinh viên</h1>
			<form action="list.html" method="POST">
				<input type="hidden" name="id" value="1">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label>Tên</label>
								<input type="text" class="form-control" placeholder="Tên của bạn" required name="name" value="Nguyễn Thị Bé Bảy">
							</div>
							<div class="form-group">
								<label>Birthday</label>
								<input type="date" class="form-control" placeholder="Ngày sinh của bạn" required name="birthday" value="2000-03-09">
							</div>
							<div class="form-group">
								<label>Chọn Giới tính</label>
								<select class="form-control" id="gender" name="gender" required>
									<option value="0" >Nam</option>
									<option value="1" selected>Nữ</option>
									<option value="2" >Khác</option>
								</select>
							</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit">Lưu</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<script src="../public/vendor/jquery-3.5.1.min.js"></script>
			<script src="../public/vendor/popper.min.js"></script>
			<script src="../public/vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
			<script src="../public/js/script.js"></script>
		</div>
	</body>
</html>