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
        <div class="user-sect px-3">
            <button class="btn btn-primary btn-custom">
                SIGN IN
            </button>
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
</script>

</html>