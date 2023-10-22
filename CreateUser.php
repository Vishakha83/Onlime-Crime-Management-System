<!DOCTYPE html>
<html>
    <head>
        <title>Untitled Document</title>
    </head>

    <body>
        <?php
        $Name = $_POST['txtName'];
        $Address = $_POST['txtAdd'];
        $City = $_POST['cmbCity'];
        $Email = $_POST['txtEmail'];
        $Mobile = $_POST['txtMobile'];
        $Gender = $_POST['cmbGender'];
        $Station = $_POST['cmbStation'];
        $BirthDate = $_POST['txtDate'];
        $path1 = $_FILES["txtFile"]["name"];
        $UserName = $_POST['txtUserName'];
        $Password = $_POST['txtPassword'];
        move_uploaded_file($_FILES["txtFile"]["tmp_name"], "Documents/" . $_FILES["txtFile"]["name"]);
        // Establish Connection with MYSQL
        $con = mysql_connect("localhost", "root");
        // Select Database
        mysql_select_db("cms", $con);
        // Specify the query to Insert Record
        $sql = "insert into user_tbl(Name,Address,City,Mobile,Email,Gender,BirthDate,UserName,Password,Station_Name,VerificationProof) values('" . $Name . "','" . $Address . "','" . $City . "','" . $Mobile . "','" . $Email . "','" . $Gender . "','" . $BirthDate . "','" . $UserName . "','" . $Password . "','" . $Station . "','" . $path1 . "')";
        // execute query
        mysql_query($sql, $con);
        // Close The Connection
        mysql_close($con);

        echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
        ?>
    </body>
</html>
