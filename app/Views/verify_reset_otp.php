<form action="<?= site_url('/verify-reset-otp') ?>" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="otp">OTP:</label>
    <input type="text" id="otp" name="otp"><br><br>
    <input type="submit" value="Verify OTP">
</form>
