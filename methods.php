<?php
function connect()
{
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "urbantrendy";
    $link = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Could not connect" . mysqli_connect_error());
    return ($link);
}
function getData($sql)
{
    $link = connect();
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $rows = $row;
        return $rows;
    }
}
function setData($sql)
{
    $link = connect();
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        echo ("<script>
			alert('Error '" . mysqli_error($link) . ");
			</script>");
        return false;
    }
}
function deleteData($product_id)
{
    $sql = "DELETE FROM tbl_products WHERE product_id = '" . $product_id . "' ";
    $link = connect();
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        echo ("<script>
			alert('Error '" . mysqli_error($link) . ");
			</script>");
        return false;
    }
}
function deleteUser($user_id)
{
    $sql = "DELETE FROM tbl_users WHERE users_id = '" . $user_id . "' ";
    $link = connect();
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        echo ("<script>
			alert('Error '" . mysqli_error($link) . ");
			</script>");
        return false;
    }
}
function getDat2($sql)
{
    $link = connect();
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $rows[] = $row;
    }
    return $rows;
}
function verifyUser($varEmail, $varPassword)
{
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "urbantrendy";
    $conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    $sql = "SELECT * FROM tbl_users where user_email = '" . $varEmail . "'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) != 0) {
        while ($res = mysqli_fetch_array($result)) {
            $hashedPass = $res['user_password'];
            $verify = password_verify($varPassword, $hashedPass);
            if ($verify) {
                //assigning a variable to the value of the role id as retrieved from the database
                $varRoleID = $res['user_role_id'];

                //assigning session variables values to be used when tracking user activities in-app
                $_SESSION['user_role_id'] = $res['user_role_id']; //assigning role id
                $_SESSION['user_id'] = $res['user_id']; //assigning username

                //checking the user role to direct them to their designated page 
                $sql2 = "SELECT * FROM tbl_roles where role_id = '" . $varRoleID . "'";
                $result2 = $conn->query($sql2);


                if (mysqli_num_rows($result2) != 0) {
                    while ($res2 = mysqli_fetch_array($result2)) {
                        //sets logged in as true ie 1
                        // $_SESSION['userLog'] = '1';

                        //if the user role is '1' thats a user_CLIENT atapelekwa home page
                        if ($res2['role_name'] == 'USER_CLIENT') {
                            $_SESSION['user_name'] = $res['user_app_name'];
                            echo ("<script>
									window.location.href='index.php';
									alert('Login Successful.');
									</script>");
                        } elseif ($res2['role_name'] == 'USER_ADMIN') {
                            echo ("<script>
                            window.location.href='ADMIN/admin.php';
									alert('Welcome Admin');
									</script>");
                        }
                    }
                } else {
                    echo "<script>
							alert('User role not set!');
                            window.location.href='login.php'
							</script>";
                }
            } else {
                echo '<script>
					alert("Invalid Password. Please try again");
					window.location.href = "login.php";
					</script>';
            }
        }
    } else {
        echo '<script>
			alert("Invalid email. Please try again.");
			window.location.href = "login.php";
			</script>';
    }
}
function add_product($productName, $productQuantity, $productPrice, $productGender, $productImage)
{

    if (!empty($productPrice)) {
        if (!empty($productImage)) {
            if (!empty($productName)) {
                if (!empty($productQuantity)) {
                    if (!empty($productGender)) {
                        $sql_stmt = "INSERT INTO tbl_products(product_name,product_quantity,product_price,product_gender,product_image) VALUES('" . $productName . "','" . $productQuantity . "','" . $productPrice . "','" . $productGender . "','" . $productImage . "')";
                        $result = setData($sql_stmt);


                        echo ("<script>
                alert('Product Added successfully');
                window.location.href='admin.php';
                </script>");

                        return $result;
                    } else {
                        echo ("<script>
                alert('Error on gender input');
                window.location.href='admin.php';
                </script>");
                    }
                } else {
                    echo ("<script>
            alert('Error on quantity input');
            window.location.href='admin.php';
            </script>");
                }
            } else {
                echo ("<script>
        alert('Error on product name input');
        window.location.href='admin.php';
        </script>");
            }
        } else {
            echo ("<script>
    alert('Error on product image input');
    window.location.href='admin.php';
    </script>");
        }
    } else {
        echo ("<script>
        alert('Error on price input');
        window.location.href='admin.php';
        </script>");
    }
}
