function aa() { return 0;}
const a = function () { return 0;};
const b = (aa) => { return 0; };

// ============= basic Function =============

function greet(name) {
  return `Hello, ${name}`;
}
console.log(greet("Tashin")); // call function:  Hello, Tashin

//  ============== 🔹 Function Expression  ==============

const greet2 = function (name) {
  console.log(`Hi, ${name}`);
};

greet2("Parvez");

//  ============== 🔹 Arrow Function (ES6+)  ==============

const greet3 = (name) => console.log(`Hi, ${name}`);

greet3("RRR"); // Hey, Tashin

//============== 🧠 Callback Function ==============
function processUser(name, callback) {
  return callback(name);
}
const greet5 = (name) => {
  `Welcome, ${name}`;
};

console.log(processUser("Tashin", greet5));
