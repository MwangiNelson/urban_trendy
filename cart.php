<?php
$session = session_start();

if (isset($_POST["deleteItem"])) {
    if (isset($_SESSION["cart"])) {
        $removableElement = $_POST['currentItem'];
        $itemTotal = $_POST['currentItemTotal'];
        $itemQuantity = $_POST['currentItemQuantity'];
        $varTotalPrice =  $_SESSION["totals"]["totalPrice"];

        array_splice($_SESSION['cart'], $removableElement, 1);


        if ($varTotalPrice < 0) {
            unset($_SESSION['cart']);
        } else {
            $_SESSION["totals"]["totalQuantity"] -= $itemQuantity;
        }

        if ($itemQuantity <= 0) {
            unset($_SESSION['cart']);
        } else {
            $varTotalPrice -= $itemTotal;
            $_SESSION["totals"]["totalPrice"] = $varTotalPrice;
        }
    }
}
?>

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
            <div class="w-75 table-container color-dark px-4">
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
                        <?php if (isset($_SESSION['cart'])) : ?>
                            <?php $currentItem = 0; ?>
                            <?php if (!empty($_SESSION['cart'])) : ?>
                                <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
                                    <tr class="py-4 aic tac jcc">
                                        <td class="w-15-vw ">
                                            <div class="ud g-1 jcc aic p-4">
                                                <img src="./assets/<?php echo $cartItem['product_img']; ?>" alt="" class="img-cart">
                                                <h4><?php echo $cartItem['product_name']; ?></h4>
                                            </div>
                                        </td>
                                        <td class="w-15-vw">
                                            <h4>Made in Italy</h4>
                                        </td>
                                        <td class="product-amt">
                                            <button class="btn btn-outline-dark ">+</button>
                                            <span id="value" class="px-4"><?php echo $cartItem['product_quantity']; ?></span>
                                            <button class="btn btn-outline-dark ">-</button>
                                        </td>
                                        <td id="price">
                                            $ <?php echo $cartItem['product_price']; ?> .00
                                        </td>

                                        <td>
                                            <form action="cart.php" method="post">

                                                <button class="btn btn-danger" type="submit" name="deleteItem">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                                <input type="hidden" class="cat_id" name="currentItem" value="<?php echo $currentItem; ?>">
                                                <input type="hidden" class="cat_id" name="currentItemQuantity" value="<?php echo $cartItem['product_quantity']; ?>">
                                                <input type="hidden" class="cat_id" name="currentItemTotal" value="<?php echo ($cartItem['product_price'] * $cartItem['product_quantity']); ?>">

                                            </form>
                                        </td>
                                    </tr>

                                    <?php $currentItem++; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr class="w-100 p-4">
                                    <td class="w-100 p-3 empty">
                                        <?php echo "No products in cart"; ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php else : ?>
                            <tr class="w-100 p-4 jcs">
                                <th></th>
                                <th></th>
                                <th class="p-3 jcs">
                                    <h2 class="txt-uc">
                                        <?php echo "No products in cart"; ?>
                                    </h2>
                                </th>

                            </tr>
                        <?php endif; ?>
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
                        <h3>TOTAL ITEMS:</h3>
                        <h3><?php
                            if (!isset($_SESSION['totals'])) {
                                echo '0';
                            } else {
                                echo $_SESSION["totals"]["totalQuantity"] . ' items';
                            }
                            ?></h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>DISCOUNT:</h3>
                        <h3><?php if (!isset($_SESSION['totals'])) {
                                echo '0';
                            } else {
                                echo "$ 0.00";
                            } ?></h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>DELIVERY FEE:</h3>
                        <h3><?php if (!isset($_SESSION['totals'])) {
                                echo '0';
                            } else {
                                echo '$ 0.00';
                            } ?></h3>
                    </div>
                    <div class="lr w-100 jsb">
                        <h3>TOTAL PAYABLE:</h3>

                        <h3><?php if (!isset($_SESSION['totals'])) {
                                echo '0';
                            } else {
                                echo '$ ' . intval($_SESSION["totals"]["totalPrice"]) . '.00';
                            } ?></h3>
                    </div>
                </div>
                <div class="ud w-100 jcc aic">
                    <span class="span-orange w-50 my-1"></span>
                    <h4>By proceeding with payments you agree with our</h4>
                    <h4 class="color-blue">TERMS & CONDITIONS</h4>
                </div>


                <div class="ud aic w-100 aic jsb">
                    <button class="btn btn-success p-3 w-100">PLACE ORDER</button>
                    <!-- <form action="logout.php"><button class="btn btn-danger">Kill Session</button></form> -->
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
    var open_mod = document.getElementById("pane");

    function close_log() {
        open_mod.style.display = "none";
    }

    function open_log() {
        open_mod.style.display = "inline-flex";
    }
</script>

</html>