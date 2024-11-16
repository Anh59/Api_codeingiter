<?= $this->extend('Customer/test'); ?>

<?= $this->section('content'); ?>

<h1>Hồ Sơ Của Tôi</h1>
<p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>

<div class="card-body media align-items-center profile-pic">
    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80">
    <div class="media-body ml-4">
        <label class="custom-file-label">
            Upload new photo
            <input type="file" class="account-settings-fileinput">
        </label>
        <button type="button" class="btn btn-default md-btn-flat">Reset</button>
    </div>
</div>
<div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
<hr class="border-light m-0">
<div class="card-body">
    <div class="form-group">
        <label class="form-label">Username</label>
        <div class="input-group">
            <input type="text" class="form-control mb-1" value="nmaxwell">
            <span class="edit-icon"><i class="fa fa-edit"></i></span>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">Name</label>
        <div class="input-group">
            <input type="text" class="form-control" value="Nelle Maxwell">
            <span class="edit-icon"><i class="fa fa-edit"></i></span>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">E-mail</label>
        <div class="input-group">
            <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
            <span class="edit-icon"><i class="fa fa-edit"></i></span>
        </div>
        <div class="alert alert-warning mt-3">
            Your email is not confirmed. Please check your inbox.<br>
            <a href="javascript:void(0)">Resend confirmation</a>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">Phone Number</label>
        <div class="input-group">
            <input type="text" class="form-control mb-1" value="123-456-7890">
            <span class="edit-icon"><i class="fa fa-edit"></i></span>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">Address</label>
        <div class="input-group">
            <input type="text" class="form-control mb-1" value="123 Main St, Springfield, USA">
            <span class="edit-icon"><i class="fa fa-edit"></i></span>
        </div>
    </div>
</div>

<!-- Save Button -->
<div class="save-btn">
    <button type="button" class="btn btn-primary">Save Changes</button>
</div>

<?= $this->endSection(); ?>
