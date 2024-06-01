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
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql= "INSERT INTO `epic`.`signup1` (`username`, `email`, `password`, `date`) VALUES ('$username', '$email', '$password', current_timestamp())";
        //echo $sql;
        if($conn->query($sql) == true){
            echo "Signup Successful Please Login ";
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
      .box-register {
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
      .input-group {
        width: 100%;
      }
      .input-field {
        margin: 12px 0;
        position: relative;
      }

      .input-box {
        width: 100%;
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
      .input-field label {
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

      .check {
        margin-right: 8px;
        width: 14px;
      }
      .input-submit {
        width: 100%;
        height: 50px;
        font-size: 15px;
        font-weight: 500;
        border: none;
        border-radius: 10px;
        background: #fa6161;
        color: #fff;
        box-shadow: 0px 4px 20px rgb(62, 9, 9);
        cursor: pointer;
        transition: 0.4s;
      }
      .input-submit:hover {
        background: #ff0000;
        box-shadow: 0px 4px 20px rgb(62, 9, 9);
      }
      .forgot {
        text-align: center;
        font-size: 13px;
        font-weight: 500;
        margin-top: 40px;
      }
      .forgot a {
        text-decoration: none;
        color: #000;
      }
      .switch {
        display: flex;
        position: absolute;
        bottom: 50px;
        left: 25px;
        width: 85%;
        height: 50px;
        background: #ffffff;
        backdrop-filter: 10px;
        border-radius: 10px;
        box-shadow: 0px 2px 10px rgb(0, 0, 0);
        overflow: hidden;
      }
      .switch a {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        font-weight: 500;
        color: #000;
        text-decoration: none;
        width: 50%;
        height: 50px;
        border-radius: 10px;
        z-index: 10;
      }
      #btn {
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 145px;
        height: 50px;
        background: #ff4545;
        border-radius: 10px;
        box-shadow: 2px 0px 12px #000000;
        transition: 0.5s ease-in-out;
      }
      .eye-area {
        position: absolute;
        top: 25px;
        right: 25px;
      }
      .eye-box {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
      }
      i {
        position: absolute;
        color: #000000;
        cursor: pointer;
        .box {
          margin: 0 5px;
        }
        #btn {
          position: absolute;
          width: 153px;
        }
      }
    </style>
</head>
<body>
    <div class="container">
      <div class="box">
        <div class="box-register" id="register">
          <form action ="signup.php" method="post" id="registerForm">
            <div class="top-header">
              <h3>Sign Up, Now!</h3>
              <small>We are happy to have you with us.</small>
            </div>
            <div class="input-group">
              <div class="input-field">
                <input
                  type="text"
                  name = "username"
                  class="input-box"
                  id="regUsername"
                  required
                />
                <label for="regUsername">Username</label>
              </div>
              <div class="input-field">
                <input type="text" name ="email" class="input-box" id="regEmail" required />
                <label for="regEmail">Email address</label>
              </div>
              <div class="input-field">
                <input
                  type="password"
                  name = "password"
                  class="input-box"
                  id="regPassword"
                  required
                />
                <label for="regPassword">Password</label>
              </div>
              <div class="input-field">
                <input
                  type="submit"
                  class="input-submit"
                  value="Sign Up"
                  required
                />
              </div>
            </div>
          </form>
        </div>
        <div class="switch">
          <a href="#" class="register" onclick="register()">Register</a>
          <a href="login.php" class="login active" onclick="login()">Login</a>
          <div class="btn-active" id="btn"></div>
        </div>
      </div>
    </div>
</body>
</html>