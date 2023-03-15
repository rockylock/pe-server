
var myVehicles = [
	"Marcia",
	"Sally",
	"Bud",
	"Trekkie",
	"Blue",
	"Josephine",
	"Filbert"
];

var vehicleInfoExample = {
	name: "Marcia",
	type: "wagon",
	year: "1983",
	wheels: 4, 
	status: "current",
};

var vehicleInfo = [
	{
		name: "Bird",
		type: "coupe",
		year: "1990",
		wheels: 4,
		status: "sold",
	},
	{
		name: "Nova",
		type: "road bike",
		year: "1986",
		wheels: 2,
		status: "sold",
	},
	{
		name: "Marcia",
		type: "wagon",
		year: "1983",
		wheels: 4, 
		status: "current",
	},
	{
		name: "Sally",
		type: "truck",
		year: "1965",
		wheels: 4, 
		status: "current",
	},
	{
		name: "Bud",
		type: "motorcycle",
		year: "1971",
		wheels: 2, 
		status: "current",
	},
	{
		name: "Grant",
		type: "touring bike",
		year: "1984",
		wheels: 2, 
		status: "stolen",
	},
	{
		name: "Truckee",
		type: "touring bike",
		year: "1988",
		wheels: 2, 
		status: "current",
	},
	{
		name: "Blue",
		type: "cargo bike",
		year: "2016",
		wheels: 2, 
		status: "stolen",
	},
	{
		name: "Josephine",
		type: "city bike",
		year: "1969",
		wheels: 2, 
		status: "sold",
	},
	{
		name: "Filbert",
		type: "wagon",
		year: "1971",
		wheels: 4, 
		status: "sold",
	},
];


// LOOP OPTION 1

/*
// Function
function printItem(item, index, fullArray) {
	var itemNumber = index + 1; 
	console.log("index slot " + itemNumber + ":", item);
}

// Loop
myVehicles.forEach(printItem);
*/

// LOOP OPTION 2

// Alternate: nested function and loop
/*
myVehicles.forEach( function(item, index, fullArray) {
	var itemNumber = index + 1; 
	console.log("index slot " + itemNumber + ":", item);
});
*/

/*
vehicleInfo.forEach( function(item) {
	console.log("Name:", item.name);
	console.log("Type:", item.type);
	console.log("Wheels:", item.wheels);
	console.log("Status:", item.status); 
	console.log("");
});
*/

/*
vehicleInfo.forEach( function(item) {

	// if the vehicle's current,
	if (item.status == "current") {
		// put it on the list
		console.log(item.name + ":", item.status);
	}

	if (item.status == "stolen") {
		console.log(item.name + ":", item.status + "!");
	}

	if (item.status != "current" && item.status != "stolen") {
		console.log(item.name + ":", item.status);
	}
});
*/

// ARRAY FILTERS

var currentVehicles = vehicleInfo.filter( function(item) {
	return item.status == "current";
});

var soldVehicles = vehicleInfo.filter( function(item) {
	return item.status == "sold";
});

var stolenVehicles = vehicleInfo.filter( function(item) {
	return item.status == "stolen";
});

// Create a function that accepts an array and generates markup.
// Must include heading and create a list of the items. 

function vehicleSection(items, heading) {
	var h3 = document.createElement("h3");
	h3.classlist = "page-section vehicles";
	h3.textContent = heading;
	document.body.appendChild(h3);

	var ul = document.createElement("ul");

	items.forEach( function(item) {
		// return item.status == "current"; Nope...
		var li = document.createElement("li");
		li.textContent = item.name + ", the " + item.year + " " + item.type;
		document.body.appendChild(li);
		ul.appendChild(li);
	});
		
	document.body.appendChild(ul);	
}

 vehicleSection(currentVehicles, "Current Vehicles");

 vehicleSection(soldVehicles, "Vehicles I've sold");

 vehicleSection(stolenVehicles, "Vehicles lost to theft :(");



let num = [5, 9, 12, 24, 67]

let sum = num.reduce(function (accumulator, curValue) {

  return accumulator + curValue

}, 0)

console.log(sum)













































