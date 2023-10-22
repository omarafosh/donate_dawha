<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require('../../init.php');
    require_once($partials_admin . 'header.php');
    require_once($partials_admin . 'global.php');
    require_once($partials_admin . 'table.php');
    require_once($database . 'database.php');
    ?>
</head>
<style>
    .process {
        background-color: #fff;
        height: 70px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    button,
    #ok {
        margin-right: 10px;
        padding: 7px 20px;
        background-color: #f25a5e;
        border: 0px;
        border-radius: 10px;
    }

    .cover {
        width: 100px;
    }
</style>
<style>
    .pagination {
        display: flex;
        justify-content: space-between;

    }

    .pagination>.ul {
        list-style-type: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination>.ul>li {
        padding: 5px 20px;
        background-color: #fff;
        border-right: 1px solid #ccc;
    }

    .pagination>.ul>.active {
        background-color: #f25a5e;

    }

    .pagination>.ul>.active a {
        color: #fff;
    }

    .pagination>strong {
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px 12px;
        height: 100%;
    }
</style>


<body>
    <div class="navbar">
        <div class="container">

        </div>
    </div>
    <div class="container-dashboard">

        <div class="sidebar">
            <?php include($partials_admin . 'sidebar.php') ?>
        </div>
        <div class="content">
            <div class="process">
                <button id="myBtn">اضافة مركز</button>
                <?php include($partials_admin . 'modal_contact.php') ?>
            </div>

            <div class="container">
                <table>
                    <thead>
                        <th width="8%">م</th>
                        <th width="25%"> نوع المركز</th>
                        <th width="40%"> موقع المركز</th>
                        <th width="15%"> البلدية </th>
                        <th width="15%"> المنطقة </th>
        
                    </thead>
                    <tbody>

                        <?php require($controller . 'contact_processe.php'); ?>



                    </tbody>

                </table>
                <?php require($partials_admin . 'pagination.php'); ?>
            </div>
        </div>
    </div>
    </div>

</body>


</html>