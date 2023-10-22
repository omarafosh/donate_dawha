<div class="message">
    <ul>
        <?php if (isset($_SESSION['message'])) {
            foreach ($_SESSION['message'] as $key => $value) {
        ?>

                <li> <span><?php echo $value; ?></span> </li>
        <?php
            }
        } ?>
    </ul>
</div>

<style>
    .message {
        margin-top: 15px;
        background-color: green;
        color: #fff;
        height: 60px;
        width: 300px;
        position: absolute;
        right: 0;
        top: 0;
        opacity: 70%;
    }

    .message ul {
        list-style-type: none;
        margin: 16px 30px;

    }

    .message ul li span {
        position: absolute;
    }
</style>

<script>
    let message = document.querySelector('.message');
    setInterval(() => {
        message.style.display = "none"
    }, 3000);
</script>