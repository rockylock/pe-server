
/*
Maintenance checklist app
===
I want to be able to input the:
- maintenance task
- priority
- parts needed (?)
- date repair completed
- mileage on completion date
- enter notes

- prompt user for maintenance task name (text)
- prompt user for priority (radio)
- prompt user for parts needed (option to add a field for multiple parts)
- allow user to submit task

Upon completion:
- allow user to select task
 - allow user to enter date of completion
 - field for user to enter vehicle mileage 
 - enter or edit notes

=== 

 User flow

 - Signup/Login page
 - email input
 	document.createElement
 	element.innerHTML = ``


*/

document.body.innerHTML = `
<h1>Heading</h1>

<form action="">
	<label for="e">Enter your email</label>

	<input id="e" type="email" value="a@b.com">

	<button id="login" type="submit">Login</button>
</form>
`;

// Upon click, log click, log form submission, 
// generate new dashboard page

window.addEventListener("click", function(myEvent) {
	// myEvent.preventDefault();
	console.log(myEvent.target.id);

	// check if ID exists
	if (myEvent.target.id === "login") {
		console.log("It's a login button!");

		//Dashboard page
		document.body.innerHTML = `
		<h1>Dashboard</h1>

		<form>
			<label for="v">Enter your vehicle</label>

			<input id="v" type="text" placeholder="Honda" value="Honda">

			<button type="submit">Add vehicle</button>
		</form>
		`;
	}
});

window.addEventListener("submit", function(myEvent) {
	myEvent.preventDefault();
	console.log("form submitted");
});



// Constructor app

function Maintenance(system, task) {

	this.system = system;
	this.task = task;

	this.repair = function() {
		alert(`${this.system}: ${this.task}`);
	}
}

const flexDiscs = new Maintenance("driveline", "replace driveshaft flex discs");
const motorMounts = new Maintenance("engine", "replace motor mounts");
const motorShocks = new Maintenance("engine", "replace engine dampers");
const modulator = new Maintenance("driveline", "replace transmission vacuum modulator");
const hvacVacuum = new Maintenance("vacuum", "track down HVAC vacuum leak"); 
const lockVacuum = new Maintenance("vacuum", "locate door lock vacuum leak");

// flexDiscs.repair();
// motorMounts.repair();
// motorShocks.repair();

// console.log(flexDiscs.task);



