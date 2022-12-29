<?php
    //includes database connection file
    include_once('dbConnection/mysqlconfig_connection.php');
    //includes fetch file
    include_once('functions/fetch.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sample CRUD</title>
    </head>
    <body>
        <h1>My Subjects</h1>
        <a href="forms/addform.php">Add Subject</a><br><br>
        <table width='100%' border=1>
            <tr bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Action</td>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?= $res['Subject_ID']; ?></td>
                    <td><?= $res['Subject_Code']; ?></td>
                    <td><?= $res['Subject_Name']; ?></td>
                    <td>
                        <a href="forms/editform.php?id=<?= $res['Subject_ID']; ?>">Edit</a>
                        <a href="functions/delete.php?id=<?= $res['Subject_ID']; ?>" 
                        onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>