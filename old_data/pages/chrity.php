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
    <div class="charity">
        <div class="container">
            <div class="content">
                <form action="">
                    <div class="search-row1">

                        <select name="" id="">
                            <option value="">اختر نوع المساعدة</option>
                        </select>
                        <select name="" id="">
                            <option value="">الدول</option>
                        </select>
                        <input name="from" class="to" type="text" placeholder="من">
                        <input name="from" class="to" type="text" placeholder="الى">
                        <button>بحث</button>
                    </div>
                </form>
                <div class="list-cards">
                    <?php
                    $chrity = get_data($conn, 'chrity');
                    foreach ($chrity as $key => $value) {
                    ?>
                        <div class="card">
                            <div class="header-charity">
                                <img src="../assets/imgs/ff.jpg" alt="">
                                <p class="licence">ترخيص: LC2021QTCH01-000313</p>
                                <div class="personal">
                                    <div class="data">
                                        <h4>بدون دخل |<span> رقم الحالة :</span></h4>
                                        <div class="nationl">
                                            <img src="https://www.qcharity.org/PortalExportPath/CountryImages/71.png" style="width:20px;height:20px;margin: 8px 5px;" title="بولندا">
                                            <span>
                                                بولندا
                                            </span>
                                        </div>
                                    </div>
                                    <di class="cost">
                                        <span>المبلغ الاجمالي</span>
                                        <span>QAR <span> 1003243545</span></span>
                                    </di>
                                    <div class="level">
                                        <span>QAR <span> 3455</span></span>
                                        <span>QAR <span> 152255</span></span>
                                    </div>
                                    <div class="prograss-bar">
                                        <div id="bar" class="bar"></div>
                                        <p id="percentage">20%</p>
                                    </div>

                                </div>
                                <div class="amount">
                                    <input class="mony" type="text" disabled>
                                    <button>تبرع</button>
                                </div>
                            </div>


                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include 'partials/footer.php' ?>
    </div>
    <style>
        .charity {
            background-color: #e6e6e6;
            color: #2d2d2d;
            border-radius: 10px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            height: 800px;
            overflow: auto;
        }

        .charity .content {
            display: flex;
            flex-direction: column;
        }

        .charity .content input[type="text"] {
            height: 40px;
            width: 200px;
            border-radius: 8px;
            background-color: #fff;
            border: 1px solid #d9d9d9;
            padding-right: 10px;
            font-size: 16px;
            margin-bottom: 7px;
        }

        .charity select {
            height: 40px;
            width: 160px;
            border-radius: 8px;
            background-color: #fff;
            border: 1px solid #d9d9d9;
            padding-right: 10px;
            font-size: 16px;
        }

        .charity .content select {
            width: 160px;
        }

        .charity .content .search-row1 select:nth-child(2) {
            width: 160px;
            background-color: #2a5e84;
            color: #c0e2fb;
        }

        .charity .content .search-row2 .menu select {
            width: 95px;
        }

        .charity .content .search-row1 {
            display: flex;
            justify-content: flex-start;
            column-gap: 25px;
            align-items: center;
            margin: 20px;
            flex-wrap: wrap;
        }

        @media screen and (max-width: 768px) {
            .charity .content .search-row1 {
                row-gap: 3px;

            }

        }




        .charity .content .list-cards {
            height: 100%;
            margin: 50px auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            column-gap: 80px;
        }

        @media screen and (max-width: 768px) {
            .charity .content .list-cards {
                grid-template-columns: repeat(1, 1fr);
                margin: 50px auto;
                row-gap: 10px;
            }
        }

        .charity .content .list-cards .card {
            background-color: #fff;
            border: 1px solid #e4e4e4;
            border-radius: 12px;
            width: 325px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        .charity .content .list-cards .card .header-charity {
            position: relative;
   


        }

        .charity .content .list-cards .card .header-charity img {
            width: 100%;
            border-radius: 12px 12px 0px 0px;
            height: 209px;
        }

        .charity .content .list-cards .card .header-charity .licence {
            position: absolute;
            content: "";
            top: 0px;
            left: 30%;
            background-color: rgb(0, 0, 0, 0.4);
            padding: 0px 7px;
            color: #fff;
            font-size: 10px;
        }





        .charity .content .list-cards .card .data {
            display: flex;
            align-items: center;
            justify-content: space-between;
            column-gap: 5px;
            width: 100%;

            padding: 2px 10px;
        }

        .charity .content .list-cards .card .cost {
            display: flex;
            align-items: center;
            justify-content: space-between;
            column-gap: 5px;
            width: 100%;
            border-bottom: 1px solid #ddd;
            padding: 10px 10px;
        }

        .charity .content .list-cards .card .level {
            display: flex;
            align-items: center;
            justify-content: space-between;
            column-gap: 5px;
            width: 100%;

            padding: 10px 10px;
        }

        .charity .content .list-cards .card .prograss-bar {
            width: 80%;
            margin: 5px 10px;
        }

        .charity .content .list-cards .card .bar {
            height: 12px;
            width: 20%;
            border-radius: 5px;
            background-image: linear-gradient(45deg, orange, transparent);
        }


        .charity .content .list-cards .card .nationl {
            display: flex;
            justify-items: center;
            align-items: center;
            column-gap: 5px;
            padding: 12px 7px;
        }



        .charity .content .list-cards .card .amount {
            display: flex;
            justify-content: center;
            column-gap: 1px;
            padding: 12px 0px;
        }

        .charity .content .list-cards .card .mony {
            width: 100px;
            margin: 6px 13px;
            background-color: #f7f9fa;
        }

        .charity .list-cards .card button {
            width: 100px;
            height: 40px;
            margin: 6px 13px;
            background-color: #e00671;
            border: 0;
            color: #fff;
            border-radius: 12px;
        }

        .charity form {
            background-color: #d9d9d9;
            border-radius: 10px;
            margin-top: 50px;
        }

        .charity button {
            width: 100px;
            height: 40px;
            margin: 6px 13px;
            background-color: #2a5e84;
            border: 0;
            color: #fff;
            border-radius: 12px;
        }
        .personal{
            background-color: #fff;
        }
    </style>
</body>

</html>