<div id="modal-learnning" class="modal">
    <!-- Modal content -->
    <div class="card modal-content">
        <div class="close-modal">
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
            <h4 >    
                <span id="person"></span>    
            </h4>
            <div class="buttons">
                <button class="donate" id="donate">تبرع</button>

            </div>
        </div>


    </div>
</div>
<script>
    header_db = document.querySelector('#header-db');
    document.querySelector('.header-model').innerHTML = header_db.innerHTML;
    function account_person(payment) {
        person = 1
        if (payment > 324) {
            person = 2
        }
        part1=" انت الانت سوف تقوم بالمساهمة في تعليم"
        part2="<br>" +"<span style='font-size: 20px; color:#e00570;'>"+ person +"</span>"+ "فرد "
        document.querySelector('#person').innerHTML = part1+part2;
    }

    buttons = document.querySelectorAll('label[name="button"]');
    options = document.querySelectorAll('input[name="amount"]');
    payment = document.querySelector('.payment');
    buttons.forEach(function(button, index) {
        button.addEventListener('click', function() {
            options[index].checked = true;
            payment.value = options[index].value
            account_person(payment.value);
        });
    });
</script>

<style>
    #modal-learnning {
        width: 100%;
        height: 100%;
        border-radius: 15px;
    }


    #modal-learnning .close-modal {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 6px 20px;
    }

    #modal-learnning .close-modal span {
        background-color: #a2a2a2;
        border-radius: 50%;
        padding: 6px 16px;
        color: #fff;
        cursor: pointer;
    }

    #modal-learnning .data {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        row-gap: 20px;
        width: 100%;

    }

    #modal-learnning .data .header {
        color: #e00570;
    }

    #modal-learnning .options {
        display: flex;
        justify-content: center;
        column-gap: 16px;
    }

    #modal-learnning .options label {
        padding: 8px 15px;
        background-color: #436ab3;
        color: #fff;
        border-radius: 6px;
        cursor: pointer;
    }

    #modal-learnning .data .description {
        text-align: center;
        font-size: 18px;
        font-weight: 700;
    }

    #modal-learnning input {
        width: 75%;
        height: 40px;
        padding: 0px 10px;
        border-radius: 6px;
        text-align: center;
        font-family: "Cairo", sans-serif;
        font-size: 20px;
    }

    #modal-learnning .mony {
        color: #e00570;
        font-size: 20px;
        font-weight: 700;
    }

    #modal-learnning .donate {
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