# **📌 CSS Notes**

<h3 align="center"> A Guide to CSS Concepts & Best Practices </h3>

---

## 📜 **Table of Contents**

1. [CSS Selectors](#css-selectors)
2. [CSS Units & Best Practices](#css-units--best-practices)
   - [When to Use Which Unit?](#when-to-use-which-unit)
   - [Examples of CSS Units](#examples-of-css-units)
3. [CSS Properties](#css-properties)
   - [Text Styling](#text-styling)
   - [Backgrounds](#backgrounds)
4. [Box Model & Box Shadows](#box-model--box-shadows)
   - [Box Model (Margin, Padding, Border)](#box-model-margin-padding-border)
   - [Box Shadows](#box-shadows)
5. [CSS Positioning & Layout](#css-positioning--layout)
   - [Display & Positioning](#display--positioning)
   - [Flexbox for Layouts](#flexbox-for-layouts)

---

# CSS Selectors

Selectors are used to target HTML elements for styling.

| Selector             | Example                                     | Name                           | Description                                                                    | Important |
| -------------------- | ------------------------------------------- | ------------------------------ | ------------------------------------------------------------------------------ | --------- |
| `*`                  | `* { margin: 0; }`                          | Universal Selector             | Targets **all** elements                                                       | ⭐        |
| `element`            | `p { color: blue; }`                        | Type Selector                  | Targets **all** `<p>` elements                                                 | ⭐        |
| `.class`             | `.text { font-size: 18px; }`                | Class Selector                 | Targets **all** elements with `class="text"`                                   | ⭐        |
| `#id`                | `#title { font-weight: bold; }`             | ID Selector                    | Targets **only one** element with `id="title"`                                 | ⭐        |
| `element, element`   | `h1, h2 { color: navy; }`                   | Grouping Selector              | Targets **all** specified elements                                             | ⭐        |
| `element element`    | `div p { color: red; }`                     | **Descendant Selector**        | Targets **all** `<p>` inside `<div>`                                           | ⭐⭐      |
| `element > element`  | `div > p { color: green; }`                 | Child Selector                 | Targets **all** `<p>` that are direct children of `<div>`                      |           |
| `element + element`  | `h1 + p { margin-top: 10px; }`              | Adjacent Sibling Selector      | Targets **the first** `<p>` immediately after an `<h1>`                        |           |
| `element ~ element`  | `h1 ~ p { color: gray; }`                   | General Sibling Selector       | Targets **all** `<p>` that follow `<h1>`<br> [means, all `<h1>`'s `<p>` child] |           |
| `[attribute]`        | `[disabled] { opacity: 0.5; }`              | Attribute Selector             | Targets **all** elements with the `disabled` attribute                         |           |
| `[attribute=value]`  | `input[type="text"] { border: 1px solid; }` | Attribute Value Selector       | Targets **all** `input` elements with `type="text"`                            |           |
| `[attribute^=value]` | `a[href^="https"] { color: green; }`        | Attribute Starts With Selector | Targets **all** `<a>` where `href` starts with `"https"`                       |           |
| `[attribute$=value]` | `img[src$=".png"] { border: none; }`        | Attribute Ends With Selector   | Targets **all** `<img>` where `src` ends with `".png"`                         |           |
| `[attribute*=value]` | `div[class*="box"] { padding: 10px; }`      | Attribute Contains Selector    | Targets **all** `<div>` where `class` contains `"box"`                         |           |

- ### Know more about Selectors: [🔗LINK](CSS-Selectors.md)

---

### 📌 Best Practices for CSS Units

✅ **Use `px`** for fixed UI components.  
 ✅ **Use `%`** for flexible layouts.
✅ **Use `em`** for local scaling of fonts and spacing.  
 ✅ **Use `rem`** for consistent, global typography.  
 ✅ **Use `vw` & `vh`** for full-screen elements.

- ### 🎯 When to Use Which Unit?

  | Unit  | Best For              | Example             |
  | ----- | --------------------- | ------------------- |
  | `px`  | Fixed sizes           | Icons, buttons      |
  | `%`   | Relative scaling      | Containers, widths  |
  | `em`  | Local font scaling    | Padding, margins    |
  | `rem` | Global typography     | Font sizes, spacing |
  | `vw`  | Screen width scaling  | Full-width elements |
  | `vh`  | Screen height scaling | Hero sections       |

💡 Want a flexible, scalable website?
Use a mix of `rem`, `%`, and `vw/vh` instead of px. This keeps your design responsive and user-friendly! 🚀

- ✔ Use rem for global font sizes → Ensures consistent scaling across your site.
- ✔ Use em for local elements → Lets nested elements scale independently.

### 📌 Best Practices [Important]

- ```css
  padding: 10px 20px 10px 20px; /* called trbl = top right bottom left */
  ```

- ### Margin Collapsing in CSS

  Margin collapsing is a behavior in CSS where vertical margins of adjacent elements merge into a single margin instead of adding up.

  ## Example

  ```css
  .div1 {
    margin-bottom: 30px;
    background: lightblue;
  }

  .div2 {
    margin-top: 20px;
    background: lightcoral;
  }
  ```

Even though `.div1` has `margin-bottom: 30px;` and `.div2` has `margin-top: 20px;`, the actual space between them will be **30px** (not **50px**) because the margins collapse to the larger value.

![Margin Collapsing](https://miro.medium.com/v2/resize:fit:421/0*kAD00byJs8jdmXvr.png)

- ## Best way to write box-sizing property

  ```css
  *,
  *::after,
  *::before {
    box-sising: border-box;
  }
  ```

---

#### 1. px (Pixels) – Fixed Size

```css
button {
  width: 150px; /* Fixed width */
}
```

````

#### 2. % (Percentage) – Relative to Parent

```css
.container {
  width: 80%; /* 80% of the parent width */
}
````

#### 3. em (Relative to Element's Font Size)

```css
.parent {
  font-size: 20px;
}

.child {
  font-size: 1.5em; /* 1.5 * 20px = 30px */
  padding: 0.5em; /* 10px */
}
```

#### 🔗 4. rem (Relative to Root Font Size)

```css
html {
  font-size: 16px;
}

h1 {
  font-size: 2rem; /* 2 * 16px = 32px */
}

p {
  font-size: 1rem; /* 16px */
}
```

#### 🌍 5. vw (Viewport Width) – Scales with Screen Width

```css
.hero {
  width: 100vw; /* Full screen width */
  font-size: 5vw; /* Responsive text */
}
```

#### 📏 6. vh (Viewport Height) – Scales with Screen Height

```css
.fullscreen {
  height: 100vh; /* Full viewport height */
}
```

---

<h1 style="text-align: center;"> CSS Properties </h1>

---

## 📌 Text Styling

```css
p {
  color: darkblue;
  font-size: 18px;
  font-weight: bold;
  font-family: Arial, sans-serif;
  text-align: center;
}
```

#### 🌟 Text Shadow

```html
<h1 class="shadow-text">Hello, World!</h1>

<style>
  .shadow-text {
    font-size: 40px;
    color: blue;
    text-shadow: 2px 4px 5px rgba(0, 0, 0, 0.5);
  }
</style>
```

##### Explanation:

- 1px: Moves the shadow right by 1px.
- 2px: Moves the shadow down by 2px.
- 2px: Adds a blur effect to the shadow.
- rgba(0, 0, 0, 0.5): Shadow color (black with 50% transparency).

---

## 📌 Background

### **Background Image**

```css
background-image: url("bg1.jpg");
background-size: cover;
background-position: center;
```

## **Gradient Background**

```css
background-image: linear-gradient(to right, gold, silver, gold);

background: linear-gradient(
  45deg,
  rgba(85, 112, 220, 0.5),
  rgba(224, 34, 157, 0.5),
  rgba(117, 210, 12, 0.5),
  rgba(170, 31, 31, 0.5)
);
```

```css
background-image: radial-gradient(
  circle,
  rgba(0, 0, 255, 0.5),
  rgba(193, 69, 69, 0.5),
  rgba(255, 255, 0, 0.5)
);
```

##### Explanation:

- to `left` → Moves right to left.
- to `right` → The gradient moves from left to right.
- to `bottom` → Moves top to bottom.
- to `top right` → Moves diagonally.

- gold → Starts with gold.
  silver → Transitions to silver in the middle.
  gold → Ends again with gold.

## **Mix of Image and Gradient in the background**

```css
background-image: linear-gradient(
    to bottom,
    rgba(0, 0, 255, 0.5),
    rgba(193, 69, 69, 0.5),
    rgba(255, 255, 0, 0.5)
  ), url("Others/Images/bg2.jpg");
```

---

### 📌 Box Model (Margin, Padding, Border)

```css
.box {
  width: 200px;
  height: 100px;
  padding: 10px;
  margin: 20px;
  border: 2px solid red;
}
```

## **📌 Box-shadow in CSS**

The `box-shadow` property in CSS adds a shadow effect around an element, creating depth and enhancing its appearance.

```css
box-shadow: offsetX offsetY blur-radius spread-radius color;
```

- **offsetX** → Moves the shadow **horizontally** (right if positive, left if negative).
- **offsetY** → Moves the shadow **vertically** (down if positive, up if negative).
- **blur-radius** (optional) → Defines how much the shadow should be blurred (higher values = softer shadows).
- **spread-radius** (optional) → Expands or shrinks the shadow.
- **color** → Defines the color of the shadow.

```css
box-shadow: 2px 4px 4px 2px rgba(0, 0, 0, 0.4);
```

##### **Explanation:**

- `2px` → Moves the shadow **right**.
- `4px` → Moves the shadow **down**.
- `4px` → blur effect.
- `2px` → Spreads the shadow [size of the shadow width and height].
- `rgba(0, 0, 0, 0.4)` → Black shadow with 40% transparency.

```css
/* Inset Shadow (Inner Shadow) */
.box {
  box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.5);
}

/* Multiple Shadows */
.box {
  box-shadow: 5px 5px 10px red, -5px -5px 10px blue;
}
```

---

---

<h1 style="text-align: center;">CSS Positioning & Layout</h1>
<!--KEYWORDS:  flexbox -->

---

---

### 📌 Display & Positioning

```css
.container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.fixed {
  position: fixed;
  top: 10px;
  right: 10px;
}
```

---

### **block** and **inline** elements in HTML:

| Feature                               | Block Elements                                                                        | Inline Elements                                                                   |
| ------------------------------------- | ------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| **Definition**                        | Take up the full width available and start on a new line.                             | Take up only as much width as necessary and stay on the same line.                |
| **Starts on a new line?**             | Yes                                                                                   | No                                                                                |
| **Width and Height**                  | Can be set explicitly.                                                                | Only width and height of content are considered.                                  |
| **Common Examples**                   | `<div>`, `<p>`, `<h1>` to `<h6>`, `<ul>`, `<li>`, `<table>`, `<section>`, `<article>` | `<span>`, `<a>`, `<strong>`, `<em>`, `<img>`, `<code>`, `<b>`, `<i>`              |
| **Can contain other block elements?** | Yes                                                                                   | No (mostly contains text or other inline elements)                                |
| **Box Model Behavior**                | Margins, padding, and borders affect the full width.                                  | Margins and padding apply only to left and right, not top and bottom as expected. |
| **Usage**                             | Used for structuring layouts and main sections.                                       | Used for styling parts of text within a block element.                            |

---

## Flexbox

- main Axis and other Axis/Cross Axis
- main Axis is ➡ left to right [IN web]
- main Axis is ➡ Top To bottom [IN APP]

```css
.div {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  height: auto;
  align-content: space-around;
}
```

---

## **Flexbox for Centering**

### **Syntax:**

```css
display: flex;
justify-content: center;
align-items: center;
```

##### **Explanation:**

- `display: flex;` → Makes **Columns**(||).
- `justify-content: center;` → Centers items **horizontally**.
- `align-items: center;` → Centers items **vertically**.

---

`📌Question` I often get confused about when to use the following CSS properties:

```css
justify-content: center;
align-items: center;
text-align: center;
```

---

### **Crystal Clear Explanation**

1. **`justify-content: center;`** → **For Flexbox/Grid** → **Centers items horizontally**
2. **`align-items: center;`** → **For Flexbox/Grid** → **Centers items vertically**
3. **`text-align: center;`** → **For text inside a block element** → **Centers text horizontally**

---

### **1️⃣ `justify-content: center;` → Centers items Horizontally in Flexbox/Grid**

📌 **Applies to:** `display: flex;` or `display: grid;`  
📌 **Effect:** Moves child elements **horizontally to the center** of their container.

#### ✅ **Example: Centering items in a row (Flexbox)**

### **📝 Key Idea:**

- Works when you have **`display: flex;`**.
- Centers **multiple items horizontally** inside the container.

---

### **2️⃣ `align-items: center;` → Centers items Vertically in Flexbox/Grid**

📌 **Applies to:** `display: flex;` or `display: grid;`  
📌 **Effect:** Moves child elements **vertically to the center** of their container.

### **📝 Key Idea:**

- Works with **`display: flex;`**.
- Moves items to the **center of the height** of the container.

---

### **3️⃣ `text-align: center;` → Centers Text Horizontally**

📌 **Applies to:** `block` elements like `<p>`, `<div>`, `<h1>`, etc.  
📌 **Effect:** Centers **inline text inside a block-level element**.

#### ✅ **Example: Centering Text**

```css
.container {
  text-align: center; /* Centers text inside this div */
  background-color: lightgray;
  width: 300px;
}
```

```html
<div class="container">
  <p>Hello, World!</p>
</div>
```

### **📝 Key Idea:**

- Only works for **text and inline elements** inside block elements.
- Does **not** move the container itself, only the text inside it.

---

💡 **Think of it like this:**

| Property                   | What it Affects      | Works With     | Moves Things  | Works With                                  |
| -------------------------- | -------------------- | -------------- | ------------- | ------------------------------------------- |
| `justify-content: center;` | Horizontal alignment | Flexbox/Grid   | Left to Right | Flex/Grid containers (`display: flex/grid`) |
| `align-items: center;`     | Vertical alignment   | Flexbox/Grid   | Top to Bottom | Flex/Grid containers (`display: flex/grid`) |
| `text-align: center;`      | Text alignment       | Block elements | Inline Text   | Block elements (`div, p, td, etc.`)         |

---
