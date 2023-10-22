<?php
session_start();
require("../../init.php");
require($database.'db_config.php');
require($database.'database.php');


// require_once('../../routes.php');
// redirect('../admin/pages/advertisments_learnning.php');

var_dump($conn);
var_dump($_FILES['photo'] );

// insert_data_ad_learnning($conn,'ad_learnning');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    insert_data_ad_learnning($conn,"ad_learnning");
}
