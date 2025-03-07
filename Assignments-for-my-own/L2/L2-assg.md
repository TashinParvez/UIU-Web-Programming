# 📌 HTML & CSS Assignment – Week 1 & 2

This assignment will test your understanding of **HTML structure, forms, images, and CSS styling**.

---

## ✅ 🔹 Assignment: Build a Simple Registration Page

### **Requirements:**

1️⃣ **Create an HTML file (`index.html`)** that includes:

- A **title** (`<title>`) and a **header** (`<h1>`)
- A **registration form** with the following:
  - Name (Text Input)
  - Email (Email Input)
  - Password (Password Input)
  - Age (Number Input)
  - Profile Picture (File Upload)
  - About You (Textarea)
  - Submit Button

2️⃣ **Use CSS (`style.css`)** for styling:

- Use **External CSS** (`<link rel="stylesheet">`)
- Set a **background color**
- Use **ID and Class Selectors**
- Make the form look **clean and professional**
- Center the form using **CSS**

---

## ✅ 🔹 Example Code

### 📌 `index.html`

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Register Here</h1>

    <form action="#" method="post">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required />

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" min="10" max="100" required />

      <label for="file">Profile Picture:</label>
      <input type="file" id="file" name="file" />

      <label for="bio">About You:</label>
      <textarea id="bio" name="bio" rows="4"></textarea>

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
```

### 📌 `style.css`

```CSS
body {
    font-family: Arial, sans-serif;
    background-color: lightblue;
    text-align: center;
}

form {
    width: 300px;
    margin: auto;
    padding: 20px;
    background-color: white;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
}

label {
    display: block;
    margin-top: 10px;
}

input, textarea {
    width: 100%;
    padding: 5px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: green;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: darkgreen;
}

```

🔥 Bonus Challenge
🔹 Make the form responsive using width: 100% and max-width: 500px;
🔹 Add an interactive hover effect to inputs
