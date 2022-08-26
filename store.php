<?php
$session = session_start();
require_once("methods.php");

if (isset($_POST["add_cart_btn"])) {
    if (isset($_SESSION["cart"])) {
        $productID = $_POST["product_id"];
        $product_name = $_POST["product_name"];
        $product_price = intval($_POST["product_price"]);
        $product_quantity = intval($_POST["product_quantity"]);
        $product_image = $_POST['product_img'];
        $item_array_id = array_column($_SESSION["cart"], "product_id");

        if (!in_array($productID, $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $productID,
                'product_name' => $product_name,
                'product_price' => $product_price,
                'product_quantity' => $product_quantity,
                'product_img' => $product_image,
            );
            $_SESSION["cart"][$count] = $item_array;
            if (isset($_SESSION["totals"]["totalQuantity"])) {
                $_SESSION["totals"]["totalQuantity"] += $product_quantity;
                $_SESSION["totals"]["totalPrice"] += $product_quantity * $product_price;
            } else {
                $_SESSION["totals"]["totalQuantity"] = $product_quantity;
                $_SESSION["totals"]["totalPrice"] = $product_quantity * $product_price;
            }

            echo "<script> alert('Success Adding to cart'); </script>";
            // echo $_SESSION["cart"];
            // print_r($_SESSION["totals"]);
        } else {

            echo "<script> alert('Item already in cart'); </script>";
        }
    } else {
        //session_destroy();
        //setting cart variables
        $productID = $_POST["product_id"];
        $product_name = $_POST["product_name"];
        $product_price = intval($_POST["product_price"]);
        $product_quantity = intval($_POST["product_quantity"]);
        $product_image = $_POST['product_img'];

        $item_array = array(
            'product_id' => $productID,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_quantity' => $product_quantity,
            'product_img' => $product_image,
        );

        $_SESSION["cart"][0] = $item_array;

        if (isset($_SESSION["totals"]["totalQuantity"])) {
            $_SESSION["totals"]["totalQuantity"] += $product_quantity;
            $_SESSION["totals"]["totalPrice"] += ($product_quantity * $product_price);
        } else {
            $_SESSION["totals"]["totalQuantity"] = $product_quantity;
            $_SESSION["totals"]["totalPrice"] = ($product_quantity * $product_price);
        }

        echo "<script> alert('Success Adding to cart'); </script>";
        // echo $_SESSION["cart"];
        // print_r($_SESSION["cart"]);
    }
}
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
        <div class="display-grid w-100 p-3 g-2">
            <?php
            $sql_Select = "SELECT * FROM tbl_products;"; //Obtaining all products
            $data = getDat2($sql_Select);

            if ($data != 0) {
                for ($i = 0; $i < count($data); $i++) {
                    $product_id = $data[$i]["product_id"];
                    $product_name = $data[$i]["product_name"];
                    $product_price = $data[$i]["product_price"];
                    $product_image = $data[$i]["product_photo"];
            ?>

                    <div class="item-card ud aic jcc">
                        <img src="./assets/<?php echo $product_image; ?>" class="img-store py-3" alt="">
                        <h4><?php echo $product_name; ?></h4>
                        <h4>$ <?php echo $product_price; ?></h4>

                        <form class="w-100 aic jcc lr" action="store.php" method="POST">
                            <button type="submit" name="add_cart_btn" class="store-btn" id="<?php $product_id; ?>">
                                Add To Cart
                            </button>
                            <input class="cat_id" name="product_id" value="<?php echo $product_id; ?> ">
                            <input class="cat_id" value="1" name="product_quantity" style="width:2vw; font-size:2.5vh; align-items:center;">
                            <input class="cat_id" name="product_price" value="<?php echo $product_price; ?> ">
                            <input class="cat_id" name="product_name" value="<?php echo $product_name; ?> ">
                            <input class="cat_id" name="product_img" value="<?php echo $product_image; ?> ">
                        </form>
                    </div>

            <?php
                }
            } else {
                echo "No products found";
            }
            ?>
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