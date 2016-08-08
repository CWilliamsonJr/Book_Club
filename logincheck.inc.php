<?php
require_once './includes/includes.inc.php';

if (!empty(trim($_POST['user_name'])) && !empty(trim($_POST['user_password']))) { // checks to see if user name and password was entered

    $username = $_POST['user_name'];
    $password = $_POST['user_password'];
    $failedLogin = 'Wrong user name and/or password';

    $sql = "SELECT `user`,password,user_id FROM users WHERE `user` = ?"; // retrieves user name from the database
    $stmt = $pdo->prepare($sql); // sends query to the database

    $stmt->execute([$username]);

    $num_rows = $stmt->rowCount(); // tells how many rows were returned
    $array = $stmt->fetch(); // returns username and password from the database    

    $cookieTime = time() + 3600 * 24 * 30;
    if (!empty($num_rows)) {
        if(password_verify($password,$array['password'])) {
            $_SESSION['uId'] = $array['user_id'];
            $_SESSION['uName'] = $array['user'];
            setcookie('logged_in', 'yes', $cookieTime);
            Redirect('dashboard.php'); // sends user to the polls page
        } else {
            echo $failedLogin;
        }
    } else {
        echo $failedLogin;
    }

} else {
    echo "you're not logged in";
}
   

