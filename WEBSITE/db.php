<?php


function getDbConnection(){
    $servername = "localhost";
    $username = "timpolimi";
    $password = "polimi123";
    $dbname = "my_timpolimi";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}

function getDispositivo($id){
    $conn = getDbConnection();
    $sql = "SELECT * FROM Dispositivi WHERE id = '".$id."'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        die("0 results");
    }
    $conn->close();
}


function getImmagine($id){
    $conn = getDbConnection();
    $sql = "SELECT * FROM Immagini WHERE id = '".$id."'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        die("0 results");
    }
    $conn->close();
}

?>




    