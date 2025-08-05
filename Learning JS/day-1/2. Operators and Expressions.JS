//====================  Operators and Expressions  ====================

let a = 10,
  b = 3;

console.log("a + b = " + (a + b)); // 13
console.log("a - b = " + (a - b)); // 7
console.log("a * b = " + a * b); // 30
console.log("a / b = " + a / b); // 3.3333333333333333333
console.log("a % b = " + (a % b)); // 1

console.log("a / b = " + (a / b).toFixed(2)); // 3.33

//====================  👨‍⚖️ Comparison Operators  ====================

console.log(5 > 3); // true
console.log(5 == "5"); // true (loose equality)
console.log(5 === "5"); // false (strict equality)

if (5 == "5") {
  console.log("YES");
}

if (5 === "5") {
  console.log("YES");
}

//====================  ====================

let p = 2 ** 4;

console.log("P = " + p);

p++;
console.log("P = " + p);

p--;
console.log("P = " + p);

// ==================== ARRAY =============================

let fruits = ["apple", "banana", "mango"];

console.log(fruits[0]); // "apple"
console.log(fruits[2]); // "mango"

fruits.push("orange"); // add "orange"
fruits.pop(); // removes "orange"

for (let fruit of fruits) {
  console.log(fruit);
}

// ======================== ARRAY  of Objects =============================

let students = [
  { name: "Tashin", gpa: 3.91 },
  { name: "Oishi", gpa: 3.6 },
  { name: "Ariyan", gpa: 3.95 },
];

for (let i = 0; i < students.length; i++) {
  console.log("name: " + students[i].name + "  GPA :" + students[i].gpa);
}


// ======================== ternary operator =============================
//               condition ? valueIfTrue : valueIfFalse;


let age = 10;
let canVote = age > 10 ? "yes" : "no";









