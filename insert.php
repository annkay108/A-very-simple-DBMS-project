<html>
    <head>
        <title> insertdata </title>
        <link href = "style.css" rel = "stylesheet" type ="text/css">
    </head>
    <body style="background-color:#03285c;">
    <div class = "row1">
            <ul class="main-nav">
                <li> <a href = "index.php"> HOME </a> </li>
                <li> <a href = "delete.php"> DELETE </a> </li>
                <li> <a href = "username.php"> INSERT DATA </a> </li>
                <li> <a href = "update.php"> UPDATE </a> </li>
                <li> <a href = "fulllist.php"> FULL LIST </a> </li>
            </ul>
    </div>
    <br><br><br><br><br><br><br>
    </body>

<?php
    $Company_name = $_POST['Company_name'];
    $No_of_employees = $_POST['No_of_employees'];
    $logo = $_POST['logo'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $Website = $_POST['Website'];
    $YOE = $_POST['YOE'];

    $con = mysqli_connect('localhost', 'root','','projectnk');

    if ($con)
        echo "<h3>connected<br>";

    $query = "INSERT INTO `company`(`Company_name`,`logo`,`No_of_emp`) VALUES ('$Company_name','$logo','$No_of_employees')";
    
    $run = mysqli_query($con,$query);

    if ($run == TRUE)
        echo "<h3>Data insert Successfully<br>";
    else
        echo "<h3>Error<br>";

    $querys = "SELECT `Company_id` FROM `company` Where `Company_name` = '$Company_name'";
    $runs = mysqli_query($con,$querys);

    $data = mysqli_fetch_assoc($runs);
    $Company_id = $data['Company_id'];

    $query1 = "INSERT INTO `Details`(`CompanyID`,`CompanyName`,`YOE`,`Address`,`Website`,`Phone`) VALUES ('$Company_id','$Company_name','$YOE','$Address','$Website','$Phone')";

    $run1 = mysqli_query($con,$query1);

    if ($run1 == TRUE)
        echo "<h3>Details insert Successfully<br>";
    else
        echo "<h3>Error<br>";
        
?>
<br><br><br><br><br><br><br>
</html>