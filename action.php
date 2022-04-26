<?php

require 'config.php';

if (isset($_POST['saveStudent'])) {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $query = "INSERT INTO `students` (`studFName`, `studMName`, `studLName`) VALUES ('$firstName', '$middleName', '$lastName')";
    $result = $connect->query($query);
    if ($result) {
        header('Location: index.php');
    } else {
        echo 'Something unexpected happened saving student.';
    }
}

if (isset($_POST['updateStudent'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $query = "UPDATE students SET studFName = '$firstName', studMName = '$middleName', studLName = '$lastName' WHERE studID = '$id'";
    $result = $connect->query($query);
    if ($result) {
        header('Location: index.php');
    } else {
        echo 'Something unexpected happened updating student.';
    }
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    echo $id;
    $query = "DELETE FROM students WHERE studID = '$id'";
    $result = $connect->query($query);
    if ($result) {
        header('Location: index.php');
    } else {
        echo 'Something unexpected happened deleting student.';
    }
}
