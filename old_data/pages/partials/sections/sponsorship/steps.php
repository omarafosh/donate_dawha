<div class="container">
    <h1>كيف تتم عملية الكفالة معنا ؟</h1>
    <ol class="card">
        <div class="content">
            <img src="../assets/imgs/how-sponsor-1.jpg" alt="">
            <p class="description">يمكنك الإطلاع على جميع البيانات الخاصة
                بالمكفول كما يصلك صور وتحديث للبيانات
                التي تجد عليه حسب حاجاته</p>
        </div>
        <div class="content">
            <img src="../assets/imgs/how-sponsor-2.jpg" alt="">
            <p class="description">قم بالبحث عن مكفول حسب العمر أو النوع أو
                قيمة الكفالة حسب رغباتك، وسوف تصبح أنت
                الكفيل الوحيد له </p>
        </div>
        <div class="content">
            <img src="../assets/imgs/how-sponsor-3.jpg" alt="">
            <p class="description">سوف يصلك تقرير سنوى عن المكفول الخاص
                بك كي تستطيع متابعته والاهتمام به لحظة
                بلحظة </p>
        </div>

    </ol>
</div>

<style>
    .sponsorship-steps {
        background-color: #fff;
        height: 100%;
        padding-bottom: 25px;
    }

    .sponsorship-steps h1 {
        text-align: center;
    }

    .sponsorship-steps .card {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 10px;
        width: 100%;
        margin: 20px auto;
    }

    @media screen and (max-width: 768px) {
        .sponsorship-steps .card {
            grid-template-columns: repeat(1, 1fr);
            row-gap: 20px;
        }
    }

    .sponsorship-steps .card .content img {
        border-radius: 50%;
        border: 5px solid #fff;
    }


    .sponsorship-steps .card .content {
        position: relative;
        width: 75%;
        margin: 0px auto;

    }

    .sponsorship-steps .card .content .description {
        margin-top: 20px;
        font-size: 13px;
        width: 87%;
        text-align: center;
    }

    ol {
        counter-reset: hw;
    }

    .sponsorship-steps .card .content::after {
        counter-increment: hw;
        content: counter(hw);
        position: absolute;
        height: 60px;
        width: 60px;
        border-radius: 50%;
        background-color: #20598e;
        left: 165px;
        top: 190px;
        color: #fff;
        text-align: center;
        font-size: 30px;
    }

    @media screen and (max-width: 768px) {
        .sponsorship-steps .card .content::after {
            counter-increment: hw;
            content: counter(hw);
            position: absolute;
            height: 40px;
            width: 40px;
            left: 111px;
            top: 208px;
            color: #fff;
            text-align: center;
            font-size: 22px;
        }
    }



    .sponsorship-steps .card .content h3 {
        position: absolute;
        left: 177px;
        top: 185px;
        z-index: 1;
        color: #fff;
        font-size: 38px;
        margin: 0;
        padding: 0px 4px;
    }
</style>