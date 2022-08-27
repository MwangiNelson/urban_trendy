<?php
session_start();
require_once("methods.php");

$varEmail = $_POST['user_email'];
$varUsername  = $_POST['user_name'];
$varFullName =  $_POST['first_name'] . " " . $_POST['last_name'];
$varPassword = $_POST['password_1'];

$varRoleId = 1;

$hashedPass = password_hash($varPassword, PASSWORD_DEFAULT);

//checks pasword similarity btn password & password 2
if (($_POST['password_1']) != ($_POST['password_2'])) {

    //error alert in the case there is a pwssword mismatch
    echo ("<script>
		window.location.href='login.php';
		alert('Password mismatch. Please try again');
		</script>");
} else {
    //checks if email is empty
    if (!empty($_POST['user_email'])) {

        //checks if password is empty
        if (!empty($_POST['password_1'])) {

            //checks whether there is an already registered email with the same creds.
            $sql = "SELECT * FROM tbl_users where user_email = '" . $varEmail . "'";
            $result = getData($sql);

            //if existing email, output an error message
            if (!empty($result)) {
                echo ("<script>
					window.location.href='login.php';
					alert('This email account already exists. Please login instead or register with another account.');
					</script>");
            } else {
                //insert the new user into the db
                $sql_insert2 = "INSERT INTO tbl_users(user_app_name,user_full_name,user_email,user_password,user_role_id) VALUES('" . $varUsername . "','" . $varFullName . "','" . $varEmail . "','" . $hashedPass . "','" . $varRoleId . "')";
                $res_insert = setData($sql_insert2);

                if ($res_insert = true) {
                    if ($_SESSION['user_role_id'] == "2") {
                        echo ("<script>
					window.location.href='ADMIN/admin.php';
					alert('New User Successfully created');
					</script>");
                    } else {
                        $sql2 = "SELECT * FROM tbl_users where user_email = '" . $varEmail . "'";
                        $result2 = getData($sql2);
                        $_SESSION['user_name'] = $result2['user_app_name'];
                        
                        echo ("<script>
                        window.location.href='index.php';
                        alert('Thank you for signing up.');
                        </script>");
                    }
                } else {
                    echo ("<script>
					window.location.href='login.php';
					alert('An error occured while signing up.');
					</script>");
                }
            }
        }
    } else {
        echo ("<script>
				window.location.href='login.php';
				alert('Please check your info and try again.');
				</script>");
    }
}
