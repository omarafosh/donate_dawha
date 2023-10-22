<div class="container">
    <div class="content">
        <form action="">
            <div class="search-row1">
                <input type="text" placeholder="كلمة البحث">
                <select name="" id="">
                    <option value="">الايتام</option>
                </select>
                <select name="" id="">
                    <option value="">الدول</option>
                </select>
            </div>
            <div class="search-row2">
                <div class="menu">
                    <select name="" id="">
                        <option value="">الجنس</option>
                    </select>
                    <select name="" id="">
                        <option value="">السنة</option>
                    </select>
                    <select name="" id="">
                        <option value="">الشهر</option>
                    </select>
                    <select name="" id="">
                        <option value="">اليوم</option>
                    </select>
                </div>
                <button>Search</button>
            </div>
        </form>
        <div class="list-cards">
            <?php
            $orphans = get_data($conn, 'orphans');
            foreach ($orphans as $key => $value) {
            ?>

                <div class="card">
                    <div class="header">
                        كفالة الايتام
                        <p>ترخيص: <?php echo $value['licencs'] ?></p>
                    </div>
                    <div class="personal">
                        <div class="data">
                            <p>الاسم : <span><?php echo $value['name'] ?> </span></p>
                            <p>العمر : <span><?php echo $value['age'] ?></span></p>
                            <p>الجنس : <span><?php echo $value['gender'] ?></span></p>
                        </div>
                        <img src="assets/imgs/female.png" alt="">

                    </div>
                    <div class="nationl">
                        <img src="../assets/flags/16x16/us.png" width="20" height="20" style="margin: 8px 5px;" title="بولندا">
                        <span>
                            بولندا
                        </span>
                    </div>
                    <div class="options">
                        <label for="month">تخصم تلقائيا (شهرياً) <span>150 QAR</span>
                            <input type="radio" name="type" id="month" data-mony="150"></label>
                        <label for="year"> يتم اخد موافقتك للتجديد (سنوياً) <span>1800 QAR</span>
                            <input type="radio" name="type" id="year" data-mony="1800"></label>
                    </div>
                    <div class="amount">
                        <input class="mony" type="text" disabled>
                        <a href="../../donate/pages/donate-fast.php">اكفلني</a>
                    </div>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>
<script>
    options = document.querySelectorAll('input[name="type"]');
    payment = document.querySelector('.mony');

    options.forEach(function(button, index) {
        button.addEventListener('click', function() {
            mony = button.getAttribute('data-mony');
            payment.value = mony;

        });
    })
</script>
<style>
    .sponsorship-search {
        background-color: #e6e6e6;
        color: #2d2d2d;
        border-radius: 10px;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        height: 100%;
    }

    .sponsorship-search .content {
        display: flex;
        flex-direction: column;
    }

    .sponsorship-search .content input[type="text"] {
        height: 40px;
        width: 350px;
        border-radius: 8px;
        background-color: #fff;
        border: 1px solid #d9d9d9;
        padding-right: 10px;
        font-size: 16px;
        margin-bottom: 7px;
    }

    .sponsorship-search select {
        height: 40px;
        width: 160px;
        border-radius: 8px;
        background-color: #fff;
        border: 1px solid #d9d9d9;
        padding-right: 10px;
        font-size: 16px;
    }

    .sponsorship-search .content select {
        width: 160px;
    }

    .sponsorship-search .content .search-row1 select:nth-child(2) {
        width: 160px;
        background-color: #2a5e84;
        color: #c0e2fb;
    }

    .sponsorship-search .content .search-row2 .menu select {
        width: 95px;
    }

    .sponsorship-search .content .search-row1 {
        display: flex;
        justify-content: flex-start;
        column-gap: 25px;
        align-items: center;
        margin: 20px;
        flex-wrap: wrap;
    }

    @media screen and (max-width: 768px) {
        .sponsorship-search .content .search-row1 {
            row-gap: 3px;

        }

    }

    .sponsorship-search .content .search-row2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 20px;
        flex-wrap: wrap;
    }

    @media screen and (max-width: 768px) {

        .sponsorship-search .content .search-row2 {
            display: flex;
            flex-direction: column;
            row-gap: 20px;

        }

    }

    .sponsorship-search .content .search-row2 .menu {
        display: flex;
        justify-content: flex-start;
        column-gap: 25px;
        align-items: center;
        flex-wrap: wrap;
    }

    .sponsorship-search .content .search-row2 button {
        height: 40px;
        width: 132px;
        border-radius: 13px;
        font-size: 16px;
        color: #fff;
        background-color: #2a5e84;
        border: 0;

    }

    @media screen and (max-width: 768px) {
        .sponsorship-search .content .search-row2 button {
            width: 100%;
        }
    }

    .sponsorship-search .content .list-cards {
        height: 100%;
        margin: 50px auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        column-gap: 20px;
    }

    @media screen and (max-width: 768px) {
        .sponsorship-search .content .list-cards {
            grid-template-columns: repeat(1, 1fr);
            margin: 50px auto;
            row-gap: 10px;
        }
    }

    .sponsorship-search .content .list-cards .card {
        background-color: #fff;
        border: 1px solid #e4e4e4;
        border-radius: 12px;
        width: 253px;
        height: 366px;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
    }

    .sponsorship-search .content .list-cards .card .header {
        position: relative;
        width: 100%;
        padding: 0px 10px;

    }

    .sponsorship-search .content .card .header::after {
        content: "كفالة الايتام";
        position: absolute;
        height: 22px;
        width: 89px;
        background-color: #e00671;
        border-radius: 12px 0px 12px 0px;
        left: 0;
        top: 0;
        font-size: 12px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .sponsorship-search .content .list-cards .card .header p {
        font-size: 10px;
    }

    .sponsorship-search .content .list-cards .card .personal {
        display: flex;
        column-gap: 5px;
        width: 100%;
        margin: 7px auto;
        border-bottom: 1px solid #a4a4a4;
        border-top: 1px solid #d6d6d6;
        padding: 10px;
        background-color: #f3f3f3;
    }

    .sponsorship-search .content .list-cards .card .nationl {
        display: flex;
        justify-items: center;
        align-items: center;
        column-gap: 5px;
        padding: 12px 7px;
    }

    .sponsorship-search .content .list-cards .card .personal img {
        width: 75px;
    }

    .sponsorship-search .content .list-cards .card .options {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        direction: ltr;
        font-size: 12px;
        padding: 16px 10px;

    }

    .sponsorship-search .content .list-cards .card .amount {
        display: flex;
        justify-content: center;
        column-gap: 1px;
    }

    .sponsorship-search .content .list-cards .card .mony {
        width: 100px;
        margin: 6px 13px;
        background-color: #f7f9fa;
    }

    .sponsorship-search .content .list-cards .card button {
        width: 100px;
        height: 40px;
        margin: 6px 13px;
        background-color: #e00671;
        border: 0;
        color: #fff;
        border-radius: 12px;
    }

    .sponsorship-search form {
        background-color: #d9d9d9;
        border-radius: 10px;
        margin-top: 50px;
    }
</style>