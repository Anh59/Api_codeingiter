<?= $this->extend('Customer/test'); ?>




<?= $this->section('content'); ?>

<h1>Thay đổi mật khẩu </h1>
<div >
                <div class="form-group">
                    <label class="form-label">Mật khẩu cũ</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu cũ">
                </div>
                <div class="form-group">
                    <label class="form-label">Mật khẩu mới</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu mới">
                </div>
                <div class="form-group">
                    <label class="form-label">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới">
                </div>
                <button type="button" class="btn btn-primary">Xác nhận</button>
    </div>

<?= $this->endSection(); ?>