<html>
    <head>
        <title> updatedata </title>
        <link href = "style.css" rel = "stylesheet" type ="text/css">
    </head>
    <body style="background-color:#03285c;">
    <div class = "row1">
            <ul class="main-nav">
                <li> <a href = "index.php"> HOME </a> </li>
                <li> <a href = "delete.php"> DELETE </a> </li>
                <li> <a href = "username.php"> INSERT DATA </a> </li>
                <li> <a href = "fulllist.php"> FULL LIST </a> </li>
            </ul>
    </div>
    <div class="inputt">
        <br><br><br><br><br><br><br><br><br><br>
        <form action = "update.php" method = "post">
            <table>
                <tr> 
                    <td><h4> *Company's ID: </td><td><input type ="number" class="type" name="Company_ID" required = "required"/></td>
                </tr>
                <tr> 
                    <td><h4> Company's Name: </td><td><input type ="text" class="type" name="Company_name"/></td>
                </tr>
                <tr> 
                    <td><h4> Enter the url of your logo: </td><td><input type ="text" class="type" name="logo"/></td>
                </tr>
                <tr> 
                    <td><h4> No of employees: </td><td><input type ="number" name="No_of_employees" class="type"/></td>
                </tr>
                <tr> 
                    <td><h4> Address: </td><td><input type ="text" class="type" name="Address" /></td>
                </tr>
                <tr> 
                    <td><h4> Phone: </td><td><input type ="number" class="type" name="Phone"/></td>
                </tr>
                <tr> 
                    <td><h4> Website: </td><td><input type ="text" class="type" name="Website"/></td>
                </tr>
                <tr> 
                    <td><input width="500" type ="submit" name="submit" class="submit" value = "UPDATE"/></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if(isset($_POST['submit']))
    { 
        $Company_id = $_POST['Company_ID'];
        $Company_name = $_POST['Company_name'];
        $logo = $_POST['logo'];
        $No_of_employees = $_POST['No_of_employees'];
        $Address = $_POST['Address'];
        $Website = $_POST['Website'];
        $Phone = $_POST['Phone'];
    

        $con = mysqli_connect('localhost', 'root','','projectnk');

        if ($con)
            echo "<h3>Connected";?>
        <br>
        <br>
    <?php

        if (isset($_POST['Company_name']) && !empty($_POST["Company_name"])){
            $querya = "UPDATE `company` SET `Company_name` = '$Company_name' WHERE `Company_id`= $Company_id";
            $run = mysqli_query($con,$querya);
            if ($run == TRUE)
            echo "<h3>Company's name updated Successfully";
            else
            echo "<h3>Error";
        } 

        if (isset($_POST['logo']) && !empty($_POST["logo"])){
            $queryb = "UPDATE `company` SET `logo` = '$logo' WHERE `Company_id`= $Company_id";
            $run = mysqli_query($con,$queryb);
            if ($run == TRUE)
            echo "<h3>logo updated Successfully";
            else
            echo "<h3>Error";
        } 

        if (isset($_POST['No_of_employees']) && !empty($_POST["No_of_employees"])){
            $queryc = "UPDATE `company` SET `No_of_employees` = '$No_of_employees' WHERE `Company_id`= $Company_id";
            $run = mysqli_query($con,$queryc);
            if ($run == TRUE)
            echo "<h3>Number of employees updated Successfully";
            else
            echo "<h3>Error";
        } 

        if (isset($_POST['Address']) && !empty($_POST["Address"])){
            $query1 = "UPDATE `Details` SET `Address` = '$Address' WHERE `CompanyID`= $Company_id";
            $run = mysqli_query($con,$query1);
            if ($run == TRUE)
            echo "<h3>Address updated Successfully";
            else
            echo "<h3>Error";
        } 

        if (isset($_POST['Website']) && !empty($_POST["Website"])){
            $query2 = "UPDATE `Details` SET `Website` = '$Website' WHERE `CompanyID`= $Company_id";
            $run = mysqli_query($con,$query2);
            if ($run == TRUE)
            echo "<h3>Website link updated Successfully";
            else
            echo "<h3>Error";
        } 

        if (isset($_POST['Phone']) && !empty($_POST["Phone"])){
            $query3 = "UPDATE `Details` SET `Phone` = '$Phone' WHERE `Company_id`= $Company_id";
            $run = mysqli_query($con,$query3);
            if ($run == TRUE)
            echo "<h3>Phone updated Successfully";
            else
            echo "<h3>Error";
        }        
        
    }
    ?>
    <br><br><br><br><br><br><br>
    </body>

</html>
