<!DOCTYPE html>
<html>
<head> 
 <meta charset="UTF-8">
<link rel="stylesheet" href="americanhistory.css" />
<title>
Christmas
 
</title>

</head>
<body>

<div id="wrapper">
<header>
<h1> American Holidays </h1>
</header>
<nav class= underHeader>
<ul>
<li> <a href="home.php">Home</a> </li>
<li> <a href="thanksgiving.php">Thanksgiving</a> </li>
<li> <a href="christmas.php">Christmas</a> </li>
<li> <a href="memorialday.php">Memorial Day</a> </li>
</ul>
</nav>
<div id='activities-image'>

</div>
<main>
<h4>Christmas Day 2017 :</h4>
<?php

 $holiday = (new DateTime("december 25"))->format("Y/m/d");
echo $holiday;

?>

<p> The United States of America has many different traditions and ways that people in celebrate Christmas, because of its multi-cultural nature. Many customs are similar to ones in the UK, France, Italy, The Netherlands, Poland and Mexico.

The traditional meal for Western European families is turkey or ham with cranberry sauce. Families from Eastern European origins favour turkey with trimmings, keilbasi (a Polish sausage), cabbage dishes, and soups; and some Italian families prefer lasagne!

Some Americans use pop-corn threaded on string to help decorate their Christmas Tree! </p>



</main>
</div>
</body>
</html>