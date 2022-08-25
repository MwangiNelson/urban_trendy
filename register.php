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
    <section class="bg-blue-photo ud aic jcc w-100 py-4 r-box">
        <form class="ud w-50 bg-white h-fit jcc aic p-4 g-1 " method="POST" action="register-module.php">
            <div class="ud aic jcs w-100">
                <h3>CREATE AN ACCOUNT HERE</h3>
                <span class="line-dark w-50"></span>
            </div>
            <div class="ud jss w-100">
                <label for="username"> <b>Username :</b></label>
                <input id="username" name="user_name" type="text" class="form-control w-100">
            </div>
            <div class="lr jss w-100 g-1">
                <div class="w-50">
                    <label for="first_name"> <b>First name:</b></label>
                    <input id="first_name" type="text" class="form-control w-100" name="first_name">
                </div>
                <div class="w-50">
                    <label for="last_name"> <b>Last name:</b></label>
                    <input id="last_name" type="text" class="form-control w-100" name="last_name">
                </div>
            </div>
            <div class="ud jss w-100">
                <label for="email"> <b>Email :</b></label>
                <input id="email" type="text" class="form-control w-100" name="user_email">
            </div>
            <div class="ud jss w-100">
                <label for="password"> <b>Password :</b></label>
                <input id="password" type="password" class="form-control w-100" name="password_1">
            </div>
            <div class="ud jss w-100">
                <label for="confirm_password"> <b>Confirm Password :</b></label>
                <input id="confirm_password" type="password" class="form-control w-100" name="password_2">
            </div>
            <div class="ud jss w-100 py-3">
                <button id="signupBtn" type="submit" class="btn btn-primary w-100">SIGN UP</button>
            </div>
            <div class="lr jcc aic py-3 w-100">
                <h5 class="px-3">Already have an account? </h5>
                <a href="login.php"><button class="btn btn-outline-secondary " type="button">LOG IN</button></a>
            </div>

        </form>

    </section>
</body>

</html>