<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login3.css">
    <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="img/images.png" type="image/x-png">
</head>
<body>
<div class="container">
    <div class="curved-shape"></div>
    <div class="form-box login">
        <h1>Login</h1>
        <form id="loginForm" action="register.php" method="post">
            <div class="input-box">
                <input type="text" name="email" required>
                <label for="">Email Id</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password"  required>
                <label for="">Password</label>
                <i class='bx bxs-lock-open'></i>
            </div>
            <div class="input-box">
                <button class="btn" type="submit" value="Sign In" name="signIn">Login</button>
            </div>
            <div class="regi-link">
                <p>Don't have an account? <a href="javascript:void(0);" class="SignupLink">Sign Up</a></p>
            </div>
        </form>    
    </div>
    <div class="form-box register">
        <h1>Register</h1>
        <form  action="register.php" method="post">
            <div class="input-box">
                <input type="text" name="username" id="username"  required>
                <label for="">Username</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name="email" id="email" required>
                <label for="">Email ID</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password"  required>
                <label for="">Password</label>
                <i class='bx bxs-lock-open'></i>
            </div>
            <div class="input-box">
                <button class="btn" type="submit" value="Sign Up" name="signUp">Register</button>
            </div>
            <div class="regi-link">
                <p>Already have an account? <a href="javascript:void(0);" class="SigninLink">Login</a></p>
            </div>
        </form>  
    </div>
    <div class="info-content login">
        <h2>WELCOME BACK</h2>
        <p>Hope you enjoy the show</p>
    </div>
    <div class="info-content register">
        <h2>Register</h2>
        <p>Hope you enjoy the show</p>
    </div>
</div>
<script src="login3.js"></script>
</body>
</html>
