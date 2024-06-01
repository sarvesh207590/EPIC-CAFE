<?php
// Database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "epic";

$connect = mysqli_connect($server, $username, $password, $database);
if (!$connect) {
    die("Connection to the database failed: " . mysqli_connect_error());
}

// Fetching data from the database
$sql = "SELECT * FROM `order` ORDER BY time DESC LIMIT 1"; // Assuming the latest order is the one we want to display
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "No order found.";
}

// to fetch data id  from transaction
$sql2 = "SELECT * FROM `transaction` ORDER BY Date DESC LIMIT 1"; 
$result2 = mysqli_query($connect, $sql2);
if (mysqli_num_rows($result2) > 0) //confirm karel ki ekach row select zalay
//is used to retrieve number of rows returned by sql querry
{
    $row2= mysqli_fetch_assoc($result2);
    //used to fetch single row result set returned by sql query
} else {
    echo " Transaction Id not found";
}
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Receipt for Epic Cafe</title>
</head>
<body>
<div class="container">
    <div class="receipt-header">
        <h1>Receipt for Epic Cafe</h1>
    </div>
    <div class="receipt-details">
    <p><span>Receipt No:</span><b> <?php echo $row['sno']; ?></b></p>
        <p><span>Customer Name:</span> <?php echo $row['name']; ?></p>
        <p><span>Food Item:</span> <?php echo $row['food_item']; ?></p>
        <p><span>Quantity:</span> <?php echo $row['quantity']; ?></p>
        <p><span>Price:</span> <?php echo$row['price']."Rs"; ?></p>
        <p><span>Status:</span> <?php echo $row['status']; ?></p>
        <p><span>Mobile Number:</span> <?php echo $row['contact']; ?></p>
        <p><span>Transaction Id:</span> <?php echo $row2['TrnsId']; ?></p>
    </div>
    <div class="button-container">
        <button class="button" onclick="printReceipt()">Print Receipt</button>
        <p>Thank you For Visiting........</p>
    </div>
</div>

<!-- javascript receipt chi print kadhanyasathi -->
<script>
function printReceipt() {
    window.print();
}
</script>

<!-----------CSS------------------ -->
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #ffa4a4;  
       margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.receipt-header {
    text-align: center;
    margin-bottom: 20px;
}

.receipt-header h1 {
    color: #333;
    font-size: 24px;
}

.receipt-details {
    margin-bottom: 20px;
}

.receipt-details p {
    margin: 5px 0;
    font-size: 16px;
}

.receipt-details p span {
    font-weight: bold;
}

.button-container {
    text-align: center;
}

.button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #45a049;
}
</style>
</body>
</html>
