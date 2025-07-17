console.log("tashin");
process.stdout.write("Parvez");

let name1 = "RRR"; // can be changed later
const pi = 3.14; // cannot be changed
var oldWay = "Avoid"; // outdated, avoid using

console.log(name1);

/*

comment 2

*/

//====================== Primitive Data Types ======================

let name = "TashinParvez"; // string
let age = 22; // number
let isStudent = true; // boolean
let emptyValue = null; // null
let notAssigned; // undefined
let scores = [90, 85, 77]; // array

//================ BigInt ================

let num = 10;
let big = 20n; // bigint

// console.log(num + big); // ❌ Error: Cannot mix BigInt and other types
console.log(BigInt(num) + big); // ✅ Convert number to BigInt

//====================== nonPrimitive Data Types ======================

//================ objects ================

let person = { name: "TashinParvez", age: 22 }; // object
console.log(person["name"]);

let student = {
  name: "Tashin",
  age: 22,
  isStudent: true,
};

console.log(student);
console.log(typeof student);

console.log(student.name); // "Tashin"
console.log(student["age"]); // 22

student.university = "UIU"; //===========  add new  ===========
student.age = 23; // update

console.log("university name : " + student["university"]); // UIU

//================== Functions Inside Objects  ==================

let car = {
  brand: "Toyota",
  speed: 120,
  drive: function () {
    console.log("Driving at " + this.speed + " km/h");
  },
};

car.drive(); // Driving at 120 km/h

//================== String  ==================

let a = "AA";
let b = "BB";

console.log(a + b);

let c = a + " " + b;
console.log(c);

let d = `${a} ${b}`;

console.log(d);
console.log(typeof d);

// ================  DATE ==================
let date = new Date();
date = `${date.getDate()} - ${date.getMonth()} - ${date.getFullYear()}`;
console.log(date);


