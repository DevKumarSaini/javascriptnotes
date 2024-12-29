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

                    <h3 class="text-center"> JavaScript Data types</h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading">Data Types in JavaScript</h4>

                        <p>In JavaScript, a <code>data type</code> is a classification that specifies which type of value a variable can hold. Understanding data types is essential for effective programming, as it helps determine how data is stored and manipulated.</p>

                        <h5 class="notes-subheading">Types of Data Types in JavaScript</h5>

                        <p>JavaScript has two main categories of data types: <code>Primitive Data Types</code> and <code>Reference Data Types</code>.</p>

                        <h6 class="notes-sub-subheading">1. Primitive Data Types</h6>
                        <p>Primitive data types are the most basic types of data in JavaScript. They are immutable (cannot be changed) and are stored directly in the variable.</p>

                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>Data Type</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>String</strong></td>
                                    <td>Represents a sequence of characters. Can be defined using single quotes, double quotes, or backticks.</td>
                                    <td><code>let name = "Alice";</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Number</strong></td>
                                    <td>Represents numeric values, including integers and floating-point numbers.</td>
                                    <td><code>let age = 30;</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Boolean</strong></td>
                                    <td>Represents a logical entity that can be either <code>true</code> or <code>false</code>.</td>
                                    <td><code>let isStudent = true;</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Undefined</strong></td>
                                    <td>A variable that has been declared but has not been assigned a value.</td>
                                    <td><code>let x; console.log(x); // Output: undefined</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Null</strong></td>
                                    <td>Represents the intentional absence of any object value.</td>
                                    <td><code>let emptyValue = null;</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Symbol</strong></td>
                                    <td>A unique and immutable primitive value, often used as object property keys.</td>
                                    <td><code>let sym = Symbol("id");</code></td>
                                </tr>
                                <tr>
                                    <td><strong>BigInt</strong></td>
                                    <td>Represents integers with arbitrary precision, allowing for very large integers.</td>
                                    <td><code>let bigNumber = 1234567890123456789012345678901234567890n;</code></td>
                                </tr>
                            </tbody>
                        </table>

                        <h6 class="notes-sub-heading mt-4">2. Reference Data Types</h6>
                        <p>Reference data types are more complex and are mutable. They are stored by reference, meaning that multiple variables can refer to the same object.</p>

                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>Data Type</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Object</strong></td>
                                    <td>A collection of key-value pairs. Objects can hold various data types, including other objects.</td>
                                    <td><code>let person = { name: "Alice", age: 30 };</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Array</strong></td>
                                    <td>A special type of object used to store ordered collections of values. Arrays can hold multiple values in a single variable and are indexed numerically.</td>
                                    <td><code>let colors = ["red", "green", "blue"];</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Function</strong></td>
                                    <td>A callable object that can be invoked to perform actions or return values. Functions are first-class objects in JavaScript.</td>
                                    <td><code>function greet() { return "Hello!"; }</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Date</strong></td>
                                    <td>Represents dates and times. JavaScript provides a built-in Date object for handling date-related operations.</td>
                                    <td><code>let now = new Date();</code></td>
                                </tr>
                                <tr>
                                    <td><strong>RegExp</strong></td>
                                    <td>Represents regular expressions, which are patterns used to match character combinations in strings.</td>
                                    <td><code>let pattern = /abc/;</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Error</strong></td>
                                    <td>Represents runtime errors that can occur in JavaScript code, allowing developers to handle exceptions gracefully.</td>
                                    <td><code>let error = new Error("Something went wrong!");</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Map</strong></td>
                                    <td>A collection of keyed data items, similar to objects but with better performance for frequent additions and removals of key-value pairs.</td>
                                    <td><code>let map = new Map();</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Set</strong></td>
                                    <td>A collection of unique values, meaning it can hold only distinct values without duplicates.</td>
                                    <td><code>let set = new Set([1, 2, 3, 2]);</code></td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="notes-heading mt-4">Key Difference of Data-types</h4>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>Concept</th>
                                    <th>Primitive Data Types</th>
                                    <th>Reference Data Types</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mutability</td>
                                    <td>Immutable (cannot be changed)</td>
                                    <td>Mutable (contents can be changed)</td>
                                </tr>
                                <tr>
                                    <td>Memory Storage</td>
                                    <td>Stored directly in memory</td>
                                    <td>Stores a reference to the location of the data in memory</td>
                                </tr>
                                <tr>
                                    <td>Assignment</td>
                                    <td>A new copy of the value is created</td>
                                    <td>Both variables point to the same underlying data in memory</td>
                                </tr>
                            </tbody>
                        </table>


                        <p><strong>Note: </strong>Understanding these data types is crucial for effectively working with data in JavaScript, as it influences how you declare variables, perform operations, and manage data structures. If you have more questions or need further details, feel free to ask!</p>

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