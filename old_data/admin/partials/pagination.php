<div class="pagination">

    <strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>



    <ul class="ul">
        <?php if ($page_no > 1) {
            echo "<li><a href='?page_no=1'>الاول</a></li>";
        } ?>


        <li <?php if ($page_no >= $total_no_of_pages) {
                echo "class='disabled'";
            } ?>>
            <a <?php if ($page_no < $total_no_of_pages) {
                    echo "href='?page_no=$next_page'";
                } ?>>التالي</a>
        </li>

        <?php
        if ($total_no_of_pages <= 10) {
            for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                if ($counter == $page_no) {
                    echo "<li class='active'><a>$counter</a></li>";
                } else {
                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
            }
        } ?>

        <li <?php if ($page_no <= 1) {
                echo "class='disabled'";
            } ?>>
            <a <?php if ($page_no > 1) {
                    echo "href='?page_no=$previous_page'";
                } ?>>السابق</a>
        </li>
        <?php if ($page_no < $total_no_of_pages) {
            echo "<li><a href='?page_no=$total_no_of_pages'>الاخير &rsaquo;&rsaquo;</a></li>";
        } ?>
    </ul>

</div>