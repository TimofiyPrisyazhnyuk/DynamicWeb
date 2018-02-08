<?php

$mysqli = false;
function connectDB() {
    global $mysqli;
    $mysqli = mysqli_connect("localhost", "root", "root", "Dynamicweb");
    $mysqli->query("SET NAMES 'utf-8'");

}

function closeDB() {
    global $mysqli;
    mysqli_close($mysqli);
}

function getNews($limit,$id) {
    global $mysqli;
    connectDB();
    if($id)
        $where = ("WHERE `id` = ".$id);
    $result = mysqli_query($mysqli,"SELECT * FROM `news`$where ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    if($id == 0)
    return resultToArray($result);
    else
        return $result->fetch_assoc();
}
function resultToArray ($result) {
    $array = array ();
    while(($row = $result->fetch_assoc()) != false) {
        $array[] = $row;
    }
//    while (($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) != false);
//    $array[] = $row;
////    print_r($array);
    return $array;
}
