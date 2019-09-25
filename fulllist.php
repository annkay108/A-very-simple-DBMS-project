<?php
    $con = mysqli_connect ('localhost','root','','projectnk');
    function showData(){
        global $con;
        $query = "SELECT * FROM `company`";
        $run = mysqli_query($con,$query);
        
        if ($run == TRUE){
            ?>
            <div class="neha">
            <table border = 1 width = 80% class = "table" bordercolor="white">
            <tr align = 'center'>
                <th><h3>No.</h3></th>
                <th><h3>Company Name</th>
                <th><h3>No of Employees</th>
                <th><h3>Logo</th>
            </tr>
            <?php
                while ($data = mysqli_fetch_assoc($run)){
            ?>
                <tr align = "center">
                    <td><h3><?php echo $data['Company_id']; ?> </td>
                    <td><h3><a href = "view.php?id=<?php echo $data['Company_id']; ?>"><?php echo $data['Company_name']; ?></a></td>
                    <td><h3><?php echo $data['No_of_emp']; ?></td>
                    <td><img src = <?php echo $data['logo']; ?> alt = "IT companies" title = "company logo" height="65" width="300"></td>
                </tr>
            <?php
                }
            ?>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
<?php
        }
        
        else
            echo "error!!!!!!!";
    }   

?>
<html>
    <head>
        <title> FULL LIST </title>
        <link href = "style.css" rel = "stylesheet" type ="text/css">
    </head>
    <body>
    <div class = "row1">
            <ul class="main-nav">
                <li> <a href = "index.php"> HOME </a> </li>
                <li> <a href = "delete.php"> DELETE </a> </li>
                <li> <a href = "username.php"> INSERT DATA </a> </li>
                <li> <a href = "update.php"> UPDATE </a> </li>
            </ul>
    </div>
    <br><br><br><br>
    <?php showData();?> 
    </body>
</html>