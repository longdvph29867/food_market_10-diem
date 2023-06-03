<div class="container">
  <h6 class="alert alert-primary">Cập nhật khách hàng</h6>
  <form class="row" action="index.php" method="post" method="post" enctype="multipart/form-data">
    <div class="form-group col-6">
      <label for="">Mã khách hàng</label>
      <input type="text" name="ma-kh" id="" class="form-control" value="<?php echo $khachHang['ma_kh'] ?>">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group col-6">
      <label for="">Tên Khách hàng</label>
      <input type="text" name="ten-kh" id="" class="form-control" value="<?php echo $khachHang['ho_ten'] ?>">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group col-6">
      <label for="">Mật khẩu</label>
      <input type="password" name="password-kh" id="" class="form-control" value="<?php echo $khachHang['mat_khau'] ?>">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group col-6">
      <label for="">Xác nhận mật khẩu</label>
      <input type="password" name="password-confirm" id="" class="form-control" value="<?php echo $khachHang['mat_khau'] ?>">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group col-6">
      <label for="">Địa chỉ Email</label>
      <input type="email" name="email-kh" id="" class="form-control" required value="<?php echo $khachHang['email'] ?>">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="col-6">
      <label for="formFile" class="form-label">Hình</label>
      <input type="text" hidden name="old_img-kh" value="<?php echo $khachHang['hinh'] ?>">
      <input class="d-block" type="file" id="formFile" name="img-kh">
      <?=$khachHang['hinh']?>
      <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="form-group col-6">
      <label class="d-block " for="">Kích hoạt</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kich-hoat" id="kich-hoat-1" value="1" <?php if ($khachHang['kich_hoat'] == 1) echo "checked" ?>>
        <label class="form-check-label" for="kich-hoat-1">
          Kích hoạt
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kich-hoat" id="kich-hoat-2" value="0" <?php if ($khachHang['kich_hoat'] == 0) echo "checked" ?>>
        <label class="form-check-label" for="kich-hoat-2">
          Không kích hoạt
        </label>
      </div>
    </div>
    <div class="form-group col-6">
      <label class="d-block" for="">Vai trò</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="vai-tro" id="vai-tro-1" value="1" <?php if ($khachHang['vai_tro'] == 1) echo "checked" ?>>
        <label class="form-check-label" for="vai-tro-1">
          Nhân viên
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="vai-tro" id="vai-tro-2" value="0" <?php if ($khachHang['vai_tro'] == 0) echo "checked" ?>>
        <label class="form-check-label" for="vai-tro-2">
          Khách hàng
        </label>
      </div>
    </div>
    <div>
      <button class="btn btn-success" name="btn-update">Cập nhật</button>
      <button class="btn btn-secondary" type="reset">Nhập lại</button>
      <a class="btn btn-primary" href="index.php?list">Danh sách</a>
    </div>
  </form>
</div>