<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design/Development Learning Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            position: relative;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 24px;
            margin: 0 auto;
            position: relative;
            width: 100%; /* Set width to make it centered */
        }
        .header a {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #333;
        }
        .header a:hover {
            background-color: #555;
        }
        .content {
            padding: 20px;
            background-color: white;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: green;
            color: white;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        h1, h2, h3 {
            color: #2C3E50;
        }
        strong {
            color: #2E8B57;
        }
        p, ul, pre, code {
            font-size: 16px;
            line-height: 1.6;
        }
        ul {
            margin: 10px 0;
        }
        ul li {
            margin-left: 20px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            font-family: "Courier New", monospace;
            border: 1px solid #ddd;
            overflow-x: auto;
        }
        .col-md-10 {
            max-height: 500px;
            overflow-y: scroll;
            padding: 20px;
        }
        .row {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="javascript:history.back()">← Back</a>
        Web Design/Development Learning Course
    </div>
    <div class="content">
    <div class="col-md-10 px-3" style="overflow-y: scroll; max-height: 500px;">
    <div class="row">
        <p>
            <strong>Course Overview</strong><br>
            Web design is the art and science of creating websites that are visually appealing, user-friendly, and functional. It involves a blend of graphic design, coding, and user experience (UX) principles to create interfaces that engage users and effectively communicate content. This course explores essential tools and techniques for building websites, including HTML for structure, CSS for styling, and JavaScript for interactivity. By the end of the course, students will be able to create responsive, accessible, and modern web pages suitable for personal portfolios, business purposes, or professional web development.
        </p>
        <p>
            <strong>HTML Basics</strong><br>
            HTML (Hypertext Markup Language) is the foundation of every website. It provides the structural framework for web pages by using various elements represented as tags. Key concepts in HTML include:
            <ul>
                <li><strong>Headings:</strong> Tags like `<h1>` to `<h6>` define headings of different levels, where `<h1>` is the largest and `<h6>` the smallest.</li>
                <li><strong>Paragraphs:</strong> The `<p>` tag is used to organize text into readable blocks.</li>
                <li><strong>Lists:</strong> Ordered (`<ol>`) and unordered (`<ul>`) lists with `<li>` for individual list items.</li>
                <li><strong>Links:</strong> The `<a>` tag creates hyperlinks, essential for navigation between pages or external resources.</li>
                <li><strong>Images:</strong> The `<img>` tag embeds images, with attributes like `src` for the source path and `alt` for accessibility.</li>
                <li><strong>Tables:</strong> Using `<table>`, `<tr>`, `<td>`, and `<th>` to structure tabular data.</li>
            </ul>
            HTML is intuitive and declarative, making it beginner-friendly and indispensable for web development.
        </p>
        <p>
            <strong>CSS Fundamentals</strong><br>
            CSS (Cascading Style Sheets) is used to style and enhance the appearance of HTML content. It separates design from structure, enabling cleaner and more maintainable code. Key topics in CSS include:
            <ul>
                <li><strong>Selectors:</strong> Used to target HTML elements, e.g., `p` for paragraphs, `.class` for classes, and `#id` for specific IDs.</li>
                <li><strong>Properties:</strong> CSS offers various properties such as `color`, `font-size`, `background`, `border`, `margin`, and `padding` to style elements.</li>
                <li><strong>Box Model:</strong> A concept describing how elements are rendered on the page, including their content, padding, border, and margin.</li>
                <li><strong>Layouts:</strong> Techniques like flexbox and CSS grid simplify creating complex, responsive layouts.</li>
                <li><strong>Responsive Design:</strong> Media queries allow designers to define different styles for varying screen sizes and orientations.</li>
            </ul>
            CSS also supports animations and transitions, adding visual appeal and enhancing user experience.
        </p>
        <p>
            <strong>JavaScript Essentials</strong><br>
            JavaScript is the programming language of the web, enabling dynamic and interactive functionalities. It transforms static web pages into engaging experiences. Core JavaScript concepts include:
            <ul>
                <li><strong>Variables and Data Types:</strong> Store data using `var`, `let`, or `const`, with types like strings, numbers, booleans, and objects.</li>
                <li><strong>Functions:</strong> Encapsulate reusable blocks of code, such as validating forms or toggling a dropdown menu.</li>
                <li><strong>DOM Manipulation:</strong> JavaScript interacts with the HTML Document Object Model (DOM) to dynamically modify page content and styles.</li>
                <li><strong>Events:</strong> Handle user interactions like clicks, hovers, and keystrokes using event listeners.</li>
                <li><strong>Loops and Conditions:</strong> Control the program's flow with loops (`for`, `while`) and conditional statements (`if`, `else`).</li>
            </ul>
            JavaScript frameworks like React and libraries like jQuery expand the language's capabilities, but understanding the fundamentals is crucial.
        </p>
        <p>
            <strong>Responsive Design</strong><br>
            With the proliferation of mobile devices, responsive design ensures websites are accessible and visually appealing on all screen sizes. This involves:
            <ul>
                <li><strong>Flexible Grids:</strong> Use relative units like percentages instead of fixed widths for layouts.</li>
                <li><strong>Scalable Images:</strong> Ensure images resize proportionally and do not overflow their containers.</li>
                <li><strong>Media Queries:</strong> Apply CSS rules based on screen size, resolution, or orientation, e.g., `@media (max-width: 768px) { ... }` for mobile-specific styles.</li>
                <li><strong>Frameworks:</strong> Tools like Bootstrap provide pre-designed components and utilities for rapid responsive development.</li>
            </ul>
            Responsive design improves usability, reduces bounce rates, and enhances search engine optimization (SEO).
        </p>
        <p>
            <strong>Final Project</strong><br>
            The capstone project integrates all the concepts taught in the course. Learners will design and build a functional multi-page website. Key steps include:
            <ul>
                <li><strong>Planning:</strong> Outline the website's purpose, target audience, and content structure.</li>
                <li><strong>HTML Structure:</strong> Create the skeleton of the website with semantic tags and organized content.</li>
                <li><strong>CSS Styling:</strong> Apply consistent styles, ensuring visual hierarchy and alignment with design principles.</li>
                <li><strong>JavaScript Interactivity:</strong> Add features like dropdown menus, form validation, and image sliders.</li>
                <li><strong>Responsive Adjustments:</strong> Use media queries to optimize the website for different devices.</li>
            </ul>
            Examples of projects include personal portfolios, small business websites, or non-profit organization pages. This hands-on experience prepares learners for real-world web design challenges.
        </p>
    </div>
</div>
    </div>
    <div class="footer">
        <p> All Rights Reserved ©- Designed by Alvin(+254700921906)- 2024</p>
    </div>
</body>
</html>
