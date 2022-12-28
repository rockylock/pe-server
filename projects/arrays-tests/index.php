<style>
	
body {
	background: hsla(0, 0%, 90%, 1);
	color: hsl(240, 100%, 25%);
}

</style>

<?php

// $myStuff = ["cars", "books", true, false, "bikes", "Oakland"];

// $favorite_thing = $myStuff[1]; 

// echo $favorite_thing;

$key = [
	"manufacturer" => "Primus", 
	"material" => "Brass",
	"lock_type" => "Schlage",
	"keyway" => "C (SC1)",
	"can_duplicate" => false,
	"transponder" => false,
	"key_type" => "common doors",
	"length" => 2.23,
	"thickness" => 0.093,
	"on_primary_keyring" => true,
];

?>

<!-- <p>My favorite thing at the moment is <?=$favorite_thing?></p> -->

<p>My key is made by <?=$key["manufacturer"]?>. It's made of <?=$key["material"]?>.</p>

<p>This key is meant for <?=$key["lock_type"]?> type <?=$key["keyway"]?> keyways.</p>

<p>
<?php 

if ($key["can_duplicate"]) {
	echo "It can be copied/duplicated without permission. ";
} else {
	echo "It CANNOT be copied or duplicated. ";
}

if ($key["transponder"]) {
	echo "This key has a transponder, ";
} else {
	echo "This key doesn't have a transponder, ";
}

?>

and can be used on <?=$key["key_type"]?>.</p>

























