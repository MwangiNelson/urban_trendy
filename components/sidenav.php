<nav class="side-nav ud aic w-50 p-fixed bg-white" id="side-nav">
    <div class="close-btn w-100 lr px-4 jce" id="close-btn">
        <img src="images/cancel.png" alt="" class="img-sm">
    </div>
    <div class="links w-100 ud aic g-1">
        <a href="index.php" class="p-4 w-100">
            <h3>HOME</h3>
        </a>
        <?php if (isset($_SESSION['user_name'])) {
        ?>
            <a href="store.php" class="p-4 w-100">
                <h3>STORE</h3>
            </a>
            <a href="cart.php" class="p-4 w-100">
                <h3>CART</h3>
            </a>
        <?php } ?>


    </div>
    <span class="line-dark w-75"></span>
    <div class="links w-100 ud aic g-1 ">
        <a href="" class="p-4 w-100">
            <h3>LEGAL POLICIES</h3>
        </a>
        <a href="" class="p-4 w-100">
            <h3>COOKIES</h3>
        </a>
        <a href="" class="p-4 w-100">
            <h3>MILK</h3>
        </a>
    </div>
    <div class="ud aic w-100 h-fit py-4 ">
        <?php if (isset($_SESSION['user_name'])) {
        ?>
            <form action="logout.php" class="w-100 lr jcc aic py-4">
                <button class="btn btn-danger p-2 w-75">LOG OUT</button>
            </form>
        <?php } ?>
    </div>
</nav>