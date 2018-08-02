<?php
$holidays = array(
    'memorialday' => 'memorialday.php',
    'christmas' => 'christmas.php',
    'thanksgiving' => 'thanksgiving.php',
);

$day = isset($_POST['name']) ? strtolower($_POST['name']) : '';


if ( ! isset($holidays[$day]))
{
    echo "Wrong Holiday name. Currently accepted names are: memorialday, christmas,thanksgiving";
}
else{
	$link = $holidays[$day];
	header("Location: $link");
	exit();
	
}


?>