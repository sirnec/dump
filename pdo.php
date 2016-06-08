<?php
/**
 * Created by PhpStorm.
 * User: rhinoda
 * Date: 08.06.16
 * Time: 15:29
 */

$host = 'localhost';
$db_name = 'timechat';
$db_user = 'root';
$db_pass = '';

$db = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);

$stmt = $db->query('SELECT id from tbl_user');

$result = $stmt->fetchAll();

$filter = [];
foreach ($result as $row) {
    $filter[] = $row['id'];
}

$host = 'localhost';
$db_name = 'onsite_users';
$db_user = 'root';
$db_pass = '';

$db = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);

$stmt = $db->query('SELECT id from tbl_user');

$result = $stmt->fetchAll();

$data = [];
foreach ($result as $row) {
    $data[] = $row['id'];
}

$missing = [];
foreach ($filter as $id) {

    if (!in_array($id, $data)) {
        $missing[] = $id;
    }
}

var_dump($missing);