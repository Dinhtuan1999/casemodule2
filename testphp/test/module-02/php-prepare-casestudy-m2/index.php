
<?php
//require "model/DBConnection.php";
require "controller/CustomerController.php";
use \Controller\CustomerController;

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>
<body>

<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">
            Customer management</a>
    </div>
    <?php
    $controller = new CustomerController();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
    switch ($page){
        case 'index':
            $controller->index();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>
</body>
</html>