<?php
    //includes database connection file
    include_once('../dbConnection/mysqlconfig_connection.php');
    //gets id of the data from url
    $id = $_GET['id'];
    //deletes the row from table
    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE Subject_ID=$id;");
    //redirects to the display page (index.php in our case)
    header('location: ../index.php');
?>