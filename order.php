<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "epic";

    $connect = mysqli_connect($server, $username, $password, $database);
    if (!$connect) {
        die("Connection to the database failed: " . mysqli_connect_error());
    }
    else{
        echo"connection was successful";
    }
    
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $food_item = $_POST['food_item'];
    $status = $_POST['status'];

    // price *quantity
    if (isset($_POST['price']) && isset($_POST['quantity'])) {
        // Retrieve item and quantity from POST data
        $item = $_POST['price'];
        $quantity = $_POST['quantity'];
        // Perform the multiplication
        $price = $item * $quantity;
    }
    $sql = "INSERT INTO `order` (food_item, price, name, contact, time,status,quantity) VALUES ('$food_item', '$price', '$name', '$contact', current_timestamp(),'$status',$quantity)";
 $result= mysqli_query($connect,$sql);
if ($result)
        echo "Make a payment ";
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
if (isset($_POST['submit'])) {
    // Check your condition here
    $condition = true; // You should replace this with your actual condition

if ($condition) {
        // Redirect to receipt.php
        header("Location: payment.php");
        exit; // Stop further execution
    } else {
        // Condition not met, handle accordingly
        echo "Condition not met.";
    }
}
    mysqli_close($connect);
    exit;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
             background-color: #343a40;
            /* background-color: #26e443; */
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        form {
            max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.4);
            border: 3px solid rgb(0, 0, 0);
        background-color: #ffa4a4; 
        -webkit-backdrop-filter: blur(15px); 
        backdrop-filter: blur(15px); 
        border: 2px solid rgb(0, 0, 0);
        overflow: hidden; 
       
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #26e443;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #d23c1a;
        }

.status-options {
    display: flex;
    gap: 10px;
}
.select{
    gap:0px;
}
.payment-option {
        display: inline-block;
        margin-right: 20px; /* Adjust margin as needed */
    }

    .payment-option img {
        width: 40px; /* Adjust image size as needed */
        height: auto;
    }
.book_now{
    margin-bottom: 30px;
    font-size: 24px;

}
.input-box{
    background-color: rgb(242, 215, 215);
}
</style>
    <title>Book Now Form</title>
</head>
<body>
 <form action="order.php" id="orderForm"  method="POST"  >
   <center> <div class="book_now"><b>BOOK NOW!</b></div></center>

    <input type="hidden" id="foodItemInput" name="food_item">
    <input type="hidden" id="priceInput" name="price">
     <p>Food Item:<b><span id="name" ></span></p> </b> <!--  taking from menu -->
     <p>Quantity: <input type="number" id="quantity"name="quantity" oninput="calculateTotal()" class="input-box" required></p>
     <p>Total Price:<b><span id="totalPrice" ></span>Rs</p> </b>   <!-- price X quantity-->
     <p>Your Name:</p> <input type="text" id="fullName" name="name"class="input-box" required >
     <p>Contact Number:</p><input type="tel" id="contactNumber"  pattern="[0-9]{10}" placeholder="Enter 10-digit number" name="contact"class="input-box" required>

        Choose who are you:
        <div class="status-options">
            <input type="radio" id="student" name="status" value="student" class="select">
            <label for="student">Student</label>

            <input type="radio" id="faculty" name="status" value="faculty" class="select">
            <label for="faculty">Faculty</label>
        
            <input type="radio" id="other" name="status" value="other" class="select">
            <label for="other">Other</label>
        </div>
        
    <span> <p>PAYMENT:</p></span>
    <div class="payment-option">
        <img src="img/paytm.png" alt="paytm">
    </div>
    
    <div class="payment-option">
        <img src="img/gpay.png" alt="Gpay">
    </div>
    
    <div class="payment-option">
        <img src="img/phone_pay.png" alt="PayPal">
    </div>

    </div>
    <center><button type="submit" name="submit" onclick="displayAlert()">Proceed To Pay </button></center>
    </form>
<!-------------------JAVASCRIPT--------------- -->
    <script>
               
window.onload = function() {
    var foodItem = sessionStorage.getItem('name');
    var price = sessionStorage.getItem('price');

    document.getElementById('foodItemInput').value = foodItem;
    document.getElementById('priceInput').value = price;
};  
    //jar all fields fill nahi kelyatar
    function displayAlert() {
            var quantity = document.getElementById('quantity').value;
            var fullName = document.getElementById("fullName").value;
            var contactnumber=document.getElementById("contactNumber").value; //mistake is in contactNumber
            var status = document.querySelector('input[name="status"]:checked');
            var Id2=contactnumber.toString();

           if (quantity && fullName &&status&&contactnumber) {
            if(Id2.length==10){
            alert("Your order is Ready to Book ! \n Make a payment to Confirm your Order");
            }
            else{
                alert("write a Valid Contact number")
            }
            }
             else {
                alert('Please fill all the fields ');
            }
        }
        // menu item chi price and value print karanyasathi
        document.getElementById('name').innerText = sessionStorage.getItem('name');
        document.getElementById('price').innerText = sessionStorage.getItem('price');

   //price x quantity
        function calculateTotal() {
            var price = sessionStorage.getItem('price');
            var quantity = document.getElementById('quantity').value;
            var totalPrice = price * quantity;
            document.getElementById('totalPrice').innerText = totalPrice;
        }
        calculateTotal(); 
    </script>
</body>
</html>
