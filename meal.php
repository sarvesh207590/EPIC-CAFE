
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meal</title>
  </head>
  <body>
    <header>
      <h1>Meal</h1>
    </header>
<!-- -----------------MENU ITEMS --------------------->
    <div class="menu-container">
      <div class="food-item">
        <img src="img/biryani.jpg" alt="Food 1" class="food-image" />
        <div class="food-details">
          <h2 class="food-title">Chiken Biryani</h2>
          <p>Chicken Biryani is a savory chicken and rice dish that includes
            layers of chicken, rice, and aromatics that are steamed together.</p>
          <p>
            <b style="font-size: large"><p>150rs /-
            <span style="font-size: smaller; font-weight: lighter">(for one plate)</span>
          </p></b>
          </p>
          <button class="order-now-btn" onclick="order('Chicken Biryani',150)">
            Book Now
          </button>
        </div>
      </div>

      <div class="food-item">
        <img src="img/veg_biryani.jpg" alt="Food 2" class="food-image" />
        <div class="food-details">
          <h2 class="food-title">Veg Biryani</h2>
          <p class="food-description">
            Vegetable Biryani is an aromatic rice dish made with basmati rice,
            mix veggies, herbs & biryani spices.</p>
          <p><b style="font-size: large"><p>130rs /-<span style="font-size: smaller; font-weight: lighter">(for one plate)</span>
          </p></b>
          </p>
          <button class="order-now-btn" onclick="order('Veg Biryani',130)">
            Book Now
          </button>
        </div>
      </div>

      <div class="food-item">
        <img src="img/maharastrian_thali.jpg" alt="Food 2" class="food-image" />
        <div class="food-details">
          <h2 class="food-title">Maharastrian_thali</h2>
          <p class="food-description">
            maharastrian thali include authentic maharastrian dishes such as
            masale bhat,sol kadhi,bhakari,batata bhaji,varan,gulab
            jamun,papad,loncha,mirchi,koshimbir.
          </p>
          <p>
            <b style="font-size: large"><p>150rs /-
            <span style="font-size: smaller; font-weight: lighter">(for one plate)</span></p></b>
          </p>
          <button
            class="order-now-btn"
            onclick="order('Maharashtrian Thali',150)">
            Book Now
          </button>
        </div>
      </div>

      <div class="food-item">
        <img src="img/south_indian.jpg" alt="Food 2" class="food-image" />
        <div class="food-details">
          <h2 class="food-title">South indian Thali</h2>
          <p class="food-description">
            South Indian Thali includes chapati/paratha, plain rice, bisi bele
            bath, sambhar, a veg stew dish, fresh curd and papadum along with
            various vegetable preparations .</p>
          <p> <b style="font-size: large"><p> 150rs /-<span style="font-size: smaller; font-weight: lighter" >(for one plate)</span>
          </p></b>
          </p>
          <button
            class="order-now-btn"
            onclick="order('South Indian Thali',150)">
            Book Now
          </button>
        </div>
      </div>

      <div class="food-item">
        <img src="img/dal_chaval.jpg" alt="Food 2" class="food-image" />
        <div class="food-details">
          <h2 class="food-title">Dal Chaval and Sabji</h2>
          <p class="food-description">
            Dal is a basic lentil curry, made with cooked lentils in a curry or
            soup-like consistency, with aromatics like onions, tomatoes and
            serve with basmati rice.
          </p>
          <p>
            <b style="font-size: large"><p>80rs /-
                <span style="font-size: smaller; font-weight: lighter">(for one plate)</span>
              </p></b>
          </p>
          <button class="order-now-btn" onclick="order('Dal chaval',80)">
            Book Now
          </button>
        </div>
      </div>

      <div class="food-item">
        <img
          src="img/maharastrian_chickenthali.jpg"
          alt="Food 2"
          class="food-image"/>
        <div class="food-details">
          <h2 class="food-title">Maharastrian Chiken thali</h2>
          <p class="food-description">
            maharastrian chicken thali includes tambda pandhara
            rassa,solkadhi,basmati rice,2 chapatis,chiken sukka,egg curry
            ,onion,papad.
          </p>
          <p>
            <b style="font-size: large"
              ><p>
                250rs /-
                <span style="font-size: smaller; font-weight: lighter">(for one plate)</span>
              </p></b>
          </p>
          <button
            class="order-now-btn"
            onclick="order('Maharashtrian Chiken Thali',250)">
           Book Now
          </button>
        </div>
      </div>
    </div>
<!---------------- CSS ------------>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #988f8f;
        margin: 0;
        padding: 0;
      }

      header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
      }

      .menu-container {
        background-color: rgb(114, 119, 111);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
      }

      .food-item {
        margin-bottom: 20px;
        margin-right: 10px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: white;
        margin: 10px;
        overflow: hidden;
        width: 420px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        border: 1.2px solid transparent;
      }
      .food-item:hover{
      border: 1.2px solid black;
	  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
	        transition: 0.5s ease-in-out;
    }
      .food-image {
        width: 100%;
        height: 270px;
        object-fit: cover;
        border-radius: 8px;
      }

      .food-title {
        font-size: 24px;
        margin: 10px 0;
      }

      .food-description {
        margin-bottom: 10px;
      }

      .order-now-btn,
      .add-to-cart-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        color: #fff;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s;
      }

      .order-now-btn {
        background-color: #2fd03a;
      }

      .order-now-btn:hover {
        background-color: #b99329;
      }
      .food-item p {
        color: #666;
        margin-bottom: 15px;
      }

      @media (min-width: 1330px) {
        .menu-container {
          display: grid;
          grid-template-columns: auto auto auto;
        }
      }
      @media (min-width: 880px) and(max-width:1329px) {
        .menu-container {
          display: grid;
          grid-template-columns: auto auto;
        }
      }

      @media (max-width: 879px) {
        .menu-container {
          display: grid;
          grid-template-columns: auto;
        }
        .food-item {
          width: 380px;
        }
      }
    </style>

    <!--------------JAVASCRIPT--------------- -->
    <script>
      function order(name, price) {
        sessionStorage.setItem("name", name);
        sessionStorage.setItem("price", price);
      window.location.href="http://localhost/New%20folder/IP%20Project%20m/IP%20Project/order.php";
      }
    </script>
  </body>
</html>
