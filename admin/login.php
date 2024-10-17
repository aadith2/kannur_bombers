<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/loginstyle.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="login-container">
        <!-- Admin Login Form -->
        <div class="form-box admin-box">
            <h2 class="login-title">Admin Login</h2>
            <p class="subtitle">Admin Portal</p>
            <!-- <form class="login-form" onsubmit="login()" method="POST">
                <input type="text" id="username" class="input-field" placeholder="Username" required>
                <input type="password" id="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="login-btn" onclick="login()" >Login as Admin</button>
            </form> -->

            <form class="login-form" onsubmit="login()" method="POST">
              <input type="text" id="username" class="input-field" placeholder="Username" required>
              <input type="password" id="password" class="input-field" placeholder="Password" required>
            
            <div class="form-group">
              <button type="submit" class="login-btn">Login as Admin</button>
            </div>
          </form>
            <div class="signup-link">
                <p>Only for authorized personnel</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
