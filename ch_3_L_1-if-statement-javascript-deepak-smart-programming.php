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

                    <h3 class="text-center"> JavaScript If Statement</h3>
                    <hr />

                    <section>

                        <h4>JavaScript <code>if</code> Statements</h4>
                        <p>The <code>if</code> statement in JavaScript is a control flow statement that allows you to execute a block of code based on a specified condition. If the condition evaluates to <code>true</code>, the code within the <code>if</code> block runs; if it evaluates to <code>false</code>, the code is skipped.</p>

                        <h5 class="notes-subheading">Types of <code>if</code> Statements</h5>
                        <ol>
                            <li><strong>Simple <code>if</code> Statement</strong></li>
                            <li><strong><code>if...else</code> Statement</strong></li>
                            <li><strong><code>if...else if...else</code> Statement</strong></li>
                            <li><strong>Nested <code>if</code> Statement</strong></li>
                            <li><strong>Ternary Operator (Conditional Operator)</strong></li>
                        </ol>






                        <h4 class="notes-heading mt-5">1. Simple <code>if</code> Statement</h4>
                        <p><strong>Definition:</strong> Executes a block of code if the condition is true.</p>
                        <pre><code class="language-javascript">let age = 18;

if (age &gt;= 18) {
    console.log("You are an adult.");
}
</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code class="language-javascript">You are an adult.</code></pre>






                        <h4 class="notes-heading mt-5">2. <code>if...else</code> Statement</h4>
                        <p><strong>Definition:</strong> Executes one block of code if the condition is true and another block if it is false.</p>
                        <pre><code class="language-javascript">let age = 16;

if (age &gt;= 18) {
    console.log("You are an adult.");
} else {
    console.log("You are not an adult.");
}
</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code class="language-javascript">You are not an adult.</code></pre>






                        <h4 class="notes-heading mt-5">3. <code>if...else if...else</code> Statement</h4>
                        <p><strong>Definition:</strong> Allows you to check multiple conditions. If the first condition is false, it checks the next condition, and so on.</p>
                        <pre><code class="language-javascript">let score = 85;

if (score &gt;= 90) {
    console.log("Grade: A");
} else if (score &gt;= 80) {
    console.log("Grade: B");
} else if (score &gt;= 70) {
    console.log("Grade: C");
} else {
    console.log("Grade: F");
}
</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code class="language-javascript">Grade: B</code></pre>

                        <h4 class="notes-heading mt-5">4. Nested <code>if</code> Statement</h4>
                        <p><strong>Definition:</strong> An <code>if</code> statement inside another <code>if</code> statement, allowing for more complex conditions.</p>
                        <pre><code class="language-javascript">let age = 20;
let hasLicense = true;

if (age &gt;= 18) {
    if (hasLicense) {
        console.log("You can drive.");
    } else {
        console.log("You cannot drive without a license.");
    }
} else {
    console.log("You are not old enough to drive.");
}
</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code class="language-javascript">You can drive.</code></pre>






                        <h4 class="notes-heading mt-5">5. Ternary Operator (Conditional Operator)</h4>
                        <p><strong>Definition:</strong> A shorthand way to write an <code>if...else</code> statement. It uses the syntax: <code>condition ? exprIfTrue : exprIfFalse</code>.</p>
                        <pre><code class="language-javascript">let age = 17;
let canVote = (age &gt;= 18) ? "You can vote." : "You cannot vote.";

console.log(canVote);
</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code class="language-javascript">You cannot vote.</code></pre>

                        <h4 class="notes-heading mt-5">Summary of Programs</h4>
                        <p>Here’s a summary of all the types of <code>if</code> statements in one program:</p>
                        <pre><code class="language-javascript">let age = 20;
let score = 85;
let hasLicense = true;

// Simple if
if (age &gt;= 18) {
    console.log("You are an adult.");
}

// if...else
if (age &gt;= 18) {
    console.log("You are an adult.");
} else {
    console.log("You are not an adult.");
}

// if...else if...else
if (score &gt;= 90) {
    console.log("Grade: A");
} else if (score &gt;= 80) {
    console.log("Grade: B");
} else if (score &gt;= 70) {
    console.log("Grade: C");
} else {
    console.log("Grade: F");
}

// Nested if
if (age &gt;= 18) {
    if (hasLicense) {
        console.log("You can drive.");
    } else {
        console.log("You cannot drive without a license.");
    }
} else {
    console.log("You are not old enough to drive.");
}

// Ternary Operator
let canVote = (age &gt;= 18) ? "You can vote." : "You cannot vote.";
console.log(canVote);
</code></pre>

                        <h5 class="notes-subheading mt-4">Output of Summary Program</h5>
                        <pre><code class="language-javascript">You are an adult.
You are an adult.
Grade: B
You can drive.
You can vote.</code></pre>

                        <p>These examples illustrate how <code>if</code> statements work in JavaScript, providing flexibility in controlling the flow of execution based on conditions. If you have any further questions or need additional examples, feel free to ask!</p>

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
    <div class="footer mt-5">
        <div class="container">
            <div class="row mt-5">
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