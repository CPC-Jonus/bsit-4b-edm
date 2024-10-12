<?php
require('../controller/userController.php');

if (isset($_POST['choice'])) {
    switch ($_POST['choice']) {
        case 'login':
            $ctr = new userController();
            echo $ctr->login($_POST['user'],
                            $_POST['pass']);
            break;
        
        default:
            # code...
            break;
    }
}