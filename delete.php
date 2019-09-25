<html>
    <head>
        <title> deletedata </title>
        <link href = "style.css" rel = "stylesheet" type ="text/css">
    </head>
    <body style="background-color:#03285c;">
    <div class = "row1">
            <ul class="main-nav">
                <li> <a href = "index.php"> HOME </a> </li>
                <li> <a href = "username.php"> INSERT DATA </a> </li>
                <li> <a href = "update.php"> UPDATE </a> </li>
                <li> <a href = "fulllist.php"> FULL LIST </a> </li>
            </ul>
    </div>
    <div class="inputt">
        <br><br><br><br><br><br><br><br><br><br>
        <form action = "delete.php" method = "post">
            <table>
                <tr> 
                    <td><h4> *Company's ID: </td><td><input type ="number" class="type" name="Company_ID" required = "required"/></td>
                </tr>
                <tr> 
                    <td><input width="500" type ="submit" name="submit" class="submit" value = "DELETE"/></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if(isset($_POST['submit']))
    { 
        $Company_id = $_POST['Company_ID'];

        $con = mysqli_connect('localhost', 'root','','projectnk');

        if ($con)
            echo "<h3>Connected<br><br>";

        $query = "DELETE FROM `Details` WHERE `CompanyID` = '$Company_id'";
    
        $run = mysqli_query($con,$query);

        $query2 = "DELETE FROM `company` WHERE `Company_id` = '$Company_id'";
        
        $run2 = mysqli_query($con,$query2);

        if ($run == TRUE && $run2 = TRUE)
            echo "<h3>DELETED SUCCESSFULLY<br>";
        else
            echo "<h3>Error<br>";
    }
    ?>
    <br><br><br><br><br><br><br>
    </body>

</html>
