<?php
require_once './includes/includes.inc.php';
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="">
            <div class="navbar-brand"><a class="nounderline" href="./dashboard.php">Voting Poll Web App</a></div>
            <ul class="nav navbar-nav navbar-right margin_right">
                <li><a href="./dashboard.php" role="button"><i class="fa fa-home" aria-hidden="true">&nbsp;Home</i></a></li>
                <li><a href="logout.inc.php"><i class="fa fa-sign-out" aria-hidden="true">&nbsp;Logout</i> </a></li>
            </ul>
        </div>
    </div>
</nav>
<?php

$logged_in = $_COOKIE['logged_in'];
if ($logged_in === 'yes') { // if you are still logged in

    $username = $_SESSION['uName'];
    $formAction = "'".htmlspecialchars($_SERVER["PHP_SELF"])."'";

    if (isset($_POST['Task'])) {
        $todo = explode('_', $_POST['Task']); // Checks to see what you are trying to do
        switch ($todo[0]) {
            case 'Edit':
                require './edit.php';
                break;
            case 'Add':                
                break;
            case 'Make':
                require './make-poll-form.php';
                break;           
            case 'Logout':
                require './logout.inc.php';
                break;
            default:
                require './book-view.php';
        }
    } else {
        require './poll-view.php';
    }
} else {
    Redirect('index.php');
}


?>
<footer>
    <div class=''>Designed by Clarence Williamson
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="./scripts/index.js"></script>
</body>
</html>
