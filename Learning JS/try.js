const prompt = require("prompt-sync")(); // Only works in Node.js

let tasks = [];
let running = true;

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

function addTask() {
  const taskName = prompt("Enter task name: ");
  if (taskName.trim() !== "") {
    tasks.push({ name: taskName, completed: false });
    console.log("✅ Task added.");
  } else {
    console.log("⚠️ Task name cannot be empty.");
  }
}

function showTasks() {
  if (tasks.length === 0) return console.log("📭 No tasks found.");
  console.log("\n📋 All Tasks:");
  tasks.forEach((task, i) => {
    console.log(`${i + 1}. ${task.name} - ${task.completed ? "✅ Done" : "❌ Pending"}`);
  });
}

function completeTask() {
  const index = parseInt(prompt("Enter task number to mark complete: ")) - 1;
  if (tasks[index]) {
    tasks[index].completed = true;
    console.log("🎉 Task marked as complete.");
  } else {
    console.log("❌ Invalid task number.");
  }
}

function showPending() {
  const pending = tasks.filter(t => !t.completed);
  if (pending.length === 0) return console.log("🎉 All tasks are completed!");
  console.log("\n⏳ Pending Tasks:");
  pending.forEach((task, i) => console.log(`${i + 1}. ${task.name}`));
}

function showCompleted() {
  const completed = tasks.filter(t => t.completed);
  if (completed.length === 0) return console.log("😔 No tasks completed yet.");
  console.log("\n✅ Completed Tasks:");
  completed.forEach((task, i) => console.log(`${i + 1}. ${task.name}`));
}

function deleteTask() {
  const index = parseInt(prompt("Enter task number to delete: ")) - 1;
  if (tasks[index]) {
    tasks.splice(index, 1);
    console.log("🗑️ Task deleted.");
  } else {
    console.log("❌ Invalid task number.");
  }
}

// Main loop
while (running) {
  showMenu();
  const choice = prompt("Enter your choice: ");

  switch (choice) {
    case "1":
      addTask();
      break;
    case "2":
      showTasks();
      break;
    case "3":
      completeTask();
      break;
    case "4":
      showPending();
      break;
    case "5":
      showCompleted();
      break;
    case "6":
      deleteTask();
      break;
    case "0":
      running = false;
      console.log("👋 Exiting To-Do list. Have a great day!");
      break;
    default:
      console.log("⚠️ Invalid choice. Try again.");
  }
}
