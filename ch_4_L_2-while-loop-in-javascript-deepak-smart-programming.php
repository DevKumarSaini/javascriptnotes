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

                    <h3 class="text-center"> JavaScript While Loop</h3>
                    <hr />

                    <section>

                        <h2><strong>`while` Loop in JavaScript</strong></h2>
                        <p>The <code>while</code> loop is one of the most fundamental looping structures in JavaScript. It is used to execute a block of code as long as a specified condition evaluates to <code>true</code>. The loop keeps running the code until the condition becomes <code>false</code>.</p>

                        <hr>

                        <h3><strong>Syntax:</strong></h3>
                        <pre><code>while (condition) {
    // Code to be executed
}</code></pre>
                        <ul>
                            <li><strong>condition</strong>: The condition is evaluated before each iteration. If it evaluates to <code>true</code>, the loop executes the code inside the block. If it evaluates to <code>false</code>, the loop exits and the code stops executing.</li>
                        </ul>

                        <h3><strong>How the <code>while</code> Loop Works:</strong></h3>
                        <ol>
                            <li>The <code>condition</code> is evaluated before each iteration.</li>
                            <li>If the condition is <code>true</code>, the code inside the loop block is executed.</li>
                            <li>After the code inside the loop block is executed, the condition is checked again.</li>
                            <li>This process repeats until the condition evaluates to <code>false</code>.</li>
                        </ol>

                        <h3><strong>Basic Example:</strong></h3>
                        <p>Here’s a simple example of a <code>while</code> loop that prints numbers from 1 to 5:</p>
                        <pre><code>let i = 1;

while (i <= 5) {
    console.log(i);
    i++;  // Incrementing i by 1
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>1
2
3
4
5</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <ul>
                            <li><strong>Initialization</strong>: The variable <code>i</code> is initialized to 1.</li>
                            <li><strong>Condition</strong>: The condition <code>i <= 5</code> is checked. As long as <code>i</code> is less than or equal to 5, the loop will continue.</li>
                            <li><strong>Increment</strong>: After each iteration, <code>i</code> is incremented by 1 (<code>i++</code>).</li>
                        </ul>

                        <hr>

                        <h3><strong>Example with Infinite Loop (Caution):</strong></h3>
                        <p>If you forget to modify the loop condition inside the loop block, you could accidentally create an infinite loop. Here’s an example:</p>
                        <pre><code>let i = 1;

while (i <= 5) {
    console.log(i);
    // Missing increment, this creates an infinite loop
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>1
1
1
...</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <p>In this example, the value of <code>i</code> is never changed, so the condition <code>i <= 5</code> will always remain <code>true</code>, causing an infinite loop.</p>
                        <p>To avoid infinite loops, always ensure that the loop condition will eventually become <code>false</code> or that the loop has a way to terminate after a set number of iterations.</p>

                        <hr>

                        <h3><strong><code>while</code> Loop with <code>break</code> and <code>continue</code>:</strong></h3>
                        <ul>
                            <li><strong><code>break</code></strong>: Exits the loop entirely, even if the condition is still <code>true</code>.</li>
                            <li><strong><code>continue</code></strong>: Skips the current iteration and proceeds with the next one.</li>
                        </ul>

                        <h4><strong>Example with <code>break</code>:</strong></h4>
                        <pre><code>let i = 1;

while (i <= 5) {
    if (i === 3) {
        break;  // Exit the loop when i equals 3
    }
    console.log(i);
    i++;
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>1
2</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <p>The loop stops when <code>i</code> equals 3 due to the <code>break</code> statement.</p>

                        <h4><strong>Example with <code>continue</code>:</strong></h4>
                        <pre><code>let i = 1;

while (i <= 5) {
    if (i === 3) {
        i++;
        continue;  // Skip the iteration when i equals 3
    }
    console.log(i);
    i++;
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>1
2
4
5</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <p>When <code>i</code> equals 3, the <code>continue</code> statement skips the current iteration, and the value 3 is not printed.</p>

                        <hr>

                        <h3><strong>When to Use the <code>while</code> Loop:</strong></h3>
                        <ul>
                            <li>Use the <code>while</code> loop when you don't know in advance how many times the loop will need to execute, but you know the loop should continue as long as a specific condition is true.</li>
                            <li>It’s useful when you want to repeat something while a condition remains true and the number of iterations is not predetermined.</li>
                        </ul>

                        <hr>

                        <h3><strong>Summary:</strong></h3>
                        <ul>
                            <li>The <code>while</code> loop repeats a block of code as long as a specified condition evaluates to <code>true</code>.</li>
                            <li>Make sure the condition will eventually become <code>false</code> to avoid infinite loops.</li>
                            <li>Use <code>break</code> to exit the loop early and <code>continue</code> to skip the current iteration.</li>
                        </ul>

                        <p>Let me know if you need further clarification or examples!</p>



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