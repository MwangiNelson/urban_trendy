<div class=" w-75 h-custom-fit bg-yellow panel g-1" id="products-panel">
    <div class="ud panel-head aic py-4 txt-uc w-100 ">
        <h2>PRODUCTS</h2>
        <span class="span-orange w-25"></span>
    </div>
    <div class="users-tbl h-75 ud aic w-100">
        <table class="w-100">
            <thead class="cart-thead">
                <tr>
                    <th>#</th>
                    <th>PRODUCT PHOTO</th>
                    <th>PRODUCT NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>OPTIONS</th>
                </tr>
            </thead>
            <tbody class="tbody">


                <?php
                $sql_Select_prods = "SELECT * FROM tbl_products;"; //Obtaining all products
                $data_products = getDat2($sql_Select_prods);

                if ($data_products != 0) {
                    for ($i = 0; $i < count($data_products); $i++) {
                        $product_price = $data_products[$i]["product_price"];
                        $product_name = $data_products[$i]["product_name"];
                        $product_quantity = $data_products[$i]["product_quantity"];
                        $product_id = $data_products[$i]["product_id"];
                        $product_image = $data_products[$i]["product_photo"];
                ?>

                        <tr class="user-row">
                            <td><?php echo $product_id; ?></td>
                            <td><img class="img-cart" src="../assets/<?php echo $product_image; ?>" alt=""></td>
                            <td><?php echo $product_name; ?></td>
                            <td> $ <?php echo $product_price; ?> . 00</td>
                            <td><?php echo $product_quantity; ?> pcs</td>
                            <td>
                                <form action="delete.php" method="post">
                                    <input class="cat_id" value="<?php echo $product_id; ?>" name="product_id">
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>

                <?php
                    }
                } else {
                    echo "<tr>No Products found</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="add-user w-50 p-4">
        <button class="btn btn-secondary w-50" onclick="showModule()">Add Item</button>
    </div>
    <div class="add-products w-100 aic jcc" id="add-products-module">
        <div class="bg-white p-4 s-in w-50 br-5 h-fit p-absolute">
            <div class="header ud w-100">
                <div class="lr jsb w-100">
                    <h3>ADD PRODUCTS</h3>
                    <button class="btn btn-danger px-3" onclick="closeModule()"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <span class="line-dark w-50"></span>
            </div>
            <form class="ud w-100 py-2" action="models.php" method="POST" enctype="multipart/form-data">
                <div class="lr">
                    <div class="ud w-50">
                        <div class="ud w-100">
                            <label for="item-name">Item name:</label>
                            <input type="text" name="product-name" id="item-name" class="form-control" placeholder="Enter the item name here">
                        </div>
                        <div class="ud w-100 py-2">
                            <label for="item-quantity">Quantity in stock:</label>
                            <input type="number" name="product-quantity" id="item-quantity" class="form-control" placeholder="Enter item quantity in stock here">
                        </div>
                        <div class="ud w-100 py-2">
                            <label for="item-price">Item Price:</label>
                            <input type="number" name="product-price" id="item-price" class="form-control" placeholder="Enter item price here">
                        </div>
                    </div>
                    <div class="item-photo w-50 ud aic py-2 ">
                        <img src="./IMAGES/add-image.png" alt="" class="img-lg bd-dark my-2 image_preview">
                        <input type="file" name="product-image" class="form-control w-50" id="item_img">
                        <!-- accept="Image/*" -->
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Add Product</button>
            </form>
        </div>
    </div>
</div>