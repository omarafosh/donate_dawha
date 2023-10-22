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
    "SELECT COUNT(*) As total_records FROM chrity"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;
$result = mysqli_query(
    $conn,
    "SELECT * FROM chrity LIMIT $offset, $total_records_per_page"
);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
       <td>" . $row['id'] . "</td>
       <td>" . $row['status_id'] . "</td>
        <td>" . $row['type'] . "</td>
        <td>" . $row['country'] . "</td>
      
       <td>" . $row['total'] . "</td>
        <td>" . $row['payment'] . "</td>
        <td>" . $row['remaind'] . "</td>
        <td>" . $row['hero_img'] . "</td>
    
       </tr>";
}
mysqli_close($conn);
return $total_no_of_pages;
