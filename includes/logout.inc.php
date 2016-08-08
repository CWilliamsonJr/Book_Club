<?php
require_once './includes/includes.inc.php';
setcookie('logged_in', 'yes', time()- 3600 *24 * 30* 12 ); //sets cookie to one year in the past
session_unset();
session_destroy();
Redirect('index.php');