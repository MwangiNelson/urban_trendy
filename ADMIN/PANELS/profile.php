    <div class=" w-75 h-custom-fit bg-yellow panel g-1" id="profile-panel">
        <div class="ud panel-head aic py-4 txt-uc w-100 ">
            <h2>ORDERS</h2>
            <span class="span-orange w-25"></span>
            <div class="users-tbl h-custom-admin my-4 ud aic w-100 txt-uc">
                <table class="w-100">
                    <thead class="cart-thead">
                        <tr>
                            <th>ORDER ID</th>
                            <th>CLIENT ID</th>
                            <th>PRODUCT NAME</th>
                            <th>PRODUCT QUANTITY</th>
                            <th>PRODUCT PRICE</th>
                            <th>ORDER STATUS</th>
                            <th>OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php
                        $sql_Select = "SELECT * FROM tbl_orders;"; //Obtaining all users
                        $data = getDat2($sql_Select);

                        if ($data != 0) {
                            for ($i = 0; $i < count($data); $i++) {
                                $order_id = $data[$i]["order_id"];
                                $order_item = $data[$i]["order_item"];
                                $client_id = $data[$i]["order_client_id"];
                                $product_quantity = $data[$i]["order_quantity"];
                                $order_price = $data[$i]["order_price"];
                                $order_status = $data[$i]["order_status"];
                        ?>

                                <tr class="c-white <?php if ($order_status == 1) {
                                                        echo "PENDING";
                                                    } elseif ($order_status == 2) {
                                                        echo "COMPLETED";
                                                    }; ?>">
                                    <td><?php echo $order_id; ?></td>
                                    <td><?php echo $client_id; ?></td>
                                    <td><?php echo $order_item; ?></td>
                                    <td><?php echo $product_quantity; ?></td>
                                    <td><?php echo $order_price; ?></td>
                                    <td><?php if ($order_status == 1) {
                                            echo "PENDING";
                                        } elseif ($order_status == 2) {
                                            echo "COMPLETED";
                                        }; ?></td>
                                    <td>
                                        <div class="lr g-1 aic jce">
                                            <?php if ($order_status == 1) { ?>
                                                <form action="complete_order.php" method="post">
                                                    <input class="cat_id" value="<?php echo $order_id; ?>" name="order_id">
                                                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-clipboard-check px-2"></i>ACCEPT ORDER</button>
                                                </form>
                                            <?php }; ?>
                                            <form action="delete_order.php" method="post">
                                                <input class="cat_id" value="<?php echo $order_id; ?>" name="de_order_id">
                                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>


                                            <!-- <form action="update_user.php" method="post">
                                        <input class="cat_id" value="" name="user_id">
                                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                                    </form> -->
                                        </div>

                                    </td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "No Users found";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>