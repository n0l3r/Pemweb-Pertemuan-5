<?php

require_once 'db.php';

if(isset($_GET['p'])){
    $prodi = $_GET['p'];
    $query = "SELECT * FROM mahasiswa WHERE prodi = '$prodi'";
    $result = mysqli_query($connect, $query);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($connect, $query);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    echo json_encode($data);
}

?>