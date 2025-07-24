const prompt = require("prompt-sync")(); // Only works in Node.js

let task = [];

function addTask() {}
function ViewTasks() {}
function completedTask() {}
function deleteTask() {}
function showOnlyCompletedTask() {}
function showOnlyPendingTask() {}

function showMenu() {
  console.log("\n📝 What would you like to do?");
  console.log("1. Add new task");
  console.log("2. Show all tasks");
  console.log("3. Mark task as completed");
  console.log("4. Show pending tasks");
  console.log("5. Show completed tasks");
  console.log("6. Delete a task");
  console.log("0. Exit");
}

function addTask(taskName, status) {
  task.push({ name: taskName, completed: status });
}

function showAllTask() {
  for (let atask of task) {
    console.log(atask[0] + " " + atask[1]);
  }
}

function markTaskAsComplete() {}
function showPendingTask() {}
function deleteTask() {}

let n = 1;
while (n) {
  showMenu();
  n = Number(prompt("Enter your choice: "));

  switch (n) {
    case 1:
      addTask();
      break;
    case 2:
      showAllTask();
      break;
    case 3:
      markTaskAsComplete();
      break;
    case 4:
      showPendingTask();
      break;
    case 5:
      deleteTask();
      break;
    case 0:
      break;
  }
}
