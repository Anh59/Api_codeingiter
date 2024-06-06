
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
</head>
<body>
    <h1>Register</h1>
    <div class="form-container sign-up-container">
      
    

        <form action="<?= site_url("register");?>" method="post">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" name="username" id="username" required />
            Uncomment the email input if needed
            <input type="email" placeholder="Email" name="email" id="email" required/>
            <input type="password" placeholder="Password" name="password" id="password" required />
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
