<?php
require_once('conn.php');

if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    $sql = $conn->prepare("DELETE FROM karyawan WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS')); 
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}