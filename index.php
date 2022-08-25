<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body>
    <?php include("components/navbar.php"); ?>
    <?php include("components/sidenav.php"); ?>
    <section class="main w-100 lr aic">
        <div class="white w-50 ud aic pb-s-10 g-2">
            <div class="ud w-75 g-2 pb-e-5">
                <h1 class="font-xlarge">WE EVOLVE AND RECREATE
                    YOUR WARDROBE
                </h1>
                <h4 class="c-grey w-50">
                    Looking for something casual? Official?
                    Date night? Camping? Elegant? We have it all
                </h4>
            </div>
            <a href="store.php" class="w-75"><button class="hero-btn lr aic jcc g-2 p-2 w-100 font-large">VISIT STORE <i class="fa-solid fa-arrow-right"></i></button></a>
            <span class="line-dark w-75"></span>
            <div class="lr">
                <img src="images/scroll-bar.png" alt="" class="img-sm">
            </div>
            <div class="qos ud w-75 aic">
                <h4 class="c-blue p-2 f-helvetica">ADVANTAGES</h4>
                <h2>WHY URBAN TRENDY?</h2>
                <span class="line-dark w-25"></span>
                <div class="grid w-100 pb-5 g-2">
                    <div class="square jsc ud w-75 aic p-2">
                        <h4 class="f-abo m-0">AUTHENTIC</h4>
                        <span class="span-orange w-25"></span>
                        <img src="images/authentic.png" alt="" class="img-md py-4">
                        <h4 class="p-4">Our fabrics and materials are all 100% authentic as per description</h4>
                    </div>
                    <div class="square jsc ud w-75 aic p-2">
                        <h4 class="f-abo m-0">DURABLE</h4>
                        <span class="span-orange w-25"></span>
                        <img src="images/reliability.png" alt="" class="img-md py-4">
                        <h4 class="p-4"> All the materials used are made to last long while maintaining their authentic quality.</h4>
                    </div>
                    <div class="square jsc ud w-75 aic p-2">
                        <h4 class="f-abo m-0">SATISFACTION</h4>
                        <span class="span-orange w-25"></span>
                        <img src="images/smile.png" alt="" class="img-md py-4">
                        <h4 class="p-4">Customer reviews, blogs, streamers ...name them. They cant help but reccomend us.</h4>
                    </div>
                    <div class="square jsc ud w-75 aic p-2">
                        <h4 class="f-abo m-0">RATINGS</h4>
                        <span class="span-orange w-25"></span>
                        <img src="images/rate.png" alt="" class="img-md py-4">
                        <h4 class="p-4">All our products have been averaged at 4.5 of 5 star ratings. Numbers speak for themselves.</h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="blue w-50 p-fixed left-50">
            <div class="pb-s-10 ud aic w-100">
                <div id="carouselExampleIndicators" class="carousel slide w-75 ud aic jcc" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner w-100">
                        <div class="carousel-item active w-100 jcc aic">
                            <div class="img-container w-100 lr jcc aic">
                                <div class="text-hero">
                                    <h5>Honestly idk what to write here</h5>
                                </div>
                                <div class="desc-text-hero">
                                    <h5>Hapa uandike all the stuff you want. Mimi personally sina maono</h5>
                                    <button class="btn btn-outline-dark">VISIT STORE</button>
                                </div>
                                <img class="img-display w-75" src="images/fashion.jpg" alt="First slide">
                            </div>
                        </div>
                        <div class="carousel-item  w-100 jcc aic">
                            <div class="img-container w-100 lr jcc aic">
                                <div class="text-hero">
                                    <h5>Honestly idk what to write here</h5>
                                </div>
                                <div class="desc-text-hero">
                                    <h5>Hapa uandike all the stuff you want. Mimi personally sina maono</h5>
                                    <button class="btn btn-outline-dark">VISIT STORE</button>
                                </div>
                                <img class="img-display w-75" src="images/fashion.jpg" alt="First slide">
                            </div>
                        </div>
                        <div class="carousel-item  w-100 jcc aic">
                            <div class="img-container w-100 lr jcc aic">
                                <div class="text-hero">
                                    <h5>Honestly idk what to write here</h5>
                                </div>
                                <div class="desc-text-hero">
                                    <h5>Hapa uandike all the stuff you want. Mimi personally sina maono</h5>
                                    <button class="btn btn-outline-dark">VISIT STORE</button>
                                </div>
                                <img class="img-display w-75" src="images/fashion.jpg" alt="First slide">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>\
                <div class="btn-holder w-75">
                    <a href="ADMIN/admin.php"><button class="btn btn-light">ADMINISTRATOR</button></a>
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