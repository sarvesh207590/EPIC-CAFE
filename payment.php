<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "epic";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Connection to the database failed: " . mysqli_connect_error());
    }

    $TrnsId = $_POST['TrnsId'];

    $sql = "INSERT INTO `epic`.`transaction` (`TrnsId`, `date`) VALUES ('$TrnsId', current_timestamp())";

    if ($conn->query($sql) === true) {
        header("location: receipt.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "poppins", sans-serif;
      }
      body {
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding: 20px;
      }
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }
      .box {
        display: flex;
        flex-direction: row;
        position: relative;
        padding: 60px 20px 30px 20px;
        height: 560px;
        width: 350px;
        border-radius: 30px;
        background-color: #ffa4a4; 
        -webkit-backdrop-filter: blur(15px); 
        backdrop-filter: blur(15px); 
        border: 3px solid rgb(0, 0, 0);
        overflow: hidden; 
      }
      .box-payment {
        position: absolute;
        width: 85%;
        left: 27px;
        transition: 0.5s ease-in-out;
      }
      .top-header {
        text-align: center;
        margin: 30px 0;
      }
      .top-header h3 {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 8px;
      }
      .input-group img {
        height: 225px;
        width: 275px;
        margin-left: 10px;
      }
      .input-field {
        margin: 12px 0;
        position: relative;
      }

      .trns label {
        position: absolute;
        left: 20px;
        top: 15px;
        font-size: 15px;
        transition: 0.3s ease-in-out;
      }

      .input-box:focus ~ label,
      .input-box:valid ~ label {
        top: 2px;
        font-size: 10px;
        color: #c12828;
        font-weight: 500;
      }

      .trns-submit:hover {
        background: #ff0000;
        box-shadow: 0px 4px 20px rgb(62, 9, 9);
      }

      .input-box {
        height: 50px;
        font-size: 15px;
        color: #040404;
        border: none;
        border-radius: 10px;
        padding: 7px 45px 0 20px;
        background: #ffffff;
        backdrop-filter: blur(2px);
        outline: none;
      }
      .trns {
        display: flex;
        position: absolute;
        bottom: 85px;
        left: 25px;
        width: 85%;
        height: 50px;
        background: #ffffff;
        backdrop-filter: 10px;
        border-radius: 10px;
        box-shadow: 0px 2px 10px rgb(0, 0, 0);
        margin: 12px 0;
      }

       button {
        position: absolute;
        top: 220px;
        border-radius: 10px;
        border: 1px solid;
        transition: 100ms ease-in;
        height: 50px;
        width: 100px;
        background-color: #ff00ff;
        margin: -150px;
        }

        button:hover {
        transform: scale(1.1);
        background-color: #bf80ff;
        color: #0101d5;
        } 

    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="box-payment" id="payment">
                <form action="" method="post" id="pay">
                    <div class="top-header">
                        <h3>Please Scan & Pay!</h3>
                        <small>You are One step away from your meal</small>
                    </div>
                    <div class="input-group">
                        <img src="img/QR_code.jpg" alt="QR Code">
                    </div>
                </form>
            </div>
            <div class="trns">
                <form action="" method="post">
                    <input type="text"  name ="TrnsId" class="input-box" id="TransId" pattern="[0-9]{12}"  required />
                    <label for="TransId">Transaction Id (12 digits)</label>
                    <button type="submit" onclick="displayAlert()">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
  function displayAlert() {
            var Id = document.getElementById('TransId').value;
            var Id2=Id.toString();
           if (Id.length==12) {
                alert("Your Payment is Successful!\n Visit Epic Cafe in 15 minutes to receive your order \n Click on Ok For Receipt\n Take a Screenshot or Print of RECEIPT");
               
            } else {
                alert('Please write Transaction Id ');
            }
        }
  </script>
</html>
