<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <?php
    require('../init.php');
    require_once($partials . 'header.php');
    require_once($database . 'database.php');
    ?>
</head>

<body>
    <div class="navbar">
        <?php include 'partials/navbar.php' ?>
    </div>
    <div class="hero">
        <?php include 'partials/sections/donates/hero.php' ?>
    </div>
    <div class="counters">
        <?php include 'partials/sections/donates/counters.php' ?>
    </div>
    <div class="service-name">
        <?php include 'partials/sections/donates/service-name.php' ?>
    </div>
    <div class="national">
        <?php include 'partials/sections/donates/national.php' ?>
    </div>
    <div class="footer">
        <?php include 'partials/footer.php' ?>
    </div>
</body>

</html>