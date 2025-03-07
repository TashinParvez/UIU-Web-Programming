# Web Programming – Things to Remember

---

<h1 align="center"> HTML </h1>

---

- ### 🎨 Changing Font Color Using Only HTML

```html
<font color="blue"> Lorem ipsum dolor sit</font><br />
```

- ### Take Center

```html
<div colspan="2" align="center">
  <button>SignUp</button>
</div>
```

- ##### Checkboxes with the same name allow multiple selections and send their values as an array.
- ##### Radio buttons with the same name allow only one selection from a group.
- ##### Dropdown Attributes
  - **disabled**: Prevents selection of the default option ("Select Country").
  - **selected**: Sets the default option shown when the page loads.
  - **hidden**: Hides the option from the dropdown list to prevent selection.

---

- ### 🔹 Container Tag in HTML
  A container tag in HTML is a tag that holds and organizes other elements inside it. It does not have a specific meaning or styling by itself but is used to group and structure content.

| Tag         | Description                                             |
| ----------- | ------------------------------------------------------- |
| `<div>`     | A block-level container used for layout and styling.    |
| `<span>`    | An inline container used for styling a portion of text. |
| `<section>` | A section of content in a webpage.                      |
| `<article>` | Represents independent, self-contained content.         |
| `<aside>`   | Used for sidebars or related content.                   |
| `<header>`  | Contains introductory content or navigation links.      |
| `<footer>`  | Defines the footer of a webpage.                        |

---

## 🔹 Inline vs Block Elements in HTML

- ### 📌 1. Block Elements

  - Always start on a new line.
  - Occupy the full width available (stretching across the container).
  - Can contain inline elements and other block-level elements.

| Element         | Description                           |
| --------------- | ------------------------------------- |
| `<div>`         | Generic container for block elements. |
| `<p>`           | Defines a paragraph.                  |
| `<h1>` - `<h6>` | Headings (h1 to h6).                  |
| `<table>`       | Creates a table.                      |
| `<ul>` / `<ol>` | Unordered and ordered lists.          |
| `<li>`          | List item inside `<ul>` or `<ol>`.    |
| `<form>`        | Defines a form.                       |
| `<section>`     | Defines a section in the document.    |
| `<article>`     | Defines an article.                   |

- ### 📌 2. Inline Elements
  - Do not start on a new line.
  - Only take up as much width as necessary.
  - Can only contain data or other inline elements (not block elements).

| Element    | Description                            |
| ---------- | -------------------------------------- |
| `<span>`   | Generic container for inline elements. |
| `<a>`      | Creates hyperlinks.                    |
| `<strong>` | Makes text bold.                       |
| `<em>`     | Italicizes text.                       |
| `<img>`    | Embeds an image.                       |
| `<input>`  | Form input field.                      |
| `<label>`  | Label for form elements.               |
| `<button>` | Creates a clickable button.            |

---

- ### 📌 Void Tags

  - A void tag is an HTML tag that does not have a closing tag. These tags are also called empty elements because they do not wrap around content.

  | Tag        | Description                             |
  | ---------- | --------------------------------------- |
  | `<br>`     | Line break                              |
  | `<hr>`     | Horizontal rule                         |
  | `<img>`    | Image                                   |
  | `<input>`  | Form input field                        |
  | `<meta>`   | Metadata for HTML document              |
  | `<link>`   | External CSS file                       |
  | `<source>` | Media source for `<audio>` or `<video>` |
  | `<area>`   | Clickable area inside an image map      |
  | `<base>`   | Base URL for relative links             |
  | `<col>`    | Defines columns in a table              |

---

### 📌 Self-Closing Tags?

- Self-closing tags are a type of void tag written in XHTML style, meaning they end with / before >.
- They are functionally the same as void tags in modern HTML but ensure compatibility with older XHTML standards.

```html
<br />
<hr />
<img src="logo.png" alt="Company Logo" />
<input type="email" placeholder="Enter email" />
```

---

### 📌 Ordered HTML List - The Type Attribute

| **Type**   | **Description**                                               |
| ---------- | ------------------------------------------------------------- |
| `type="1"` | The list items will be numbered with numbers (default)        |
| `type="A"` | The list items will be numbered with uppercase letters        |
| `type="a"` | The list items will be numbered with lowercase letters        |
| `type="I"` | The list items will be numbered with uppercase Roman numerals |
| `type="i"` | The list items will be numbered with lowercase Roman numerals |

---

<h5 > Understanding file paths </h5>

[🔗 Go to this link 🔗](/Others/FilePath.md)

---

---

<h1 align="center"> CSS </h1>

---

- ### 📌 Best Practices for CSS Units

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

---

#### 🔥 1. px (Pixels) – Fixed Size

```css
button {
  width: 150px; /* Fixed width */
}
```

#### 🌍 2. % (Percentage) – Relative to Parent

```css
.container {
  width: 80%; /* 80% of the parent width */
}
```

#### 🔠 3. em (Relative to Element's Font Size)

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

---

### Title

```html
// Content here
```
