<?= $this->extend('Customer/test'); ?>


<?= $this->section('content'); ?>
<div >
                <h1>Đơn Hàng Của Bạn</h1>
                <p>Quản lý đơn hàng của bạn</p>
                <div class="order-card">
                    <img src="https://storage.googleapis.com/a1aa/image/1pXaIlwXJrbWMBElhEHDNQVXzm6LY7ePTB37T0SzRMGBku4JA.jpg" alt="Hình ảnh địa điểm du lịch" width="150" height="100">
                    <div class="order-info">
                        <h3>Tour du lịch Đà Nẵng</h3>
                        <p>Thông tin chi tiết về tour du lịch Đà Nẵng.</p>
                        <p class="price">Tiền gốc: <span class="discount">5,000,000 VND</span></p>
                        <p class="total-price">Tiền khuyến mại: 4,500,000 VND</p>
                        <p class="total-price">Tổng giá tiền: 4,500,000 VND</p>
                        <p class="status paid">Trạng thái: Đã thanh toán</p>
                    </div>
                    <div class="order-actions">
                        <button class="btn btn-outline-primary">Đặt lại</button>
                        <button class="btn btn-default">Liên hệ</button>
                        <button class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
                <div class="order-card">
                    <img src="https://storage.googleapis.com/a1aa/image/1pXaIlwXJrbWMBElhEHDNQVXzm6LY7ePTB37T0SzRMGBku4JA.jpg" alt="Hình ảnh địa điểm du lịch" width="150" height="100">
                    <div class="order-info">
                        <h3>Tour du lịch Nha Trang</h3>
                        <p>Thông tin chi tiết về tour du lịch Nha Trang.</p>
                        <p class="price">Tiền gốc: <span class="discount">6,000,000 VND</span></p>
                        <p class="total-price">Tiền khuyến mại: 5,500,000 VND</p>
                        <p class="total-price">Tổng giá tiền: 5,500,000 VND</p>
                        <p class="status unpaid">Trạng thái: Chưa thanh toán</p>
                    </div>
                    <div class="order-actions">
                        <button class="btn btn-outline-primary">Đặt lại</button>
                        <button class="btn btn-default">Liên hệ</button>
                        <button class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
                <div class="order-card">
                    <img src="https://storage.googleapis.com/a1aa/image/1pXaIlwXJrbWMBElhEHDNQVXzm6LY7ePTB37T0SzRMGBku4JA.jpg" alt="Hình ảnh địa điểm du lịch" width="150" height="100">
                    <div class="order-info">
                        <h3>Tour du lịch Phú Quốc</h3>
                        <p>Thông tin chi tiết về tour du lịch Phú Quốc.</p>
                        <p class="price">Tiền gốc: <span class="discount">7,000,000 VND</span></p>
                        <p class="total-price">Tiền khuyến mại: 6,500,000 VND</p>
                        <p class="total-price">Tổng giá tiền: 6,500,000 VND</p>
                        <p class="status pending">Trạng thái: Đang chờ tư vấn</p>
                    </div>
                    <div class="order-actions">
                        <button class="btn btn-outline-primary">Đặt lại</button>
                        <button class="btn btn-default">Liên hệ</button>
                        <button class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
<?= $this->endSection(); ?>