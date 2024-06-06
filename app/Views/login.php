
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <div class="form-container sign-up-container">
      
    <?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

        <form action="<?= site_url("login");?>" method="post">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
          
            Uncomment the email input if needed
            <input type="email" placeholder="Email" name="email" id="email" required/>
            <input type="password" placeholder="Password" name="password" id="password" required />
            <button type="submit">Login</button>
        </form>

        <a href="/request-reset">reset password </a>
    </div>
</body>
</html>
