<?php

function city_location($AmericanCity) {


switch ($AmericanCity) {


case "Boston":


return "Massachusetts";


break;


case "Chicago":


return "Illinois";


break;


case "Los Angeles":


return "California";


break;


case "Miami":


return "Florida";


break;


case "New York":


return "New York";


break;


default:


return "United States";


break;


}


}


echo "<p>", city_location("Boston"),
"</p>";

echo "<p>", city_location("Chicago"),
"</p>";

echo "<p>", city_location("Los Angeles"),
"</p>";
