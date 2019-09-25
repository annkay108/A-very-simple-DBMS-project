<?php
    $con = mysqli_connect ('localhost','root','','projectnk');
    function showData(){
        global $con;
        $query = "SELECT * FROM `Details`";
        $run = mysqli_query($con,$query);
        
        if ($run == TRUE){
            ?>
            <div class="neha">
            <table border = 1 width = 80% class="table" bordercolor="white">
            <?php
            while ($data = mysqli_fetch_assoc($run)){
                if ($data['CompanyID'] == $_GET["id"]){
                ?>

                    <tr align = 'center' height = 40>
                        <td><h3>No.</td>
                        <td><h3><?php echo $data['CompanyID']; ?> </td>
                    </tr>
                    <tr align = 'center' height = 40>
                        <td><h3>Name</td>
                        <td><h3><?php echo $data['CompanyName']; ?></td>
                    </tr>
                    <tr align = 'center' height = 40>
                        <td><h3>Establishment date</td>
                        <td><h3><?php echo $data['YOE']; ?></td>
                    </tr>
                    <tr align = 'center' height = 40>
                        <td><h3>Address</td>
                        <td><h3><?php echo $data['Address']; ?></td>
                    </tr>
                    <tr align = 'center' height = 40>
                        <td><h3>Site</td>
                        <td><h3><a href = "<?php echo $data['Website']; ?>"target="_blank"><?php echo $data['Website']; ?></td>
                    </tr>
                    <tr align = 'center' height = 40> 
                        <td><h3>Phone No.</td>
                        <td><h3><?php echo $data['Phone']; ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                </table>
            </div>
            <?php
            }
            
            else
                echo "error!!!!!!!";
        }   
    
    ?>
<html>
    <head>
        <title> IT companies in Nepal </title>
        <link href = "style.css" rel = "stylesheet" type ="text/css">
    </head>
    <body>
        <header>
        <br>
            
            <div class = "row">
            <ul class = "main-nav">
                <li> <a href = "index.php"> HOME </a> </li>
                <li> <a href = "delete.php"> DELETE </a> </li>
                <li> <a href = "username.php"> INSERT DATA </a> </li>
                <li> <a href = "update.php"> UPDATE </a> </li>
                <li> <a href = "fulllist.php"> FULL LIST </a> </li>
                
            </ul>
            </div>
            <div class = "topic">
                <h1> IT COMPANIES IN</h1>
                <h1> NEPAL </h1>
            </div>
        </header>
        <?php showData();?>
    </body>
</html>