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
    <div class="sponsorship">
        <?php include 'partials/sections/sponsorship/hero.php' ?>
    </div>
    <div class="sponsorship-counters">
        <?php include 'partials/sections/sponsorship/counters.php' ?>
    </div>
    <div class="sponsorship-notes">
        <?php include 'partials/sections/sponsorship/notes.php' ?>
    </div>
    <div class="sponsorship-steps">
        <?php include 'partials/sections/sponsorship/steps.php' ?>
    </div>
    <div class="sponsorship-search">
        <?php include 'partials/sections/sponsorship/search.php' ?>
    </div>
    <div class="footer">
        <?php include 'partials/footer.php' ?>
    </div>

</body>

</html>