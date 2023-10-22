<?php
session_start();
?>
<a href='login.php'>    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    ?></a>
<h1> 404 </h1>

