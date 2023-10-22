<div id="modal-chrity" class="modal">
    <!-- Modal content -->
    <div class="card modal-content">
        <div class="close-modal-chrity">
            <span>×</span>
        </div>
        <hr />
        <div class="data">

            <div class="header-model">
                علّم طالباً.. تصنع أثراً
            </div>
            <div class="description">
                كل تبرع ب <span class="mony"> 222 </span> ريال قطري<br>
                يمنح الفرصة لشخص واحد لكي يتعلم
            </div>
            <div class="options">
                <label for="" name="button">50</label>
                <input hidden type="radio" name="amount" id="1" value="50">
                <label for="" name="button">100</label>
                <input hidden type="radio" name="amount" id="1" value="100">
                <label for="" name="button">300</label>
                <input hidden type="radio" name="amount" id="1" value="300">
                <label for="" name="button">500</label>
                <input hidden type="radio" name="amount" id="1" value="500">
            </div>
            <input type="text" class="payment" name="payment" id="payment">
            <h4>
                <span id="person"></span>
            </h4>
            <div class="buttons">
                <button class="donate" id="donate">تبرع</button>

            </div>
        </div>


    </div>
</div>


<style>
    #modal-chrity {
        width: 100%;
        height: 100%;
        border-radius: 15px;
    }


    #modal-chrity .close-modal-chrity {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 6px 20px;
    }

    #modal-chrity .close-moda-chrity span {
        background-color: #a2a2a2;
        border-radius: 50%;
        padding: 6px 16px;
        color: #fff;
        cursor: pointer;
    }

    #modal-chrity .data {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        row-gap: 20px;
        width: 100%;

    }

    #modal-chrity .data .header {
        color: #e00570;
    }

    #modal-chrity .options {
        display: flex;
        justify-content: center;
        column-gap: 16px;
    }

    #modal-chrity .options label {
        padding: 8px 15px;
        background-color: #436ab3;
        color: #fff;
        border-radius: 6px;
        cursor: pointer;
    }

    #modal-chrity .data .description {
        text-align: center;
        font-size: 18px;
        font-weight: 700;
        color: #000;
    }

    #modal-chrity input {
        width: 75%;
        height: 40px;
        padding: 0px 10px;
        border-radius: 6px;
        text-align: center;
        font-family: "Cairo", sans-serif;
        font-size: 20px;
    }

    #modal-chrity .mony {
        color: #e00570;
        font-size: 20px;
        font-weight: 700;
    }

    #modal-chrity .donate {
        font-family: "Cairo", sans-serif;
        border: none;
        font-size: 16px;
        color: #fff;
        padding: 8px 23px;
        background-color: #e00570;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        top: 82%;
        left: 22%;
    }

    body {
        font-family: "Cairo", sans-serif;
    }
</style>