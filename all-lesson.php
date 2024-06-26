<?php
    require_once './lang/get-lang.php';
    require_once './db/db-connect.php';
    require_once './db/loadmore.php';
    require_once './db/users.php';

    $l = new LoadMore();
?> 

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All lesson</title>

        <!-- CSS -->        
        <link rel="stylesheet" href="/css/base.css">
        <link rel="stylesheet" href="/css/font.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/assets/ico/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <?php
            include_once "./template/header.php";
        ?>

        <?php 
            include_once "./main/all-lesson-main.php";
        ?>

        <?php
            include_once './footer/loadmore-footer.php';
        ?>
    </body>
</html>