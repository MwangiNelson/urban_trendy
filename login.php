<?php
$session = session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body>
    <nav class="login-nav w-100 p-fixed bg-grey lr jcs aic h-10">
        <a href="index.php" class="py-4">
            <img src="images/back.png" alt="" class="back-icon">
        </a>
        <img src="images/UrbanTrendy.png" alt="" class="nav-logo">
    </nav>
    <section class="w-100 h-100vh ud jcc aic bg-blue-photo">
        <div class="bg-white p-4 s-in w-50 br-5 h-fit">
            <div class="header ud jcs w-100">
                <div class="lr jcs w-100">
                    <h3>SIGN IN</h3>
                </div>
                <span class="line-dark w-50"></span>
            </div>
            <form class="ud w-100 py-4" method="POST" action="login-module.php">
                <div class="ud w-100">
                    <label for="user-email">E mail:</label>
                    <input type="email" name="user-email" id="user-email" class="form-control" placeholder="Enter your email here">
                </div>
                <div class="ud w-100 py-4">
                    <label for="user-password">Password:</label>
                    <input type="password" name="user-password" id="user-password" class="form-control" placeholder="Enter your password here">
                </div>
                <button id="login-btn" type="submit" class="btn btn-primary w-100">LOG IN</button>
                <div class="lr jcc aic py-3">
                    <h5 class="px-3">Don't have an account? </h5>
                    <a href="register.php"><button class="btn btn-outline-secondary " type="button">SIGN UP</button></a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>