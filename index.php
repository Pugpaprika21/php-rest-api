<?php

use RestApi\DataBase\Db;

require_once 'db.php';

$db = new Db();
$getData = $db->select("SELECT * FROM tbl_users");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo json_encode($getData);
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'this is post';
} else {
    http_response_code(405);
}

?>