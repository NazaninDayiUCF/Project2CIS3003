<!DOCTYPE html>
<html>
<head> 
 <meta charset="UTF-8">
<link rel="stylesheet" href="americanhistory.css" />
 <title>
Memorial Day

</title>

</head>
<body>


<div id='wrapper'>
<header role="banner">
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

<div id='memorial-image'> 
</div>

<main>
<h4> Memorial  Day 2017 :</h4>
<?php

$holiday = (new DateTime("Last monday of May"))->format("Y/m/d");
echo $holiday;

?>
<h2> History of Memorial</h2>
<p><span class = resort>Memorial Day </span> Memorial Day is an American holiday, observed on the last Monday of May, honoring the men and women who died while serving in the U.S. military. Originally known as Decoration Day, it originated in the years following the Civil War and became an official federal holiday in 1971. Many Americans observe Memorial Day by visiting cemeteries or memorials, holding family gatherings and participating in parades. Unofficially, it marks the beginning of the summer season.  </p>



</main>
</div>
</body>

</html>