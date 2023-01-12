
<?php 

$pencils = 2;
$friendOne = "Jason";
$friendTwo = "Sivan";

$arrayExample = [2, 23, 56, 777, 23];

$bicycles = ["Rivendell", "Bridgestone", "Ebisu", "Trek", "Univega"];

$deskItems = [5, "AirPods", "phone", true, "ink"];

/*
foreach ($arrayExample as $number) {
	echo $number;
};

foreach ($bicycles as $bicycle) {
	echo $bicycle;
};
 */

/*
// for loops
//   setup  testing  incrementing
for($i = 0; $i < 10; $i++) {
	echo "<li>$i</li>";
};
*/

// create a for loop <20

/*
for($number = 0; $number <=20; $number++) {
	echo "<li>$number</li>";
};
*/

// 6 favorite bands and loop through them, showing them on the screens

$favoriteBands = [
	"Benny Sings", 
	"BADBADNOTGOOD", 
	"Chicago", 
	"Khruangbin", 
	"Fleetwood Mac",
	"El Michels Affair"
];

foreach ($favoriteBands as $band) {
	echo "<li>$band</li>";
};

// 8 favorite numbers and loop through them 

$favoriteNumbers = [7, 84, 123, 42, 17, 65, 71, 50];

foreach ($favoriteNumbers as $number) {
	if ($number < 20) {
		echo "<li>$number</li>";
	};
};

//use a for loop and have it count to 34 but only echo the numbers if they aren't 12, 17, 23

for ($i = 0; $i <= 34; $i++) {
	if ($i != 12 and $i != 17 and $i != 23) {
		echo $i . "<br>";
	};
};

// bonus: only echo your favorite numbers if they're under 20.

























