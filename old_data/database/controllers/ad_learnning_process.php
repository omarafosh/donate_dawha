<?php
require_once('../../init.php');

if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}
$total_records_per_page = 5;
$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";
$result_count = mysqli_query(
    $conn,
    "SELECT COUNT(*) As total_records FROM ad_learnning"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;
$result = mysqli_query(
    $conn,
    "SELECT * FROM ad_learnning LIMIT $offset, $total_records_per_page"
);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
       <td>" . $row['id'] . "</td>
       <td>" . $row['header'] . "</td>
       <td>" . $row['description'] . "</td>
       <td> <img src=" .  asset($row['photo'], $row['id']) . " style='width:100px;height:100px'></td>
       </tr>";
}
mysqli_close($conn);
return $total_no_of_pages;
