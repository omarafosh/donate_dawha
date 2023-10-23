<?php echo "modal" ?>


<div id="modal" class="modal">
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
            <h4>
                <span id="person"></span>
            </h4>
            <div class="buttons">
                <button class="donate" id="donate">تبرع</button>

            </div>
        </div>


    </div>
</div>