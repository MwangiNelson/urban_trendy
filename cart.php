<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
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
    <section class="cart w-100 ud aic jcc pb-s-7">
        <div class="head2 ud aic w-100 jcc p-0 m-0">
            <h2>CART</h2>
            <span class="span-orange shadow-white w-25"></span>
        </div>
        <div class="cart-head header w-75 lr jcs txt-uc px-4">
            <a href="index.php" class="top-link">
                <h3>HOME</h3>
            </a>
            <a href="store.php" class="top-link">
                <h3>/STORE</h3>
            </a>
            <h3>/CART </h3>
        </div>
        <div class="lr w-100 jsb p-4 py-1">
            <div class="w-75 table-container color-dark h-70 px-4">
                <table class="w-100 color-dark">
                    <thead class="cart-thead">
                        <tr class="aic tac jcc">
                            <th class="py-2">ITEM</th>
                            <th class="py-2">DESCRIPTION</th>
                            <th class="py-2">QUANTITY</th>
                            <th class="py-2">PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr class="py-4 aic tac jcc">
                            <td class="w-15-vw ">
                                <div class="ud g-1 jcc aic p-4">
                                    <img src="images/bag.png" alt="" class="img-cart">
                                    <h4>LOOKU MOTO</h4>
                                </div>
                            </td>
                            <td class="w-15-vw">
                                <h4>Made in Italy</h4>
                            </td>
                            <td>
                                <h4>2</h4>
                            </td>
                            <td>
                                <h4> $ 50.00</h4>
                            </td>
                            <td>
                                <div class="lr g-1 jcc aic">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-25 bg-blue-cart h-fit p-4 ud aic g-5">
                <div class="ud jcc aic w-100">
                    <h3> CHECKOUT</h3>
                    <span class="span-orange w-50"></span>
                </div>
                <div class="px-4 ud w-100 g-1">
                    <div class="lr w-100 jsb">
                        <h3>TOTAL PRICE:</h3>
                        <h3>$ 500 . 00</h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>DISCOUNT:</h3>
                        <h3>$ 20 . 00</h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>DELIVERY FEE:</h3>
                        <h3>$ 7 . 50</h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>TOTAL PAYABLE:</h3>
                        <h3>$ 512 . 50</h3>
                    </div>
                </div>
                <div class="ud w-100 jcc aic">
                    <span class="span-orange w-50 my-1"></span>
                    <h4>By proceeding with payments you agree with our</h4>
                    <h4 class="color-blue">TERMS & CONDITIONS</h4>
                </div>
                <!-- <div class="ud g-1 aic">
                    <button class="visa">
                        <img src="assets/visa.png" class="img-xsm" alt="">
                    </button>
                </div> -->

                <div class="ud aic w-100 jcc">
                    <div class="m-2 md:m-4 w-75" id="paypal-button-container">
                    </div>
                    <a href="store" class="w-75">
                        <button class="btn btn-outline-secondary w-100">
                            Continue shopping
                        </button>
                    </a>

                </div>
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