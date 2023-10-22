<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="container">
            <span class="close">&times;</span>
            <h3>مراكزنا </h3>
            <form enctype="multipart/form-data">
                <label for=""> نوع المركز</label>
                <input type="text" name="type" id="type">
                <label for="">
                    موقع المركز </label>
                <input type="text" name="location" id="location">
                <label for="">البلدية </label>
                <input type="text" name="city" id="city">
                <label for="">
                    المنطقة </label>
                <input type="text" name="area" id="area">
                <hr />
                <button id="ok">حفظ</button>
                <button id="cancel">الغاء</button>
            </form>

        </div>

    </div>

</div>
<style>
    label {
        display: block;
    }

    hr {
        margin: 10px 0px;
    }

    input {
        width: 100%;
        height: 20px;
        border-radius: 8px;
    }

    h3 {
        text-align: center;
        margin-bottom: 45px;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }


    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 35%;
        border-radius: 20px;

    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    input {
        width: 100%;
        height: 45px;
        border-radius: 8px;
        margin-top: 10px;
        padding: 0px 15px;
    }
</style>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");


    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    var btnok = document.getElementById("ok");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.addEventListener('click', function() {
        modal.style.display = "block";
    })


    // When the user clicks on <span> (x), close the modal
    span.addEventListener('click', function() {

        modal.style.display = "none";
    });
    btnok.addEventListener('click', function(e) {
        e.preventDefault();
        ajax();
        modal.style.display = "none";
        window.location.reload();
    });
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function ajax() {
        console.log('00000');
        // Create a new XMLHttpRequest object




        var type = document.getElementById("type").value;
        var location = document.getElementById("location").value;
        var city = document.getElementById("city").value;
        var area = document.getElementById("area").value;


        var formData = new FormData();
        formData.append("type", type);
        formData.append("location", description);
        formData.append("city", city);
        formData.append("area",area)

        // إنشاء طلب AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../partials/contact_proccess.php", true);

        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log(xhr.responseText);
                return xhr.responseText;
            } else {
                console.error("فشل الطلب برمز الحالة: " + xhr.status);
            }
        };

        xhr.send(formData);

    }
</script>