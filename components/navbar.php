<nav class="custom-nav jsb aic lr w-100">
    <div class="menu ud jsb px-4" id="menu-btn">
        <span class="black-span"></span>
        <span class="black-span w-50"></span>
        <span class="black-span w-75"></span>
    </div>
    <img src="images/UrbanTrendy.png" class="nav-logo" alt="">
    <div class="user-sect lr px-3 w-25 aic jce g-1">
        <?php
        if (!isset($_SESSION['user_name'])) {
        ?>
            <a href='login.php'><button class='btn btn-primary btn-custom'><i class='fa-solid fa-arrow-right-to-bracket px-1'></i>SIGN IN</button></a>
        <?php
        } else { ?>
            <a href="cart.php">
                <button class="btn-cart p-3 ud jcc aic">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </a>
            <a class='w-50'><button class='btn btn-light txt-uc w-100' onclick='open_log()' id='show_mod'>
                    <h3> HI ,<?php echo $_SESSION['user_name']; ?>"👋🏽 </h3>
                </button></a>

        <?php }
        ?>
    </div>
    <div class="logout-nav" id="pane">
        <button class="btn btn-primary w-50 mx-1" id="close_mod" onclick="close_log()">Cancel</button>
        <a href="logout.php" class="w-50"><button class="btn btn-danger w-100 mx-1">Log Out</button></a>
    </div>

</nav>