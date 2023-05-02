
function print(note = "") {
	console.log(`--- ${note}`);
	console.log('todos: ', todos);
}

const todos = [];
var count = 0;

// Take a todo, add it to the array and update
function add(content) {
	const todo = {
		id: `a${count++}`,
		content: content,
	};

	todos.push(todo);
	print(`Added ${content}`);
}

// Remove a todo by its ID and print
function remove(id) {
	print (`Removed ${todos[id].content}`);
	todos.splice(id, 1);
}

// Complete a todo and print
function complete(id) {
	todos[id].complete = true;
	print(`Completed ${todos[id].content}`);	
}

// Add todos
add("Sweep & mop");

add("Prep breakfast");

add("Collect closet measurements");

complete(0);

// Remove second todo
remove(1);

add("Polish wheelcap");


