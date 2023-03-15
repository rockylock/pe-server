
// H1

var h1 = document.createElement('h1');
h1.textContent = "JavaScript Tricks";
document.body.appendChild(h1);

// Toggle class button
var button = document.createElement('button');
button.textContent = 'Toggle class';
console.log(button);

document.body.appendChild(button);


// Variables
var body = document.querySelector('body');
var toggle = document.querySelector('button');


// Theme toggle function
function toggleTheme() {
	body.classList.toggle('dark');
	h1.classList.toggle('dark');
}

// Event listen: click
toggle.addEventListener('click', toggleTheme);
