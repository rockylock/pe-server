

// A lesson in effective scoping

const taskApp = {

	// initialize tasks and IDs
	tasks: [],
	taskIDMaker: 0,

	// functions 
	print: function(event = "") {
		console.log(`---${event}`);
		console.log("tasks", this.tasks);
	}, 

	add: function(item) {
		const task = {
			id: `a${this.taskIDMaker++}`, // create unique ID
			content: item, // set content to input
		};

		this.tasks = [...this.tasks, task]; // create a new array
		this.print(`Added ${item}`); // log event

	},

	remove: function(id) {
		this.print(`Removed ${this.tasks[id].content}`); // log event
		this.tasks.splice(id, 1); // remove item
	},

	update: function() {

	},

	complete: function(id) {
		this.tasks[id].complete = true;
		this.print(`Completed ${tasks[id].content}`);
	}
};


// todo app

const todoApp = {

	todos: [],
 	idIncrementor: 0,
	
	print(event = "") {
		console.log(`--- ${event}`);
		console.log("todos", this.todos);
	},

	add(item) {
		const todo = {
			id: `a${this.idIncrementor++}`,
			content: item,
		};

		//this.todos.push(todo);
		this.todos = [...this.todos, todo]; // create a new array, rather than overwrite
		this.print(`Added ${item}`);
		// debugger
	},

	remove(index) {
		this.todos.splice(index, 1);
		this.print(`Removed ${this.todos[index].content}`);
	}, 

	update(index, content) {
		var listNumber = index + 1;
		this.todos[index].content = content;

		// this.todos.splice(index, 1, content); //replace 1 element at index index to item
		this.print(`Updated item ${this.listNumber} to ${this.todos[index]}`);
	},

	complete(index) {
		this.todos[index].complete = true;
		this.print(`Completed ${this.todos[index].content}`);
	}

	// search for string
	// if found, share index location
	// if not, state not found
	
	// locate: function(searchElement, fromIndex) {
	// 	//console.log(this.todos);

	// 	var locateTask = this.todos.indexOf(searchElement, fromIndex);
	// 	var checkTask = console.log(locateTask);

	// 	if (locateTask == -1) {
	// 		this.print(`${searchElement} not found or NaN.`);
	// 	};
	//}
};

todoApp.add("Eat some food");
todoApp.add('test');
todoApp.add("Take a walk");
todoApp.add("Run the dishwasher");
todoApp.add("Get gas");
todoApp.remove(1);
todoApp.complete(1)
todoApp.update(0, "updated");





/* 
Possible projects
- machines online/offline
- users in lab

*/
























