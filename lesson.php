<?php
    require_once './lang/get-lang.php';
    require_once './db/db-connect.php';
?>  

<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('Location: /all-lesson.php');
    }
?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lesson</title>

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
            include_once './main/lesson-main.php'
        ?>
    </body>
</html>
