<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "epic";

        $conn = mysqli_connect($server, $username, $password, $database);
        if(!$conn){
            die("connection to this database is failed due to ".mysqli_connect_error());
        }
        //echo "connect to db";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message =$_POST["message"];
        $sql= "INSERT INTO `contact` (`name`, `email`, `message`, `time`) VALUES ('$name', '$email', '$message', current_timestamp())";
        //echo $sql;
        if($conn->query($sql) == true){
            echo "";
        }
        else{
            echo "Error : $sql <br> $conn->error";
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <section class="about">
            <h2>About Epic Cafe:</h2>
            <p>Epic cafe is a delightful haven for students like ourselves,
                offering a diverse menu that caters to various tastes.Vibrant
                atmosphere create a perfect setting for socializing and enjoying a
                delicious meal. At Epic cafe, we believe the best dishes are the ones that remind
                you of your mother's food's taste. A portion of great food should
                make you feel like you are wrapped in a warm blanket. While we
                prepare our food fast, we develop the flavor slowly. Our dough rises
                over the night. That's why every bun taste like heaven.
                The college canteen is more than just a place to eat it's a hub of
                energy and camaraderie. The cozy seating coupled with prompt
                service, makes it an inviting space.The affordable prices are an
                added bonus for students on a budget.
            </p>
        </section>
        <section class="contact-info">
            <h2>Our Location</h2>
            <p>Dr.K.M.Vasudevan Pillai Campus</p>
            <p>Sector-16, New Panvel-410206</p>
        </section>
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p>Email: <a href="mailto:pce@mes.ac.in">pce@mes.ac.in</a></p>
            <p>Tel: <a href="tel:02227482133">022-27482133</a> / <a href="tel:02227456030">022-27456030</a></p>
        </section>
        <section class="members">
            <h2>Our Team</h2>
            <div class="member">
                <img src="img/sarvesh_image.jpg" alt="Member 1">
                <h3>Sarvesh Mokal</h3>
                <p>Contact: <a href="tel:1234567890">9370061529</a></p>
            </div>
            <div class="member">
                <img src="img/yash.jpg" alt="Member 2">
                <h3>Yash Patil</h3>
                <p>Contact: <a href="tel:9876543210">9096221703</a></p>
            </div>
            <div class="member">
                <img src="img/harsh.jpg" alt="Member 3">
                <h3>Harsh Peke</h3>
                <p>Contact: <a href="tel:1112223333">9665476943</a></p>
            </div>
            <div class="member">
                <img src="img/rutik.png" alt="Member 4">
                <h3>Prathamesh Nahar</h3>
                <p>Contact: <a href="tel:4445556666">7420974888</a></p>
            </div>
        </section>
        <section class="query-form">
            <h2>Have a Query?</h2>



        <!-- ////// -->
            <form id="contactForm" method="POST" action="contact.php" >
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required  >
                </div>
                <div class="form-group">
            <label for="message">Message:</label>

            <textarea type="text" id="message" name="message" rows="5" required></textarea>
        </div>
                <!-- <div class="form-group">
                    <label for="message">Message:</label>
                    <input type="text" id="message" name="message" required></input>
                </div> -->
                <button type="submit" displayAlert()>Submit</button >
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pillai College of Engineering</p>
    </footer>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 20px;
}

h1 {
    margin: 0;
}

main {
    padding: 20px;
}




.contact-info h2, .members h2, .query-form h2 {
    color: #007bff;
}

.members {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.member {
    text-align: center;
    margin: 20px;
}

.member img {
    height:150px;
    width: 150px;
    border-radius: 50%;
    margin-bottom: 10px;
}

form {
    max-width: 500px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 20px;
}

form label {
    display: block;
    font-weight: bold;
}

form input[type="text"],
form input[type="email"],
form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form textarea {
    height: 100px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

footer {
    background-color: #f8f9fa;
    padding: 10px;
    text-align: center;
}

</style>

<script>
document.getElementById("contactForm").addEventListener("submit", function(event){
  event.preventDefault(); 
  alert("Thank You FOR YOUR RESPONSE!");
});

</script>
</html>
