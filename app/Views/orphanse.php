<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/lib/normalize.css">
    <link rel="stylesheet" href="assets/fonts/font_cairo.css">
    <link rel="stylesheet" href="assets/lib/splide.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>


    <nav>
        <?php include($config['COMPONENT_PATH'] . DS . 'NavbarComponent.php') ?>
    </nav>

    <div class="section">
        <div class="container">

        </div>
    </div>

    <footer class="section">
        <div class="container">
            <?php include($config['COMPONENT_PATH'] . DS . 'FooterComponent.php') ?>
        </div>
    </footer>
    <?php include($config['COMPONENT_PATH'] . DS . 'Modals' . DS . 'ModalComponent.php') ?>
    <script src="assets/lib/splide.min.js"></script>
    <script src="assets/script/main.js"></script>





</body>

</html>