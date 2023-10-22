<div class="container">
    <div class="hero">
        <div class="content">
            <h1>علّم طالباً.. تصنع أثراً</h1>
            <p>كل تبرع ب 222 ريال قطري<br>
                يمنح الفرصة لشخص واحد لكي يتعلم</p>
            <div class="buttons">

                <input type="submit" value="تبرع سريع" class="donate  active">
            </div>

        </div>
        <img class="pic" src="../assets/imgs/xxx.jpg" alt="">

    </div>
</div>
<style>
    .hero {
    width: 100%;
    height: calc(100vh - 70px);
    background-image: url(https://www.qcharity.org/Exportpath/WebStoryMainAccountType/2020/4/0-Photo2020-04-01_09-39-52-AM.jpg);
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
    }

    .hero .buttons input[type="submit"] {
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