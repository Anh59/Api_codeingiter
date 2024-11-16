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
        <input type="text" class="form-control mb-1" value="nmaxwell">
        <i class="fa fa-pencil edit-icon"></i>
    </div>
    <div class="form-group">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" value="Nelle Maxwell">
        <i class="fa fa-pencil edit-icon"></i>
    </div>
     <div class="form-group">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" placeholder="Enter your phone number">
        <i class="fa fa-pencil edit-icon"></i>
    </div>
    <div class="form-group">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" placeholder="Enter your address">
        <i class="fa fa-pencil edit-icon"></i>
    </div>
    <div class="form-group">
        <label class="form-label">E-mail</label>
        <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
        <div class="alert alert-warning mt-3">
            Your email is not confirmed. Please check your inbox.<br>
            <a href="javascript:void(0)">Resend confirmation</a>
        </div>
        <i class="fa fa-pencil edit-icon"></i>
    </div>
   
    <button type="button" class="btn btn-primary">Lưu</button>
</div>
<?= $this->endSection(); ?>
