<?php

// require_once('../../init.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dawha_db";

function connect_db($servername, $username, $password, $dbname)
{
  $conn =  new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    return $conn->connect_error;
  }
  return $conn;
}
$conn = connect_db($servername, $username, $password, $dbname);

function ready_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function get_data($conn, $table)
{
  $sql = "SELECT * FROM " . $table;
  $result = $conn->query($sql);
  return $result;
}



function find_data($conn, $table)
{
  if (!empty($_GET["search"])) {
    $search = $_GET["search"];
    $sql = "SELECT * FROM " . $table . " where name like '%" . $search . "%'";
    $result = $conn->query($sql);
  } else {
    $result = get_data($conn, $table);
  }
  return $result;
}


function exist_item($conn, $table, $name)
{
  $sql = "SELECT * FROM " . $table . " where name ='" . $name . "'";
  $result = $conn->query($sql);
  $result->num_rows;
  return $result->num_rows;
}


function save_photo($photo, $path)
{
  $target_file = $path . "/" . basename($photo["name"]);
  move_uploaded_file($photo['tmp_name'], $target_file);
}


function insert_data($conn, $table)
{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ready_input($_POST["name"]);
    $salary = ready_input($_POST["salary"]);
    $categories = ready_input($_POST["categories"]);
    $image = $_FILES["photo"]["name"];


    $exist_name = exist_item($conn, $table, $name);
    if ($exist_name == 0) {
      $sql = "insert into products (name,salary,photo,categories) values('" . $name . "','" . $salary . "','" . $image . "','" . $categories . "')";
      $result = $conn->query($sql);
      $last_id = mysqli_insert_id($conn);
      $path = 'assets/uploads/' . $last_id;
      if (!is_dir($path)) {
        mkdir($path);
      }
      $target = 'assets/uploads/' . $last_id . '/' . basename($_FILES['photo']['name']);
      move_uploaded_file($_FILES['photo']['tmp_name'], $target);

      if ($result == 1) {
        $GLOBALS['msgSuccess'] = "success";
      } else if ($result == 0) {
        $GLOBALS['msgSuccess'] = "error";
      }
    } else {
      $GLOBALS['msgSuccess'] = "exists";
    }
  }
}
function insert_data_ad_learnning($conn, $table)
{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $header = ready_input($_POST["header"]);
    $description = ready_input($_POST["description"]);
    $image = $_FILES["photo"]['name'];
    $sql = "insert into ad_learnning (header,description,photo) values('" . $header . "','" . $description . "','" . $image . "')";
    $result = $conn->query($sql);
    $last_id = mysqli_insert_id($conn);
    $path = $GLOBALS['assets'] . $last_id;
    var_dump($path);
    if (!is_dir($path)) {
      mkdir($path, 0777, true);
    }
    save_photo($_FILES["photo"], $path);
  }
}
function insert_data_ad_chrity($conn, $table)
{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $header = ready_input($_POST["header"]);
    $description = ready_input($_POST["description"]);
    $image = $_FILES["photo"]['name'];
    $sql = "insert into ad_chrity (header,description,photo) values('" . $header . "','" . $description . "','" . $image . "')";
    $result = $conn->query($sql);
    $last_id = mysqli_insert_id($conn);
    $path = $GLOBALS['assets'] . $last_id;
    var_dump($path);
    if (!is_dir($path)) {
      mkdir($path, 0777, true);
    }
    save_photo($_FILES["photo"], $path);
  }
}
function insert_data_ad_contact($conn, $table)
{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = ready_input($_POST["type"]);
    $location = ready_input($_POST["location"]);
    $city = ready_input($_POST["city"]);
    $area = ready_input($_POST["area"]);
    $sql = "insert into contact (type,location,city,area) values('" . $type . "','" . $location . "','" . $city . "','" . $area . "')";
    $result = $conn->query($sql);
  }
}


function show_data($conn, $table, $id)
{
  $sql = "SELECT * FROM " . $table . " where id=" . $id;
  $result = $conn->query($sql);
  return $result;
}





// function redirect($url, $permanent = false)
// {
//   header('Location: ' . $url, true, $permanent ? 301 : 302);
//   exit();
// }


$pagination = 10;


// class Pagination
// {
//   public $pagination = 10;
//   public $conn;
//   public $table;
//   public $result;

//   function __construct($conn, $table, $pagination)
//   {
//     $this->conn = $conn;
//     $this->table = $table;
//     $this->pagination = $pagination;
//   }

//   private function get_number_rows()
//   {
//     $this->result = get_data($this->conn, $this->table);
//     $number_of_rows = $this->result->num_rows;
//     return $number_of_rows;
//   }
//   private function get_number_pages()
//   {
//     $number_of_result = $this->get_number_rows($this->result);
//     $number_of_page = ceil($number_of_result /  $this->pagination);
//     if (!isset($_GET['page'])) {
//       $page = 1;
//     } else {
//       $page = $_GET['page'];
//     }
//     $page_first_result = ($page - 1) * $this->pagination;
//     $query = "SELECT * FROM " . $this->table . " LIMIT " . $page_first_result;
//     $result = $this->conn->query($query);
//     return $result;
//   }

//   public function get_data_pagination()
//   {
//     $this->result = get_data($this->conn, $this->table);
//     $query = "SELECT * FROM " . $this->table . " LIMIT " . $page_first_result;
//     $result = $this->conn->query($query);
//     return $result;
//     return $this->result;
//   }
// }


function get_data_pagination($conn, $table)
{
  if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];
  } else {
    $page_no = 1;
  }
  $total_records_per_page = 10;
  $offset = ($page_no - 1) * $total_records_per_page;
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  $adjacents = "2";
  $result_count = mysqli_query(
    $conn,
    "SELECT COUNT(*) As total_records FROM " . $table
  );
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $second_last = $total_no_of_pages - 1;
  $result = mysqli_query(
    $conn,
    "SELECT * FROM " . $table . " LIMIT $offset, $total_records_per_page"
  );
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
       <td>" . $row['id'] . "</td>
       <td>" . $row['header'] . "</td>
       <td>" . $row['description'] . "</td>
       <td>" . $row['photo'] . "</td>
       </tr>";
  }
  mysqli_close($conn);
  return $total_no_of_pages;
}
