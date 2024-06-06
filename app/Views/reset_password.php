    <form action="<?= site_url('/reset-password') ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= session('email') ?>" readonly><br><br>
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Reset Password">
    </form>
