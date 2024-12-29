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

                    <h3 class="text-center"> JavaScript Syntax</h3>
                    <hr />
                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>What is Syntax?</h4>
                        <p>In programming, <strong>syntax</strong> refers to the set of rules that defines the combinations of symbols and characters that are considered to be correctly structured programs in a given programming language. Just like grammar in human languages, syntax determines how code must be written for the compiler or interpreter to understand it.</p>

                        <h5 class="notes-subheading">Why Use Syntax in Programming Languages?</h5>
                        <ol>
                            <li><strong>Clarity</strong>: Syntax provides a clear structure, making it easier for programmers to read and understand code.</li>
                            <li><strong>Error Detection</strong>: Proper syntax helps in catching errors during compilation or interpretation, which makes debugging easier.</li>
                            <li><strong>Functionality</strong>: Syntax defines how commands and functions are executed, enabling developers to leverage the full power of the programming language.</li>
                        </ol>

                        <h4 class="notes-heading">JavaScript Syntax</h4>
                        <p>JavaScript syntax includes various elements, such as:</p>
                        <ul>
                            <li><strong>Variables</strong>: Declared using <code>var</code>, <code>let</code>, or <code>const</code>.
                                <pre><code class="language-javascript">var a = 10</code></pre>
                            </li>

                            <li class="mt-4"><strong>Control Structures</strong>: Such as <code>if</code>, <code>for</code>, <code>while</code>, etc.

                                <pre><code class="language-javascript">// if example
if(a>b){
    console.log(`${a} is greater`)
}

// for example
for(let i=0; i<=10; i++){
    console.log("Value of i is -> "+i)
}

// while example
let i=1 
while(i<10){
    console.log(i)
    i = i+1
}
                                </code></pre>
                            </li>

                            <li class="mt-4"><strong>Functions</strong>: Defined using the <code>function</code> keyword or arrow functions (<code>=&gt;</code>).
                                <pre><code class="language-javascript">function greet(name){
    console.log(`Welcome ${name} in our community`)
}</code></pre>
                            </li>

                            <li class="mt-4"><strong>Objects and Arrays</strong>: Used to store collections of data.
                                <pre><code class="language-javascript">// A simple JavaScript object
const person = {
    name: "John Doe",
    age: 30,
    isEmployed: true,
    greet: function() {
        console.log("Hello, my name is " + this.name);
    }
}

// A simple JavaScript array
const fruits = ["Apple", "Banana", "Cherry"];
</code></pre>

                            </li>
                        </ul>

                        <h4 class="notes-heading mt-5">Basic JavaScript Program</h4>
                        <p>Here's a simple JavaScript program that defines a function to add two numbers and logs the result to the console:</p>
                        <pre><code class="language-javascript">// Function to add two numbers
function addNumbers(a, b) {
    return a + b;
}

// Fixed values
const fixedValue1 = 5;
const fixedValue2 = 10;

// Variable value
let variableValue = 15;

// Using the function with fixed values
let result = addNumbers(fixedValue1, fixedValue2);
console.log("Sum of fixed values: " + result);

// Using the function with a variable value
result = addNumbers(variableValue, 20);
console.log("Sum of variable value and 20: " + result);
</code></pre>

                        <h4 class="notes-heading mt-4">Fixed Value vs. Variable Value</h4>
                        <ul>
                            <li><strong>Fixed Value</strong>: Also known as a constant or literal, it is a value that does not change throughout the program. For example, <code>5</code> and <code>10</code> in the above program are fixed values. They remain the same whenever they are used.</li>
                            <li><strong>Variable Value</strong>: This is a value that can change during the execution of the program. For example, <code>variableValue</code> is a variable that can be modified at any point in the code. You can assign different values to it, and its value can change based on the program's logic.</li>
                        </ul>

                        <p><strong>note :</strong>Syntax is crucial for writing clear, functional code in programming languages like JavaScript. Understanding fixed and variable values helps you manage data and logic effectively in your programs.</p>
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