// let student = {
//   name: "Tashin",
//   greet: function () {
//     console.log(`Hello, I am ${this.name}`);
//   },
// };

// student.greet(); // Hello, I am Tashin

// console.log(student.__proto__);



function Person(name) {
    this.name = name;
}

// Adding method to the prototype
Person.prototype.greet = function () {
  console.log(`Hi, I'm ${this.name}`);
};

const p1 = new Person("Tashin");
p1.greet(); // Hi, I'm Tashin







