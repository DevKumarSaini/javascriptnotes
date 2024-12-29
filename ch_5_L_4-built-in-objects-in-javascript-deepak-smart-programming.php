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

                    <h3 class="text-center"> JavaScript Built In Objects</h3>
                    <hr />

                    <section>


                        <h4 class="notes-heading">JavaScript Built-in Objects</h4>
                        <p>JavaScript provides a set of built-in objects that are part of the language's standard library. These objects serve as the foundational tools for working with data, performing computations, interacting with the environment (like the browser or Node.js), and more. Below is a comprehensive list and explanation of these built-in objects.</p>

                        <hr>

                        <h5 class="notes-subheading">1. <strong>Object</strong></h5>
                        <p>The <code>Object</code> is the fundamental base object in JavaScript. All other objects inherit from <code>Object.prototype</code>. It can be used to create and manipulate key-value pairs.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>Object.create(proto)</code>: Creates a new object with the specified prototype object and properties.</li>
                            <li><code>Object.keys(obj)</code>: Returns an array of a given object's own enumerable property names.</li>
                            <li><code>Object.values(obj)</code>: Returns an array of a given object's own enumerable property values.</li>
                            <li><code>Object.entries(obj)</code>: Returns an array of the given object's key-value pairs.</li>
                            <li><code>Object.assign(target, ...sources)</code>: Copies all properties from one or more source objects to a target object.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let obj = { name: "John", age: 30 };
let keys = Object.keys(obj); // ["name", "age"]</code></pre>

                        <hr>

                        <h5 class="notes-subheading">2. <strong>Array</strong></h5>
                        <p>Arrays are special types of objects used for storing ordered collections of values (elements). Each element has an index, starting from 0.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>Array.prototype.push()</code>: Adds an element to the end of an array.</li>
                            <li><code>Array.prototype.pop()</code>: Removes an element from the end of an array.</li>
                            <li><code>Array.prototype.shift()</code>: Removes an element from the start of an array.</li>
                            <li><code>Array.prototype.unshift()</code>: Adds an element to the start of an array.</li>
                            <li><code>Array.prototype.map()</code>: Creates a new array with the results of calling a function on every element in the array.</li>
                            <li><code>Array.prototype.filter()</code>: Creates a new array with all elements that pass the test implemented by the provided function.</li>
                            <li><code>Array.prototype.forEach()</code>: Executes a provided function once for each array element.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let arr = [1, 2, 3, 4];
arr.push(5); // [1, 2, 3, 4, 5]</code></pre>

                        <hr>

                        <h5 class="notes-subheading">3. <strong>String</strong></h5>
                        <p>The <code>String</code> object is used for working with text. Strings are immutable in JavaScript.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>String.prototype.charAt()</code>: Returns the character at a specified index.</li>
                            <li><code>String.prototype.indexOf()</code>: Returns the index of the first occurrence of a specified value.</li>
                            <li><code>String.prototype.slice()</code>: Extracts a section of a string and returns it as a new string.</li>
                            <li><code>String.prototype.split()</code>: Splits a string into an array of substrings based on a specified delimiter.</li>
                            <li><code>String.prototype.toUpperCase()</code>: Converts all characters in a string to uppercase.</li>
                            <li><code>String.prototype.toLowerCase()</code>: Converts all characters in a string to lowercase.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let text = "Hello, World!";
let upperText = text.toUpperCase(); // "HELLO, WORLD!"</code></pre>

                        <hr>

                        <h5 class="notes-subheading">4. <strong>Number</strong></h5>
                        <p>The <code>Number</code> object is used to represent both integer and floating-point numbers.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>Number.isNaN()</code>: Determines whether the value is <code>NaN</code>.</li>
                            <li><code>Number.isInteger()</code>: Checks if the value is an integer.</li>
                            <li><code>Number.parseFloat()</code>: Parses a string and returns a floating-point number.</li>
                            <li><code>Number.parseInt()</code>: Parses a string and returns an integer.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let num = 3.14;
let integer = Number.parseInt(num); // 3</code></pre>

                        <hr>

                        <h5 class="notes-subheading">5. <strong>Boolean</strong></h5>
                        <p>The <code>Boolean</code> object is used to represent a logical entity that can be either <code>true</code> or <code>false</code>.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>Boolean()</code>: Converts any value to its equivalent boolean value (<code>true</code> or <code>false</code>).</li>
                            <li><code>Boolean.prototype.valueOf()</code>: Returns the primitive value of a <code>Boolean</code> object.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let flag = new Boolean(false);
console.log(flag.valueOf()); // false</code></pre>

                        <hr>

                        <h5 class="notes-subheading">6. <strong>Function</strong></h5>
                        <p>The <code>Function</code> object is used to define JavaScript functions. Every function in JavaScript is an instance of the <code>Function</code> object.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>Function.prototype.call()</code>: Calls a function with a specified <code>this</code> value and arguments.</li>
                            <li><code>Function.prototype.apply()</code>: Calls a function with a specified <code>this</code> value and an array of arguments.</li>
                            <li><code>Function.prototype.bind()</code>: Creates a new function that, when called, has its <code>this</code> keyword set to a specific value.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">function greet(name) {
    console.log("Hello, " + name);
}
greet.call(null, "Alice"); // "Hello, Alice"</code></pre>

                        <hr>

                        <h5 class="notes-subheading">7. <strong>Date</strong></h5>
                        <p>The <code>Date</code> object is used to represent dates and times. It allows you to manipulate dates, format them, and perform date-related calculations.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>Date.prototype.getDate()</code>: Returns the day of the month.</li>
                            <li><code>Date.prototype.getMonth()</code>: Returns the month (0–11).</li>
                            <li><code>Date.prototype.getFullYear()</code>: Returns the full year.</li>
                            <li><code>Date.prototype.getTime()</code>: Returns the number of milliseconds since January 1, 1970.</li>
                            <li><code>Date.prototype.toLocaleDateString()</code>: Returns a string with a language-sensitive representation of the date portion of this date.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let today = new Date();
console.log(today.getFullYear()); // 2024 (or the current year)</code></pre>

                        <hr>

                        <h5 class="notes-subheading">8. <strong>RegExp (Regular Expression)</strong></h5>
                        <p>The <code>RegExp</code> object is used for pattern matching in strings. It allows you to search, match, and manipulate strings based on patterns.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>RegExp.prototype.test()</code>: Tests if a pattern exists in a string.</li>
                            <li><code>RegExp.prototype.exec()</code>: Executes a search for a match and returns an array of information.</li>
                            <li><code>String.prototype.match()</code>: Retrieves the result of matching a string against a regular expression.</li>
                            <li><code>String.prototype.replace()</code>: Searches for a pattern and replaces it with a new string.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let pattern = /foo/;
console.log(pattern.test("foobar")); // true</code></pre>

                        <hr>

                        <h5 class="notes-subheading">9. <strong>Error</strong></h5>
                        <p>The <code>Error</code> object is used for handling exceptions in JavaScript. You can create custom error objects to be thrown in your code.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>Error.prototype.message</code>: The error message.</li>
                            <li><code>Error.prototype.name</code>: The error's name (like <code>TypeError</code>, <code>ReferenceError</code>).</li>
                            <li><code>Error.prototype.stack</code>: The stack trace, providing information about where the error occurred.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let myError = new Error("Something went wrong");
console.log(myError.message); // "Something went wrong"</code></pre>

                        <hr>

                        <h5 class="notes-subheading">10. <strong>Map</strong></h5>
                        <p>The <code>Map</code> object holds key-value pairs where both the keys and the values can be any type, and the order of the keys is maintained.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>map.set(key, value)</code>: Adds a key-value pair to the map.</li>
                            <li><code>map.get(key)</code>: Retrieves the value associated with the key.</li>
                            <li><code>map.has(key)</code>: Checks if the map contains a specified key.</li>
                            <li><code>map.delete(key)</code>: Removes the specified key-value pair from the map.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let map = new Map();
map.set('name', 'Alice');
console.log(map.get('name')); // "Alice"</code></pre>

                        <hr>

                        <h5 class="notes-subheading">11. <strong>Set</strong></h5>
                        <p>The <code>Set</code> object allows you to store unique values of any type (primitive values or object references).</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>set.add(value)</code>: Adds a value to the set.</li>
                            <li><code>set.has(value)</code>: Checks if a value exists in the set.</li>
                            <li><code>set.delete(value)</code>: Removes a value from the set.</li>
                            <li><code>set.size</code>: Returns the number of elements in the set.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let set = new Set();
set.add(1);
set.add(2);
set.add(3);
console.log(set.has(2)); // true</code></pre>

                        <hr>

                        <h5 class="notes-subheading">12. <strong>WeakMap</strong></h5>
                        <p>A <code>WeakMap</code> is a collection of key-value pairs where the keys must be objects, and the values can be any arbitrary value. The key objects are weakly referenced, meaning they can be garbage-collected.</p>
                        <p><strong>Common Methods:</strong></p>
                        <ul>
                            <li><code>weakMap.set(key, value)</code>: Adds a key-value pair to the weak map.</li>
                            <li><code>weakMap.get(key)</code>: Retrieves the value associated with the key.</li>
                            <li><code>weakMap.has(key)</code>: Checks if the weak map contains a key.</li>
                            <li><code>weakMap.delete(key)</code>: Removes the specified key-value pair.</li>
                        </ul>
                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let obj = {};
let weakMap = new WeakMap();
weakMap.set(obj, "value");
console.log(weakMap.get(obj)); // "value"</code></pre>

                        <hr>

                        <h4 class="notes-heading">Conclusion</h4>
                        <p>JavaScript provides a wide variety of built-in objects to help with data manipulation, working with time and dates, handling errors, and much more. Understanding how to effectively use these built-in objects can significantly enhance your ability to work with JavaScript efficiently.</p>
                        <p>Each of these objects has numerous methods and properties that can be used in different scenarios to make your code more robust, readable, and maintainable. The built-in objects form the foundation of much of the JavaScript language, and they are often used in combination to solve complex problems.</p>


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