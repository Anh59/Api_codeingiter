<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Của Tôi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('css/test.css') ?>">
    
</head>
<body>
    <div class="container">
    <div class="sidebar">
            <div class="profile">
                <img src="https://storage.googleapis.com/a1aa/image/0LvSCmFLGhqdHFq3eIirMlkcMeKVn4yY4RUYTJfbL7411BdnA.jpg" alt="User profile picture" width="40" height="40">
                <div class="username">longthanh261</div>
               
            </div>
            <ul class="menu">
                <li>
                    <a href="#" onclick="toggleSubmenu(event, 'personal-info')">
                        <span><i class="fas fa-user"></i> Thông tin cá nhân</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="submenu" id="personal-info">
                        <li><a href="<?= base_url('personal') ?>">Hồ Sơ Của Tôi</a></li>
                        <li><a href="<?= base_url('profile/company') ?>">Company</a></li>
                        <li><a href="<?= base_url('password') ?>">Thay đổi mật khẩu</a></li>
                        <li><a href="<?= base_url('profile/changePersonalInfo') ?>">Thay đổi thông tin cá nhân</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="toggleSubmenu(event, 'orders')">
                        <span><i class="fas fa-shopping-cart"></i> Đơn hàng của bạn</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="submenu" id="orders">
                        <li><a href="<?= base_url('order') ?>">Đơn Hàng Của Bạn</a></li>
                        <li><a href="<?= base_url('profile/orderPayment') ?>">Đơn hàng thanh toán</a></li>
                        <li><a href="<?= base_url('profile/review') ?>">Đánh giá</a></li>
                        <li><a href="<?= base_url('profile/consultation') ?>">Tư vấn</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="toggleSubmenu(event, 'orders')">
                        <span><i class="fas fa-shopping-cart"></i> Tư vấn</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="submenu" id="orders">
                        
                        <li><a href="<?= base_url('profile/consultation') ?>">Tư vấn</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <!-- Content section: Dynamic content based on selected menu -->
        <div class="content">
            <?= $this->renderSection('content') ?> <!-- This will render the content dynamically based on the selected tab -->
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

        function showTab(tabId) {
            var tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
            });
            document.getElementById(tabId).classList.add('active');
        }
    </script>
</body>
</html>