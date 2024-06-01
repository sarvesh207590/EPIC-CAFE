<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beverages</title>
  </head>
  <header>
  <h1 >Beverages</h1>
</header>
<!-------------------------- MENU ITEMS ------------------------>
<div class="menu_align">


  <div class="menu-item">
  <center><img src="img/tea.jpg" alt="Beverage 1" class="item-image"></center>
  <div class="item-details">
  <h2 class="item-title">Masaledar Chai</h2>
   <p class="item-price"><b>10 Rs/-</b></p>
  <button class="order-now-btn"  onclick="order('Tea',10)"onclick="orderNow()">Book Now</button>
  </div>
  </div>
 
<div class="menu-item">
<center><img src="img/cofee.jpg" alt="Beverage 1" class="item-image"></center>
<div class="item-details">
<h2 class="item-title">Cofee</h2>
<p class="item-price"><b>10 Rs/-</b></p>
<button class="order-now-btn"  onclick="order('Cofee',10)">Book Now</button>
</div>
</div>

<div class="menu-item">
<center><img src="img/falooda.jpg" alt="Beverage 1" class="item-image"></center>
<div class="item-details">
<h2 class="item-title">Falooda</h2>
<p class="item-price"><b>50 Rs/-</b></p>
<button class="order-now-btn"  onclick="order('Falooda',50)">Book Now</button>
</div>
</div>

  <div class="menu-item">
  <center><img src="img/mango_juice.jpg" alt="Beverage 1" class="item-image"></center>
  <div class="item-details">
  <h2 class="item-title">Mango juice</h2>
  <p class="item-price"><b>40 Rs/-</b></p>
  <button class="order-now-btn" onclick="order('Mango juice',40)">Book Now</button>
  </div>
  </div>

  <div class="menu-item">
  <center><img src="img/watermelon_juice.jpg" alt="Beverage 1" class="item-image"></center>
  <div class="item-details">
  <h2 class="item-title">Watermelon juice</h2>
  <p class="item-price"><b>30 Rs/-</b></p>
  <button class="order-now-btn"  onclick="order('Watermelon juice',30)">Book Now</button>
  </div>
  </div>

  <div class="menu-item">
  <center><img src="img/pinapple_juice.jpg" alt="Beverage 1" class="item-image"></center>
  <div class="item-details">
  <h2 class="item-title">Pinapple juice</h2>
  <p class="item-price"><b>40 Rs/-</b></p>
  <button class="order-now-btn"  onclick="order('Pinapple juice',40)">Book Now</button>
  </div>
  </div>

  <div class="menu-item">
  <center><img src="img/orange_juice.jpg" alt="Beverage 1" class="item-image"></center>
  <div class="item-details">
  <h2 class="item-title">Orange juice</h2>
  <p class="item-price"><b>40 Rs/-</b></p>
  <button class="order-now-btn"  onclick="order('Orange juice',40)">Book Now</button>
  </div>
  </div>

  <div class="menu-item">
  <center><img src="img/chocolate.jpg" alt="Beverage 1" class="item-image"></center>
  <div class="item-details">
  <h2 class="item-title">Chocolate Milk Shake</h2>
  <p class="item-price"><b>50 Rs/-</b></p>
  <button class="order-now-btn" onclick="order('Chocolate Milkshake',50)">Book Now</button>
  </div>
  </div>

 
</div>

<!-------------CSS-------------->
<style>

  header {
    background-color: #333;
    border:1px solid black;
    border-radius: 5px;
    color: #fff;
    padding: 10px;
    text-align: center;
  }
      
body {
        font-family: 'Arial', sans-serif;
        background-color: #9e9797;
        margin: 0;
        padding: 0;
      }

.menu_align{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
      }
  
.menu-item {
        background-color: #fff; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 300px;
        margin: 10px;
        transition: transform 0.3s ease-in-out;
        border: 2px solid transparent;
      }
  
.menu-item:hover{
      border: 1px solid rgb(0, 0, 0);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      transition: 0.5s ease-in-out
    }

.item-image {   
    object-fit: cover;
    width: 275px;
    max-width: 100%;
    height: 182px;
    border:2px solid black;
    border-radius: 5px;
    margin-top: 10px ;
    margin-left:10px ;
    margin-right: 10px;
      }
  
.item-details {
        padding: 20px;
        }

.item-title {
        font-size: 24px;
        margin: 10px 0;
        color: #333;
      }
  
.item-price {
        font-size: 18px;
        color: #00000087;
      }
  
      .order-now-btn
     {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        color: #fff;
        border: none;
        border-radius: 5px;
        margin: 0.8px;
        transition: background-color 0.3s;
      }
  
      .add-to-cart-btn{
        visibility: hidden;
      }
  
      .order-now-btn {
        background-color: #24ca1f;
      }
  
     .order-now-btn:hover {
        background-color: #b93a29;
        
      }
  
  /* Media Queries */
      @media(min-width:1200px){
    .menu_align{
      display: grid;
    grid-template-columns: auto auto auto auto ; 
    }
  }
  @media(min-width:900px)and(max-width:1199px){
    .menu_align{
      display: grid;
    grid-template-columns: auto auto auto ; 
    }
  }
  @media(min-width:660px)and(max-width:899px){
    .menu_align{
      display: grid;
    grid-template-columns: auto auto ; 
    }
  }
  @media(max-width:599px){
    .menu_align{
      display: grid;
    grid-template-columns: auto ; 
    }
  }
</style>

  <!------------- JAVASCRIPT--------- -->
<script>
function order(name, price) {
            sessionStorage.setItem('name', name);
            sessionStorage.setItem('price', price);
            window.location.href="http://localhost/New%20folder/IP%20Project%20m/IP%20Project/order.php"; 
              }
	</script>


</body>
</html>
