<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
<body>
    <h2>OTP Verification</h2>
    <p>Please enter the OTP sent to your email.</p>

    <!-- Form xác nhận OTP -->
    <form id="otpForm">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="text" name="otp" placeholder="Enter OTP" required>
        <button type="submit">Verify OTP</button>
    </form>

    <!-- Thư viện jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Xử lý sự kiện submit form OTP
            $('#otpForm').on('submit', function(e) {
                e.preventDefault();

                // Gửi AJAX POST request để xác nhận OTP
                $.ajax({
                    url: '<?= base_url('api_Customers/customers_verify_otp') ?>',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status === 'success') {
                            alert('OTP verified successfully. Redirecting to login...');
                            window.location.href = '<?= base_url('login') ?>';  // Chuyển hướng sau khi xác nhận thành công
                        } else {
                            alert(response.message || 'OTP verification failed');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                        alert('Error processing request: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
