<?php
$a=0;
if(!empty($_GET)){
$a=$_GET["destination"];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bus Number</title>
</head>
<body>
    <h1 class="Main-Heading">Virtual Bus Transport</h1>
    <div>
        <form action="bus.php">
        <p>Enter Destination :<br> <input type="text" name="destination" id="destination" placeholder="Type Destination Here" required></p>
         
        <p>Your Bus Number Is : <input type="text" name="" id="" value=
        <?php
        $host='localhost';
        $user='root';
        $password='';
        $database='bus';
        $con=mysqli_connect($host,$user,$password,$database);
        $sql = "SELECT * from buses where destination='$a'";
                $res = mysqli_query( $con, $sql );
                if( mysqli_num_rows($res) > 0 ) {
                    while($row = mysqli_fetch_array($res)){
                        echo(" $row[1]" );
                    }
                }        
                else{
                    print("Call_MTO");
                }       
                mysqli_close($con);
                ?>></p>
			<p><input type="submit" value="Check Now"></p>
        </form>
    </div>
</body>
</html>
