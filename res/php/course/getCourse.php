<?php
    session_start();
    if (!isset($_SESSION['UserID']) || !isset($_POST['CUID'])) {
        header("Location: ../login");
    }

    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once("$path/res/php/_connect.php");
    include_once("$path/res/php/functions.inc.php");

    $CUID = $_POST["CUID"];

    //Function to get a single course object
    $sql = "SELECT * FROM `tblCourses` WHERE `CUID` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $CUID);
    $stmt->execute();
    $result = $stmt->get_result();
    $course = $result->fetch_object();
    $stmt->close();
    echo json_encode($course);
?>