<?php
include 'db.php';
if (!isset($_POST['send'])){
    $name = $_POST['task'];
    $sql= "insert into tasks (name) VALUES ('$name')";
    $val = $db->query($sql);
    if($val){
       header('location:index.php');
    }

}

//var_export($_POST)


?>


















