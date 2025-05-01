//============ Variable ============

var callName = "Tashin";
console.log(callName);

var firstName = "Tashin",
  lastName = "Parvez";

console.log("TAHSIN " + "Parvez");

console.log(firstName, lastName);

const age = 20;

console.log(age);

// age += 21;  // cant able to change it

console.log(age);

let person = {
  name: "tashin",
  age: 20,
};

console.log(person);

person.name = "Safin";

console.log(person);

person["name"] = "Rafin";

console.log(person);

let selection = "name";
person[selection] = "select";

console.log(person);

// ================== ARRAY

let numbers = [1, 2, 3, 23, 34, 3, 24, 1231, 2, 12];

console.log(numbers[0], numbers[2]);

// ================= Function

function greet(personName) {
  console.log("HI I'M first function created by " + personName);
}

greet("tashin");

function greet2(personName, Age) {
  console.log("HI I'M second function created by " + personName + " " + Age);
}

greet2("tashin", 20);
greet2("tashin");

function greet2(personName, Age, id) {
  console.log(
    "HI I'M third function created by " + personName + " " + Age + " " + id
  );
}

greet2("tashin");
greet2("tashin", 20);
greet2("tashin", 20, 11221437);

function square(num) {
  return num * num;
}

let xSquare = square(12);

console.log(xSquare);




