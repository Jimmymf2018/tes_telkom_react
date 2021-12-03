<?php
require_once('conn.php');

if (isset($_POST['id'])) {
    $id                  = $_POST['id'];
    $fname       		 = $_POST['fname'];
    $lname       		 = $_POST['lname'];
    $username            = $_POST['username'];
    $avatar              = $_POST['avatar'];
    $sql = $conn->prepare("UPDATE karyawan SET fname=?, lname=?, username=?, avatar=? WHERE id=?");
    $sql->bind_param('ssddd', $fname, $lname, $username, $avatar, $id);
    $sql->execute();
    if ($sql) { 
        header("location:./api_tampil.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}
