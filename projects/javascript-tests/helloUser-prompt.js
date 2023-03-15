
// Exercise 1: Saying Hello

/*
STEPS
=====

create a variable with no value.
prompt user for their name.
provide a way for users to input their response.  
provide a way for users to send their response. 
give feedback if no response is given upon delivery.
record response upon delivery. 
return a greeting with their response: "Hello, nice to meet you, [response]." 
*/

function helloUser() {
    var userName = prompt('What is your name?');
    
    if (userName) {
        var message = "Hello, " + userName + ", it's nice to meet you.";
        alert(message);    
    } else {
        alert("Please enter your name.");
        helloUser();
    }
}