<?php
session_start();
require("../../init.php");
require($database.'db_config.php');
require($database.'database.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    insert_data_ad_contact($conn,"contact");
}
