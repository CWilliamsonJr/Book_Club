<!doctype html>
<?php
require_once ('./includes/includes.inc.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Create your Poll</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="">
            <div class="navbar-brand"><a class="nounderline" href="./dashboard.php">Voting Poll Web App</a></div>
            <ul class="nav navbar-nav navbar-right margin_right">
                <li><a href="./createaccount.php" role="button"><i class="fa fa-plus" aria-hidden="true">&nbsp;Create Account</i></a></li>
                <li><a href="./index.php"><i class="fa fa-sign-out" aria-hidden="true">&nbsp;Sign in</i> </a></li>
            </ul>
        </div>
    </div>
</nav>
<div class='jumbotron'>
    <div class='container'>
        <div class='h1'>Create your Account</div>
    </div>
</div>
<div class='container'>
    <div class='row'>
        <?php
            if(isset($_SESSION['acct_warning'])){
                echo $_SESSION['acct_warning'];
                unset($_SESSION['acct_warning']);
            }
        ?>
        <div><span class='h1'>Make your account</span></div><br/>
        <form action='processaccount.inc.php' method="post">
            <div class="form-group">
                <label for="user_name">User Name:</label>
                <input name='user_name' type="text" class="form-control input-width" id="user_name" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input name='email' type="email" class="form-control input-width" id="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="user_password">Password</label>
                <input name='user_password' type="password" class="form-control input-width" id="user_password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="user_password">Confirm Password</label>
                <input name='confirm_user_password' type="password" class="form-control input-width" id="user_password_check" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Account</button>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
</body>
</html>
