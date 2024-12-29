<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords" content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Javascript Frameworks</title>

    <link rel="icon" href="images/favicon.png" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Top Bar -->
    <?php include 'top-bar.php'; ?>

    <!-- Navigation Bar -->
    <?php include 'navigation-bar.php'; ?>

    <div class="row">

        <div class="col-lg-3 col-12">
            <!-- left side navbar -->
            <?php include 'content-menu-bar.php'; ?>
        </div>



        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">

                    <h3 class="text-center"> JavaScript this keyword</h3>
                    <hr />

                    <section>

                        <h4 class="notes-heading">The Importance of `this` in JavaScript</h4>
                        <p>In JavaScript, <code class="language-javascript">this</code> is a fundamental concept that refers to the context in which a function is executed. It is a reference to the object on which a method was called, or the object that a constructor function is creating. Understanding how <code class="language-javascript">this</code> works is crucial for writing clean, effective, and bug-free JavaScript code.</p>
                        <p>Let’s dive into the details of how <code class="language-javascript">this</code> behaves in different situations and why it’s important to understand its behavior.</p>

                        <hr>

                        <h5 class="notes-subheading">1. What is <code class="language-javascript">this</code>?</h5>
                        <p><code class="language-javascript">this</code> is a <strong>reference</strong> to the <strong>current execution context</strong>. The value of <code class="language-javascript">this</code> depends on how and where the function or method is invoked.</p>
                        <p>In simple terms:</p>
                        <ul>
                            <li><strong><code class="language-javascript">this</code></strong> refers to the object that owns the currently executing function.</li>
                        </ul>
                        <p>However, its value can change based on the context in which it is used:</p>
                        <ul>
                            <li>In <strong>methods</strong>, <code class="language-javascript">this</code> refers to the object the method is a part of.</li>
                            <li>In <strong>regular functions</strong>, <code class="language-javascript">this</code> refers to the global object (<code class="language-javascript">window</code> in browsers, <code class="language-javascript">global</code> in Node.js), unless in strict mode, in which case it is <code class="language-javascript">undefined</code>.</li>
                            <li>In <strong>constructors</strong>, <code class="language-javascript">this</code> refers to the newly created object.</li>
                            <li>In <strong>arrow functions</strong>, <code class="language-javascript">this</code> is lexically inherited from the surrounding context (i.e., the context where the arrow function was defined, not where it is called).</li>
                        </ul>

                        <hr>

                        <h5 class="notes-subheading">2. Key Scenarios for <code class="language-javascript">this</code> in JavaScript</h5>

                        <h6 class="notes-sub-subheading">A. In Global Scope</h6>
                        <p>When you reference <code class="language-javascript">this</code> in the global execution context (outside any function or object), it refers to the global object.</p>
                        <ul>
                            <li><strong>In a browser</strong>, <code class="language-javascript">this</code> refers to the <code class="language-javascript">window</code> object.</li>
                            <li><strong>In Node.js</strong>, <code class="language-javascript">this</code> refers to the <code class="language-javascript">global</code> object.</li>
                        </ul>
                        <p><strong>Example in the browser:</strong></p>
                        <pre><code class="language-javascript">console.log(this);  // Output: [object Window] (the global window object)</code></pre>

                        <h6 class="notes-sub-subheading">B. In a Method</h6>
                        <p>When <code class="language-javascript">this</code> is used inside a method of an object, it refers to the <strong>object</strong> the method is called on.</p>
                        <p><strong>Example:</strong></p>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    console.log(this.name);  // `this` refers to the person object
  }
};

person.greet();  // Output: "Alice"
</code></pre>
                        <p>Here, <code class="language-javascript">this</code> inside the <code class="language-javascript">greet</code> method refers to the <code class="language-javascript">person</code> object, because that's the object calling the method.</p>

                        <h6 class="notes-sub-subheading">C. In a Constructor Function</h6>
                        <p>In a constructor function, <code class="language-javascript">this</code> refers to the newly created instance of the object.</p>
                        <p><strong>Example:</strong></p>
                        <pre><code class="language-javascript">
function Person(name, age) {
  this.name = name;
  this.age = age;
}

const person1 = new Person("Alice", 25);
console.log(person1.name);  // Output: "Alice"
console.log(person1.age);   // Output: 25
</code></pre>
                        <p>Here, <code class="language-javascript">this</code> in the <code class="language-javascript">Person</code> function refers to the new object that is being created (<code class="language-javascript">person1</code>).</p>

                        <h6 class="notes-sub-subheading">D. In Regular Functions</h6>
                        <p>In a regular function, <code class="language-javascript">this</code> can behave differently depending on how the function is called:</p>
                        <ul>
                            <li><strong>In non-strict mode</strong>, <code class="language-javascript">this</code> refers to the <strong>global object</strong> (<code class="language-javascript">window</code> in browsers).</li>
                            <li><strong>In strict mode</strong>, <code class="language-javascript">this</code> is <code class="language-javascript">undefined</code>.</li>
                        </ul>
                        <p><strong>Example (non-strict mode):</strong></p>
                        <pre><code class="language-javascript">
function showThis() {
  console.log(this);  // In non-strict mode, `this` refers to the global object (`window` in the browser)
}

showThis();  // Output: [object Window]
</code></pre>

                        <p><strong>Example (strict mode):</strong></p>
                        <pre><code class="language-javascript">
"use strict";

function showThis() {
  console.log(this);  // In strict mode, `this` is `undefined`
}

showThis();  // Output: undefined
</code></pre>

                        <h6 class="notes-sub-subheading">E. In Arrow Functions</h6>
                        <p>Arrow functions do <strong>not</strong> have their own <code class="language-javascript">this</code>. Instead, they inherit <code class="language-javascript">this</code> from the surrounding lexical context (the <code class="language-javascript">this</code> value at the time the arrow function was defined, not where it is called).</p>
                        <p><strong>Example:</strong></p>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    const arrowFunc = () => {
      console.log(this.name);  // `this` refers to the outer context (the person object)
    };
    arrowFunc();
  }
};

person.greet();  // Output: "Alice"
</code></pre>
                        <p>In the above code, <code class="language-javascript">this</code> inside the arrow function refers to the object <code class="language-javascript">person</code> because the arrow function inherits <code class="language-javascript">this</code> from the surrounding <code class="language-javascript">greet</code> method.</p>

                        <hr>

                        <h5 class="notes-subheading">3. How <code class="language-javascript">this</code> is Set in JavaScript</h5>
                        <p>The value of <code class="language-javascript">this</code> is determined based on <strong>how</strong> a function is called, not where it is defined. Below are the main ways that <code class="language-javascript">this</code> can be set in JavaScript.</p>

                        <h6 class="notes-sub-subheading">A. Method Invocation (Object Method)</h6>
                        <p>When you call a method of an object, <code class="language-javascript">this</code> inside the method refers to the <strong>object</strong> the method belongs to.</p>
                        <p><strong>Example:</strong></p>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    console.log(this.name);
  }
};

person.greet();  // Output: "Alice" (this refers to the `person` object)
</code></pre>

                        <h6 class="notes-sub-subheading">B. Constructor Invocation (Using <code class="language-javascript">new</code>)</h6>
                        <p>When a function is invoked using the <code class="language-javascript">new</code> keyword (i.e., as a constructor), <code class="language-javascript">this</code> inside the function refers to the newly created object.</p>
                        <p><strong>Example:</strong></p>
                        <pre><code class="language-javascript">
function Person(name) {
  this.name = name;
}

const person = new Person("Alice");
console.log(person.name);  // Output: "Alice" (this refers to the newly created object)
</code></pre>

                        <h6 class="notes-sub-subheading">C. Explicit Binding (Using <code class="language-javascript">call()</code>, <code class="language-javascript">apply()</code>, and <code class="language-javascript">bind()</code>)</h6>
                        <p>JavaScript provides methods such as <code class="language-javascript">call()</code>, <code class="language-javascript">apply()</code>, and <code class="language-javascript">bind()</code> that allow you to explicitly set the value of <code class="language-javascript">this</code> within a function.</p>
                        <ul>
                            <li><strong><code class="language-javascript">call()</code></strong> allows you to invoke a function with a specific <code class="language-javascript">this</code> value.</li>
                            <li><strong><code class="language-javascript">apply()</code></strong> is similar to <code class="language-javascript">call()</code>, but it accepts an array of arguments.</li>
                            <li><strong><code class="language-javascript">bind()</code></strong> returns a new function that is permanently bound to a specific <code class="language-javascript">this</code> value.</li>
                        </ul>
                        <p><strong>Example with <code class="language-javascript">call()</code>:</strong></p>
                        <pre><code class="language-javascript">
function greet() {
  console.log(this.name);
}

const person = {
  name: "Alice"
};

greet.call(person);  // Output: "Alice" (this is explicitly set to the `person` object)
</code></pre>

                        <p><strong>Example with <code class="language-javascript">bind()</code>:</strong></p>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    console.log(this.name);
  }
};

const boundGreet = person.greet.bind(person);
boundGreet();  // Output: "Alice" (this is permanently bound to the `person` object)
</code></pre>

                        <h6 class="notes-sub-subheading">D. Arrow Functions and Lexical <code class="language-javascript">this</code></h6>
                        <p>Arrow functions do not have their own <code class="language-javascript">this</code>. Instead, they <strong>lexically inherit</strong> <code class="language-javascript">this</code> from the surrounding code.</p>
                        <p><strong>Example:</strong></p>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    setTimeout(() => {
      console.log(this.name);  // `this` refers to the `person` object
    }, 1000);
  }
};

person.greet();  // Output: "Alice" (arrow function inherits `this` from `greet`)
</code></pre>

                        <hr>

                        <h5 class="notes-subheading">4. Common Pitfalls with <code class="language-javascript">this</code></h5>

                        <h6 class="notes-sub-subheading">A. Losing <code class="language-javascript">this</code> in Callbacks</h6>
                        <p>When a method is passed as a callback (e.g., in event handlers or <code class="language-javascript">setTimeout</code>), <code class="language-javascript">this</code> may no longer refer to the object you expect.</p>
                        <p><strong>Example:</strong></p>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    setTimeout(function() {
      console.log(this.name);  // `this` refers to the global object or `undefined` in strict mode
    }, 1000);
  }
};

person.greet();  // Output: undefined (since `this` inside the regular function is the global object)
</code></pre>

                        <p>To avoid this issue, you can use an <strong>arrow function</strong> or <strong>bind</strong> the correct context:</p>

                        <h6 class="notes-sub-subheading">Solution with Arrow Function:</h6>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    setTimeout(() => {
      console.log(this.name);  // `this` refers to the `person` object due to lexical scoping
    }, 1000);
  }
};

person.greet();  // Output: "Alice"
</code></pre>

                        <h6 class="notes-sub-subheading">Solution with <code class="language-javascript">bind()</code>:</h6>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  greet: function() {
    setTimeout(function() {
      console.log(this.name);  // `this` is explicitly bound to `person`
    }.bind(this), 1000);
  }
};

person.greet();  // Output: "Alice"
</code></pre>

                        <hr>

                        <h5 class="notes-subheading">5. Conclusion: Why <code class="language-javascript">this</code> is Important in JavaScript</h5>
                        <p>Understanding <code class="language-javascript">this</code> in JavaScript is crucial for working with functions and objects effectively. The value of <code class="language-javascript">this</code> is determined by how a function is called, not where it is defined. This makes <code class="language-javascript">this</code> a powerful tool, but also a potential source of confusion and bugs, especially when dealing with callbacks, event handlers, or asynchronous code.</p>

                        <p>By mastering <code class="language-javascript">this</code>, you can:</p>
                        <ul>
                            <li>Write more flexible code that behaves correctly in various contexts.</li>
                            <li>Avoid common pitfalls related to callback functions and event listeners.</li>
                            <li>Control the scope and behavior of methods and constructor functions more accurately.</li>
                        </ul>

                        <p>In conclusion, mastering <code class="language-javascript">this</code> allows you to write cleaner, more maintainable JavaScript code.</p>


                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="history-of-java-by-deepak-smart-programming.html" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

        </div>

        <div class="col-md-2 col-12 bg-secondary">this is for advertisement</div>

    </div>

    <!-- Footer -->
    <div class="footer mt-4">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <h5 class="text-white">Menus</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="footer-link">Home</a></li>
                        <li>
                            <a href="free-courses-by-smart-programming.html" class="footer-link">Free Courses</a>
                        </li>
                        <li>
                            <a href="premium-courses-by-smart-programming.html" class="footer-link">Premium Courses</a>
                        </li>
                        <li>
                            <a href="trainings-by-smart-programming.html" class="footer-link">Trainings</a>
                        </li>
                        <li>
                            <a href="development-by-smart-programming.html" class="footer-link">Development</a>
                        </li>
                        <li>
                            <a href="contact-smart-programming.html" class="footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h5 class="text-white">
                        Useful links for Industrial Training in Chandigarh
                    </h5>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="core-java-free-course-by-deepak-smart-programming.html" class="footer-link">Core Java Free Course</a>
                                </li>
                                <li>
                                    <a href="advance-java-free-course-by-deepak-smart-programming.html" class="footer-link">Advance Java Free Course</a>
                                </li>
                                <li>
                                    <a href="spring-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Spring Framework Free Course</a>
                                </li>
                                <li>
                                    <a href="springboot-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Springboot Free Course</a>
                                </li>
                                <li>
                                    <a href="android-free-course-by-deepak-smart-programming.html" class="footer-link">Android Free Course</a>
                                </li>
                                <li>
                                    <a href="java-logical-questions-free-course-by-deepak-smart-programming.html" class="footer-link">Java Logical Questioning Free Course</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Core-Java-With-5-Projects" target="_blank" class="footer-link">Core Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Advance-Java" target="_blank" class="footer-link">Advance Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Framework" target="_blank" class="footer-link">Spring Framework Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Boot-Framework" target="_blank" class="footer-link">Springboot Premium Course</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-8">
                    <footer>
                        <p>
                            &copy; 2024 Smart Programming, Chandigarh. All Rights Reserved.
                            <br />
                            <a href="privacy-policy.html" class="footer-link">Privacy Policy</a>
                            &nbsp; | &nbsp;
                            <a href="terms-of-service.html" class="footer-link">Terms Of Services</a>
                            &nbsp; | &nbsp;
                            <a href="cancellation-refund-policy.html" class="footer-link">Cancellation/Refund Policy</a>
                        </p>
                    </footer>
                </div>
                <div class="col-md-4">
                    <div class="social-icons">
                        <a href="https://www.youtube.com/c/SmartProgramming" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com/smartprogramming.india" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/smart_programming/" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://t.me/smart_programming_deepak" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-telegram"></i>
                        </a>
                        <a href="https://discord.gg/Up9dQ3gP6k" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-discord"></i>
                        </a>
                        <a href="https://whatsapp.com/channel/0029Va6n2Gs42Dckpa2T1U1i" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document
            .getElementById("notes-hamburger-btn")
            .addEventListener("click", function() {
                document.getElementById("notes-sidebar").classList.toggle("active");
            });

        document
            .getElementById("notes-sidebar-close-btn")
            .addEventListener("click", function() {
                document.getElementById("notes-sidebar").classList.remove("active");
            });
    </script>

    <!-- Prism.js for Syntax Highlighting -->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/components/prism-java.min.js"></script>
</body>

</html>