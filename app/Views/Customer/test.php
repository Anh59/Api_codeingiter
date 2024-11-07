<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Của Tôi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-right: 1px solid #ddd;
            border-radius: 10px;
        }
        .sidebar .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .sidebar .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .sidebar .profile .username {
            font-weight: bold;
        }
        .sidebar .menu {
            list-style: none;
            padding: 0;
        }
        .sidebar .menu li {
            margin-bottom: 10px;
        }
        .sidebar .menu li a {
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-radius: 10px;
            transition: background-color 0.3s;
        }
        .sidebar .menu li a:hover {
            background-color: #f0f0f0;
        }
        .sidebar .menu li a i {
            margin-right: 10px;
        }
        .sidebar .menu li a.active {
            color: #ff5722;
        }
        .sidebar .submenu {
            list-style: none;
            padding-left: 20px;
            margin: 0;
            display: none;
        }
        .sidebar .submenu li {
            margin-bottom: 5px;
        }
        .sidebar .submenu li a {
            text-decoration: none;
            color: #666;
        }
        .content {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            margin-left: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .card-body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .btn-outline-primary {
            background-color: #fff;
            color: #007bff;
            border: 1px solid #007bff;
        }
        .btn-default {
            background-color: #f8f9fa;
            color: #333;
        }
        .alert {
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }
        .media-body {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .account-settings-fileinput {
            display: none;
        }
        .custom-file-label {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 10px;
            cursor: pointer;
            color: #007bff;
            background-color: #fff;
            margin-right: 10px;
        }
        .custom-file-label:hover {
            background-color: #007bff;
            color: #fff;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 10px;
            }
            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #ddd;
                margin-bottom: 20px;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="https://storage.googleapis.com/a1aa/image/0LvSCmFLGhqdHFq3eIirMlkcMeKVn4yY4RUYTJfbL7411BdnA.jpg" alt="User profile picture" width="40" height="40">
                <div class="username">longthanh261</div>
                <a href="#" class="edit-profile"><i class="fas fa-edit"></i> Sửa Hồ Sơ</a>
            </div>
            <ul class="menu">
                <li>
                    <a href="#" onclick="toggleSubmenu(event, 'personal-info')">
                        <span><i class="fas fa-user"></i> Thông tin cá nhân</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="submenu" id="personal-info">
                        <li><a href="thay-doi-mat-khau.html">Thay đổi mật khẩu</a></li>
                        <li><a href="thay-doi-thong-tin.html">Thay đổi thông tin cá nhân</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="toggleSubmenu(event, 'orders')">
                        <span><i class="fas fa-shopping-cart"></i> Đơn hàng của bạn</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="submenu" id="orders">
                        <li><a href="don-hang-thanh-toan.html">Đơn hàng thanh toán</a></li>
                        <li><a href="danh-gia.html">Đánh giá</a></li>
                        <li><a href="tu-van.html">Tư vấn</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <h1>Hồ Sơ Của Tôi</h1>
            <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
            <div class="tab-pane fade active show" id="account-general">
                <div class="card-body media align-items-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80" style="width: 60px; height: 60px;">
                    <div class="media-body ml-4">
                        <label class="custom-file-label">
                            Upload new photo
                            <input type="file" class="account-settings-fileinput">
                        </label>
                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                        <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                    </div>
                </div>
                <hr class="border-light m-0">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control mb-1" value="nmaxwell">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="Nelle Maxwell">
                    </div>
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                        <div class="alert alert-warning mt-3">
                            Your email is not confirmed. Please check your inbox.<br>
                            <a href="javascript:void(0)">Resend confirmation</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company</label>
                        <input type="text" class="form-control" value="Company Ltd.">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleSubmenu(event, submenuId) {
            event.preventDefault();
            var submenu = document.getElementById(submenuId);
            if (submenu.style.display === "none" || submenu.style.display === "") {
                submenu.style.display = "block";
            } else {
                submenu.style.display = "none";
            }
        }
    </script>
</body>
</html>