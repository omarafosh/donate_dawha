<div class="container">
    <div class="hero-section">
        <div class="content">
            <h1>عَمّر مسجدًا..تصنع أثراً</h1>
            <p>كل تبرع ب 342 ريال قطري<br>
                تساعد فرد في أداء صلاته في مسجد حول العالم</p>

            <button class="buttons" id="btn_mosque" data-modal="modal-mosque">تبرع سريع</button>


        </div>
        <img class="pic" src="../assets/imgs/xxx.jpg" alt="">

    </div>
</div>
<?php include($partials . 'modal_payment_mosque.php'); ?>
<script>
    const modalButtons = document.querySelectorAll("#btn_mosque");
    const modals = document.querySelectorAll("#modal-mosque");
    modalButtons.forEach(button => {
        button.addEventListener("click", () => {
            modals.forEach(modal => {
                modal.style.display = "none";
            });
            const modalId = button.getAttribute("data-modal");
            const modal = document.getElementById(modalId);
            modal.style.display = "block";
        });
    });

    const closeButtons = document.querySelectorAll(".close-modal");
    closeButtons.forEach(closeButton => {
        closeButton.addEventListener("click", () => {
            const modal = closeButton.parentElement.parentElement;
            modal.style.display = "none";
        });
    });
    const cancel = document.querySelectorAll("#cancel");
    cancel.forEach(closeButton => {
        cancel.addEventListener("click", () => {
            const modal = closeButton.parentElement.parentElement;
            modal.style.display = "none";
        });
    });


    window.addEventListener("click", event => {
        if (event.target.classList.contains("modal")) {
            event.target.style.display = "none";
        }
    });

    account_person();
</script>

<style>
    .hero {
        width: 100%;
        height: calc(100vh - 70px);
        background-image: url(https://www.qcharity.org/Exportpath/WebStoryMainAccountType/2021/4/0-Photo2021-04-29_11-59-22-AM.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;

        height: 600px;
    }

    .hero .content {
        position: absolute;
        top: 20%;
        width: 100%;
        padding: 0 70px;
        color: #000;
        font-size: 18px;
        color: #fff;
    }

    @media screen and (max-width: 768px) {
        .hero .content {
            position: absolute;
            top: 20%;
            width: 100%;
            color: #000;
            font-size: 18px;
            color: #fff;
            padding: 0;
        }
    }

    .hero .content h1 {
        font-size: 30px;
    }

    .hero .content p {
        font-size: 14px;
    }

    .hero .buttons {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        column-gap: 40px;
        margin-top: 20px;
        padding: 7px 16px;
        background-color: var(--buttons);
        border: 0px;
        color: #fff;
        border-radius: 7px;
    }

    .hero #btn_mosque input[type="submit"] {
        background-color: var(--buttons);
        color: #fff;
        border: none;
        padding: 10px 30px;
        border-radius: 8px;
        font-family: 'Cairo', sans-serif;
    }

    .hero .pic {
        position: absolute;
        left: 46%;
        top: 92%;

    }
</style>