<?php
    //includes database connection file
    include_once('../dbConnection/mysqlconfig_connection.php');
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];

        //checks for empty fields
        if(empty($code) || empty($name)){
            if(empty($code)){
?>
                <font color="red">Subject Code field is empty.</font><br>
<?php
            }
            if(empty($name)){
?>
            <font color="red">Subject Name field is empty.</font><br>
<?php
            }
?>
            <br><a href="../forms/editform.php?id=<?= $id; ?>">Go Back</a>
<?php
        }
        else{
            //updates the table
            //$result = mysqli_query($dbc, "UPDATE tblsubjects SET Subject_Code=$code, Subject_Name=$name WHERE Subject_ID=$id;");
            $result = mysqli_query($dbc, "UPDATE tblsubjects SET subject_code='$code', subject_name='$name' 
                        WHERE subject_id=$id;");
            //redirects to the page
            header('location: ../index.php');
        }
    }
?>