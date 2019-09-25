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
                <li> <a href = "update.php"> UPDATE </a> </li>
                <li> <a href = "fulllist.php"> FULL LIST </a> </li>
            </ul>
    </div>
    <div class="inputt">
        <br><br><br><br><br><br><br><br><br><br>
        <form action = "insert.php" method = "post">
            <table>
                <tr> 
                    <td> <h4>Company's Name: </td><td><input type ="text" class="type" name="Company_name" required = "required"/></td><br>
                </tr>
                <tr> 
                    <td> <h4>Enter the url of your logo: </td><td><input type ="text" class="type" name="logo" required = "required"/></td>
                </tr>
                <tr> 
                    <td> <h4>No of employees: </td><td><input type ="number" name="No_of_employees" class="type" required = "required"/></td>
                </tr>
                <tr> 
                    <td><h4> Address: </td><td><input type ="text" class="type" name="Address" required = "required"/></td>
                </tr>
                <tr> 
                    <td><h4> Phone: </td><td><input type ="number" class="type" name="Phone" required = "required"/></td>
                </tr>
                <tr> 
                    <td><h4> Website: </td><td><input type ="text" class="type" name="Website" required = "required"/></td>
                </tr>
                <tr> 
                    <td><h4> Year Of Establishment: </td><td><input type ="number" class="type" name="YOE" required = "required"/></td>
                </tr>
                <tr> 
                    <td><input width="500" class="submit" type ="submit" name="submit" value = "INSERT"/></td>
                </tr>
            </table>
        </form>
    </div>
    <br><br><br><br><br><br><br>
    </body>

</html>