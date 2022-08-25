<?php
$session = session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php") ?>
</head>

<body>
    <nav class="custom-nav jsb aic lr w-100 bg-grey">
        <div class="menu ud jsb px-4" id="menu-btn">
            <span class="black-span"></span>
            <span class="black-span w-50"></span>
            <span class="black-span w-75"></span>
        </div>
        <a href="index.php" class="p-0 m-0"><img src="images/UrbanTrendy.png" class="nav-logo" alt=""></a>
        <div class="user-sect lr px-3 w-25 jce">
            <?php
            if (!isset($_SESSION['user_name'])) {
                echo "<a href='login.php'><button class='btn btn-primary btn-custom'><i class='fa-solid fa-arrow-right-to-bracket px-1'></i>SIGN IN</button></a>";
            } else {
                echo "<a class='w-50'><button class='btn btn-light txt-uc w-100' onclick='open_log()' id='show_mod'><h3> HI ," . $_SESSION['user_name'] . "👋🏽 </h3> </button></a>";
            }
            ?>
        </div>
        <div class="logout-nav" id="pane">
            <button class="btn btn-primary w-50 mx-1" id="close_mod" onclick="close_log()">Cancel</button>
            <a href="logout.php" class="w-50"><button class="btn btn-danger w-100 mx-1">Log Out</button></a>
        </div>
    </nav>
    <?php include("components/sidenav.php"); ?>
    <section class="bg-blue h-fit w-100 ud aic pb-s-7 c-white">
        <div class="head2 ud aic w-100 jcc p-0 m-0">
            <h2>STORE</h2>
            <span class="span-orange shadow-white w-25"></span>
        </div>
        <div class="header w-75 lr jcs txt-uc px-4">
            <a href="index.php" class="top-link">
                <h3>HOME</h3>
            </a>
            <h3>/STORE</h3>
        </div>
        <div class="display-grid w-100 p-3">
            <div class="item-card ud aic jcc">
                <img src="images/bag.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <a href="cart.php" class="w-100"><button class="store-btn">ADD TO CART</button></a>
            </div>
            <div class="item-card ud aic jcc">
                <img src="images/bag2.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <button class="store-btn">ADD TO CART</button>
            </div>
            <div class="item-card ud aic jcc">
                <img src="images/bag.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <button class="store-btn">ADD TO CART</button>
            </div>
            <div class="item-card ud aic jcc">
                <img src="images/bag.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <button class="store-btn">ADD TO CART</button>
            </div>
            <div class="item-card ud aic jcc">
                <img src="images/bag.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <button class="store-btn">ADD TO CART</button>
            </div>
            <div class="item-card ud aic jcc">
                <img src="images/bag.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <button class="store-btn">ADD TO CART</button>
            </div>
            <div class="item-card ud aic jcc">
                <img src="images/bag.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <button class="store-btn">ADD TO CART</button>
            </div>
            <div class="item-card ud aic jcc">
                <img src="images/bag.png" class="img-store py-3" alt="">
                <h4>LEATHER BLACK LEATHER BAG MADE OF LEATHER</h4>
                <h4>$ 500.00</h4>
                <button class="store-btn">ADD TO CART</button>
            </div>
        </div>

    </section>
</body>
<script>
    const sideNav = document.getElementById("side-nav");
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");

    menuBtn.addEventListener("click", function() {
        sideNav.style.left = "0";
    });
    closeBtn.addEventListener("click", function() {
        sideNav.style.left = "-50%";
    });
    var open_mod = document.getElementById("pane");

function close_log() {
    open_mod.style.display = "none";
}

function open_log() {
    open_mod.style.display = "inline-flex";
}
</script>

</html>