# Example by using a block of navbar code

---

```html
<div class="nav-container">
  <h2>Variation 1: Horizontal with underline effect</h2>
  <nav class="nav1">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Products</a></li>
      <li><button class="login-btn">Login</button></li>
    </ul>
  </nav>
</div>
```

#### For this specific block of code, here are the **CSS selectors** you need to know and how they apply:

---

### **1. Class Selector (`.class`)**

Used to target elements with a specific `class` attribute.

```css
.nav-container {
  background-color: lightgray;
}
```

```css
.nav1 {
  display: flex;
}
```

```css
.login-btn {
  background-color: blue;
  color: white;
}
```

---

### **2. Element Selector (`element`)**

```css
h2 {
  font-size: 20px;
}
```

```css
ul {
  list-style: none;
  padding: 0;
}
```

```css
li {
  display: inline-block;
  margin: 0 10px;
}
```

```css
a {
  text-decoration: none;
  color: black;
}
```

---

### **3. Descendant Selector (`parent child`)**

Targets an element inside a specific parent.

- **Example:**

  ```css
  .nav1 ul {
    display: flex;
    justify-content: space-around;
  }
  ```

  **Targets:** `<ul>` inside `<nav class="nav1">`

- **Example:**
  ```css
  .nav1 li a {
    font-weight: bold;
  }
  ```
  **Targets:** `<a>` inside `<li>` inside `.nav1`

---

### **4. Child Selector (`parent > child`)**

Targets direct children only.

- **Example:**
  ```css
  .nav1 > ul > li {
    padding: 10px;
  }
  ```
  **Targets:** `<li>` that are direct children of `<ul>` inside `.nav1`

---
