<?php
$host = $database['host'];
$dbname = $database['dbname'];
$port = $database['port'];
$charset = $database['charset'];
$username = $database['username'];
$password = $database['password'];
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=$charset", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


function query($query, $data = [])
{
    $conn = $GLOBALS['conn'];
    $stm = $conn->prepare($query);
    $check = $stm->execute($data);
    if ($check) {
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        if (is_array($result) && count($result)) {
            return $result;
        }
    }
    return false;
}


function all($table)
{
    $sql = "SELECT * FROM " . $table;
    $conn = $GLOBALS['conn'];
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function findByID($id, $table)
{
    $sql = "SELECT * FROM " . $table . " WHERE id=" . $id;
    $conn = $GLOBALS['conn'];
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function findByField($field, $data, $table)
{
    $sql = "SELECT * FROM {$table} where {$field}={$data}";
    $conn = $GLOBALS['conn'];
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function countRecords($table)
{
    $conn = $GLOBALS['conn'];

    $sql = "SELECT COUNT(*) AS total_records FROM $table";

    try {
        $stmt = $conn->query($sql);
        $total_records = $stmt->fetch(PDO::FETCH_ASSOC)['total_records'];
        return $total_records;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        return false;
    }
}
function findByQuery($sql)
{
    $conn = $GLOBALS['conn'];
    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function paginate($table, $paginate = 10)
{
    if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
        $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
    }
    $offset = ($page_no - 1) * $paginate;
    $prev_page = $page_no - 1;
    $next_page = $page_no + 1;
    $total_rows = countRecords($table);
    $total_pages = ceil($total_rows / $paginate);
    $second_last = $total_pages - 1;
    $sql = "SELECT * FROM " . $table . " LIMIT $offset, $paginate";
    $data = findByQuery($sql);
    return [
        'result' => $data,
        'total_no_of_pages' => $total_pages,
        'page_no' => $page_no,
        'next_page' => $next_page,
        'previous_page' => $prev_page,
    ];
}
