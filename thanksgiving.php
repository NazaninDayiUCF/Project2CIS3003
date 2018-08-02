<!DOCTYPE html>
<html>
<head> 
 <meta charset="UTF-8">
<link rel="stylesheet" href="americanhistory.css" />
<title>
Thanksgiving

</title>

</head>
<body>

<div id="wrapper">
<header>
<h1> American Holidays</h1>
</header>
<nav class = underHeader>
<ul>
<li> <a href="home.php">Home</a> </li>
<li> <a href="thanksgiving.php">Thanksgiving</a> </li>
<li> <a href="christmas.php">Christmas</a> </li>
<li> <a href="memorialday.php">Memorial Day</a> </li>
</ul>
</nav>
<div id='accommodations-image'>

</div>
<main>

<h2> Thanksgiving Day in the United States</h2>
<h4>Thanksgiving Day 2017 :</h4>
<?php

$holiday = (new DateTime("november fourth thursday"))->format("Y/m/d");
echo $holiday;

?>
<h3> What Do People Do? </h3>


<p>Thanksgiving Day is traditionally a day for families and friends to get together for a special meal. The meal often </br>includes a turkey, stuffing, potatoes, cranberry sauce, gravy, pumpkin pie, and vegetables. Thanksgiving Day is a </br>for many people to give thanks for what they have.

Thanksgiving Day parades are held in some cities and</br> towns on or around Thanksgiving Day. Some parades or festivities also mark the opening of the Christmas</br> shopping season. Some people have a four-day weekend so it is a popular time for trips and to visit family and friends. </P>
<h3> What is a traditional Thanksgiving dinner menu? </h3>
<ul id="the_ul">

 <li>   Perfect Roast Turkey </li>
 <li>   Cheese Grits and Corn Pudding. </li>
 <li>   Roasted Sweet Potato Casserole with Praline </li>
 <li>  Green Beans with Bacon </li>
 
</ul>
</div>
</body>
</html>