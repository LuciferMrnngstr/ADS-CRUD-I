<?php
    //includes database connection file
    include_once('../dbConnection/mysqlconfig_connection.php');
    //gets id from url
    $id = $_GET['id'];
    //selects data associated with this particular id
    $result = mysqli_query($dbc, "SELECT * FROM tblsubjects WHERE Subject_ID=$id;");
    while($res = mysqli_fetch_array($result)){
        $code = $res['Subject_Code'];
        $name = $res['Subject_Name'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h1>Edit Subject</h1>
        <a href="../index.php">Home</a><br><br>
        <form action="../functions/edit.php" name="form1" method="post">
            <table border="0">
                <tr>
                    <td>Subject Code</td>
                    <td><input type="text" name="code" value="<?= $code; ?>"></td>
                </tr>
                <tr>
                    <td>Subject Name</td>
                    <td><input type="text" name="name" value="<?= $name; ?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?= $_GET['id']; ?>"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>