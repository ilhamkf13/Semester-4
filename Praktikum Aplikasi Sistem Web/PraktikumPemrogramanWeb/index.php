<?php
session_start();

require_once 'config/config.php';
require_once 'controllers/controller.php';

$page =    isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        require_once 'views/index.php';
        break;

    case 'konfirmasi':
        require_once 'views/confirm.php';
        break;
    
    default:
        require_once 'views/index.php';
        break;
}
?>