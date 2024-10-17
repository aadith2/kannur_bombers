<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="login-container">
        <!-- User Login Form -->
        <!-- <div class="form-box">
            <h2 class="login-title">User Login</h2>
            <p class="subtitle">Welcome back!</p>
            <form class="login-form" action="#" method="POST">
                <input type="email" class="input-field" placeholder="Email" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="login-btn">Login</button>
            </form>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
            </div>
        </div> -->

        <!-- Admin Login Form -->
        <div class="form-box admin-box">
            <h2 class="login-title">Admin Login</h2>
            <p class="subtitle">Admin Portal</p>
            <form class="login-form" action="#" method="POST">
                <input type="text" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="login-btn">Login as Admin</button>
            </form>
            <div class="signup-link">
                <p>Only for authorized personnel</p>
            </div>
        </div>
    </div>
</body>
</html>
