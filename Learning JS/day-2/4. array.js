// ==================== ARRAY =============================

let fruits = ["apple", "banana", "mango"];

console.log(fruits[0]); // "apple"
console.log(fruits[2]); // "mango"

fruits.push("orange"); // add "orange"

for (let fruit of fruits) {
  console.log(fruit);
}

console.log("=================");

let lastFruit = fruits.pop(); // removes "orange"

for (let fruit of fruits) {
  console.log(fruit);
}

console.log("=================");

console.log("Last fruits name: " + lastFruit);

// =================== softcopy =======================

let teas = ["ca", "coffee", "green tea"];
let softcopyTeas = teas;

console.log(teas);
console.log(softcopyTeas);

teas.pop();
console.log(teas);
console.log(softcopyTeas);
console.log("=================");

// =================== hardcopy =======================

let drinks = ["cococola", "fanta", "pepsi"];
let softcopdrinks = [...drinks];  // method 1
// let softcopdrinks = drinks.slice();  // method 2


console.log(drinks);
console.log(softcopdrinks);

console.log("=================");

drinks.pop();
console.log(drinks);
console.log(softcopdrinks);

console.log("=================");

// ================== concat / merge ========================

let bdCities = ['dhaka', 'jessore'];
let alphaCities = ['aaaa', 'bbbb'];

let allCities = bdCities.concat(alphaCities);

console.log(allCities);
console.log(typeof allCities);
console.log("=================");


allCities = bdCities + alphaCities;

console.log(allCities);
console.log(typeof allCities);
console.log("=================");


allCities = [bdCities , alphaCities];

console.log(allCities);
console.log(typeof allCities);
console.log("=================");


allCities = [...bdCities , ...alphaCities];

console.log(allCities);
console.log(typeof allCities);
console.log("=================");


// ===================================================



let fruitsBasket = ["apple", "banana", "mango"];

fruitsBasket.unshift("grape");
console.log(fruitsBasket); // ["grape", "apple", "banana", "mango"]

fruitsBasket.shift();
console.log(fruitsBasket); // ["apple", "banana", "mango"]



console.log(fruitsBasket.includes("banana")); // true  [includes is casesencitive]
console.log(fruitsBasket.includes("pineapple")); // false


console.log(fruitsBasket.indexOf("mango")); // 2


console.log(fruitsBasket);


let part = fruitsBasket.slice(1, 3);  // [ after this to this ]
console.log(part); // ["banana", "mango"]



console.log(fruitsBasket.join(", ")); // "apple, banana, mango"   -> convert array to string



fruitsBasket.reverse();
console.log(fruitsBasket); // ['mango', 'banana', 'apple']



fruitsBasket.sort();
console.log(fruitsBasket); // ["apple", "banana", "mango"]


// ========================================

let numbers = [3, 12, 1, 5];
numbers.sort((a, b) => a - b); // ascending

// If a - b is negative → a comes first
// If a - b is positive → b comes first
// If a - b is 0 → order remains


console.log(numbers); // [1, 3, 5, 12]


// ========================================


















