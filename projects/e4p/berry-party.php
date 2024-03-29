
<?php 

/* 
Challenge:

We'll have 4 guests, 15 berries per person; 26 berries per package.
How many berries are in a package? how many packages do we need? 
What's the price per box? What's the total?
*/

$guests = 11;

$host = "Ivy";
$people = $guests + 1;
$berries = 26; 

$boxCost = 4.89; 
$berriesPerBox = 16; 

$totalBerries = $people * $berries;
$boxQuantity = ceil($totalBerries / $berriesPerBox); // Rounds up to include the right amount of boxes.
$totalCost = "$" . number_format($boxQuantity * $boxCost, 2, ".", ","); // Set result to include two decimal places. 

if ( $guests == 1 ) {
    $singularPlural = "guest";
    } else {
    $singularPlural = "guests";
}


$message = $guests . " " . $singularPlural . " will be attending the party. Each guest should have $berries berries. We'll need $totalBerries berries for the party, including the host, $host. There are $berriesPerBox berries in each package, with each package costing $" . $boxCost . ". So, we should purchase " . $boxQuantity . " boxes, for a total of " . $totalCost . ".";

echo $message;


function singleOrPlural($count, $word) {
    if ($count == 1) {
        return $word;
    } else {
        return $word . "s";
    }
}

echo singleOrPlural(3, "guest");


