<?php
    //includes database connection file
    include_once('../dbConnection/mysqlconfig_connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <?php
            if(isset($_POST['Submit'])){
                $code = $_POST['code'];
                $name = $_POST['name'];

                //checks empty fields
                if(empty($code) || empty($name)){
                    if(empty($code)){
        ?>
                        <font color="red">Subject Code field is empty.</font><br>
        <?php
                    }
                    if(empty($name)){
        ?>
                        <font color="red">Subject name field is empty.</font><br>
        <?php
                    }
        ?>
                    <br><a href="javascript:self.history.back();">Go Back</a>
        <?php
                }
                else {
                    //if all fields are filled (not empty)
                    //insert data to database
                    $result = mysqli_query($dbc, "INSERT INTO tblsubjects(subject_code, subject_name) 
                                VALUES('$code', '$name');");
                    
                    //display success meassage
        ?>
                    <font color="green">Data added successfuly.</font>
                    <br><a href="../index.php">View Result</a>
        <?php
                }
            }
        ?>
    </body>
</html>