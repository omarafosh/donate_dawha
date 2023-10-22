<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <?php
    require('../init.php');
    require_once($partials.'header.php');
    require_once($database.'database.php');
    ?>
</head>

<body>
    <div class="navbar">
        <?php include 'partials/navbar.php' ?>
    </div>
    <div class="services">
        <?php include 'partials/sections/index/services.php' ?>
    </div>
    <div class="campaigns">
        <?php include 'partials/sections/index/campaigns.php' ?>
    </div>
    <div class="footer">
        <?php include 'partials/footer.php' ?>
    </div>

    <script src="../assets/js/splide.min.js"></script>
    <script src="../assets/js/script.js"></script>

    
</body>

</html>