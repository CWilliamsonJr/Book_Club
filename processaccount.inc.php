<?php

require_once './includes/includes.inc.php';
$username = trim($_POST['user_name']);
$email = trim($_POST['email']);
$password = trim($_POST['user_password']);

if(strcmp($_POST['user_password'],$_POST['confirm_user_password']) !== 0 ){
    $_SESSION['acct_warning'] = "<div class='alert alert-danger'>Passwords are not the same, please try again.</div>";
    Redirect('./createaccount.php');
    die;
}
if(!empty($username) && !empty($password) && !empty($email)){
    $sql = 'INSERT INTO users ( `user`,`email`, `password`) VALUES (?,?,?)';

    $password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);
    
    $stmt = $pdo->prepare($sql); // sends query to the database
    $stmt->execute([$_POST['user_name'],$_POST['email'],$password]); // binds variables to be sent with query

    $successful = $stmt->rowCount();
    if($successful === -1){
        $_SESSION['acct_warning'] = "<div class='alert alert-danger'>Account Creation Failed, please try again</div>";
        Redirect('./createaccount.php');

    }else{
        $_SESSION['acct_warning'] = "<div class='alert alert-success'>Your Account was created!</div>";
        Redirect('./index.php');
    }

}else{
    $_SESSION['acct_warning'] = "<div class='alert alert-danger'>You can't enter a blank option for User Name and/or Password</div>";
    Redirect('./createaccount.php');
}

