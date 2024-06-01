<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="snacks.css">
    <title>Snacks</title>
</head>
<body>
<header>
	
    	<h1 >Snacks</h1>
</header>
<section>
    	<div class="menu_align">

		<!-- --------MENU ITEMS---- -->
    	<div class="menu-item">
     	<img src="img/samosa.jpg"   >   	 
       	<h2>Samosa</h2>
        <p>A deep fried pastry with a spiced filling usually with potatoes,spices and herbs</p>
        <p><b style="font-size: large;"><p>20rs /-  <span style="font-size:smaller;font-weight: lighter">(for one piece)</span></b></p>
        <button class="order-button border"onclick="order('Samosa',20)">Book Now</a></button>
        </div>


    	<div class="menu-item">
        	<img src="img/vadapav.jpg" >
        	<h2>Vadapav</h2>
        	<p>spicy mashed potatoes deep-fried in chickpea batter and pav.</p>
        	<p><b style="font-size: large;"><p>15rs /-  <span style="font-size:smaller;font-weight: lighter">(for one piece)</span></b></p>
        	<button class="order-button" onclick="order('Vadapav',15)">Book Now</button>
    	</div>


    	<div class="menu-item">
        	<img src="img/idli.jpg">
        	<h2>idli</h2>
        	<p>soft steamed savory cake made from fermented rice</p>
        	<p><b style="font-size: large;"><p>35rs /-  <span style="font-size:smaller;font-weight: lighter">(for three piece)</span></b></p>
        	<button class="order-button"onclick="order('Idli',35)">Book Now</button>	
    	</div>
  	 
    	<div class="menu-item">
        	<img src="img/dhokla.jpeg">
        	<h2>Dhokla</h2>
        	<p>savoury cake made out of bengal gram flour and is steamed to get fluffy.</p>
        	<p><b style="font-size: large;"><p>30rs /-  <span style="font-size:smaller;font-weight: lighter">(for four piece)</span></b></p>
        	<button class="order-button" onclick="order('Dhokla',30)">Book Now</button> 	
    	</div>
   	 
    	<div class="menu-item">
    	   <img src="img/poha.jpg" >     	 
      	   <h2>Poha</h2>
            <p>flattened rice that is steam cooked with onions, spices and herbs</p>
            <p><b style="font-size: large;"><p>30rs /-  <span style="font-size:smaller;font-weight: lighter">(for one plate)</span></b></p>
            <button class="order-button"  onclick="order('Poha',30)">Book Now</button>	
    	</div>


    	<div class="menu-item">
            <img src="img/Upama.jpg" >     	 
          	<h2>Upma</h2>
            <p> a flavorful, tasty made with semolina flour , a few lentils, nuts, vegetables, herbs and spices.</p>
            <p><b style="font-size: large;"><p>20rs /-  <span style="font-size:smaller;font-weight: lighter">(for one plate)</span></b></p>
            <button class="order-button" onclick="order('Upma',20)">Book Now</button>	
        </div>

        <div class="menu-item">
            <img src="img/misal_pav.jpg" >     	 
            <h2>Misal pav</h2>
            <p> popular Maharashtrian street food of usal topped with onions,farsan  and served with pav and lemon</p>
            <p><b style="font-size: large;"><p>40rs /-  <span style="font-size:smaller;font-weight: lighter">(for one plate)</span></b></p>
            <button class="order-button" onclick="order('Misal_pav',40)">Book Now</button>	
        </div>

        <div class="menu-item">
            <img src="img/dosa.jpg" >     	 
            <h2>Dosa</h2>
            <p> South Indian, fermented crepe made from rice batter and black lentils</p>
            <p><b style="font-size: large;"><p>50rs /-  <span style="font-size:smaller;font-weight: lighter">(for one plate)</span></b></p>
            <button class="order-button"onclick="order('Dosa',50)">Book Now</button>
		</div>

    </div>
    	
</section>  
    	
<!------------- CSS------------->
<style>
body {
	font-family: 'Arial', sans-serif;
	margin: 0;
	padding: 0;
	background-color: #988f8f;
}


header {
	background-color: #333;
	border-radius: 5px;
	color: #fff;
	border: 1px solid black;
	text-align: center;
	display: block;
}

section {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	padding: 20px;
}

.menu-item {
	background-color: #fff;
	border: 1px solid #ddd;
	border-radius: 7px;
	margin: 10px;
	padding: 15px;
	width: 300px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	transition: box-shadow 0.3s ease;
}
.menu-item:hover{
      border: 1px solid rgb(0, 0, 0);
      box-shadow: 0 15px 15px rgba(0, 0, 0, 0.1);
	        transition: 0.5s ease-in-out;
    }

.menu-item img {
	width: 275px;
	max-width: 100%;
	height: 182px;
	border-radius: 5px;
	margin-bottom: 10px;
}

.menu-item h2 {
	color: #333;
	margin-bottom: 10px;
}

.menu-item p {
	color: #666;
	margin-bottom: 15px;
}

.order-button {
	background-color: #1edc2e;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: background-color 0.3s ease;
}

.menu_align{
	display:flex;
     flex-wrap: wrap;
    justify-content: space-evenly;	
}

.order-button:hover {
	background-color: #e55d34;
	border:1.5px solid black;
}

.order-button {
	border:1.5px solid transparent;
}

@media(min-width:1280px){
	.menu_align{
		display: grid;
	grid-template-columns: auto auto auto auto; 
	}
}

@media(min-width:960px)and(max-width:1279px){
	.menu_align{
		display: grid;
	grid-template-columns: auto auto auto; 
	}
}

@media(min-width:640px)and(max-width:959px){
	.menu_align{
		display: grid;
	grid-template-columns: auto auto ; 
	}

}
@media(max-width:639px){
	.menu_align{
		display: grid;
	grid-template-columns: auto ; 
	}

}
</style>
<!--------------------------JAVASCRIPT----------------->
<script>
	function order(name, price) {
            sessionStorage.setItem('name', name);
            sessionStorage.setItem('price', price);
            window.location.href="http://localhost/New%20folder/IP%20Project%20m/IP%20Project/order.php";   
        }
	</script>
</html>