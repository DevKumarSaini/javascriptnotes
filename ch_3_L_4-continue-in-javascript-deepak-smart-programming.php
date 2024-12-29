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

                    <h3 class="text-center"> JavaScript Continue Statement</h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading">Continue Statement in JavaScript</h4>
                        <p>The <code>continue</code> statement in JavaScript is used within loops (for, while, do...while, etc.) to skip the current iteration of the loop and move directly to the next iteration. In other words, when <code>continue</code> is encountered, the remaining code inside the loop is skipped for the current iteration, and the loop proceeds to the next iteration.</p>
                        <p>It is important to note that <code>continue</code> only works inside loops and will not affect the flow of control outside the loop.</p>

                        <strong>Syntax</strong>
                        <pre><code class="language-javascript">continue;</code></pre>

                        <h5 class="notes-subheading">Optionally, you can use <code>continue</code> with a label in the case of nested loops</h5>
                        <pre><code class="language-javascript">continue label;</code></pre>
                        <p>Where <code>label</code> is a user-defined identifier (string) that refers to the outer loop.</p>

                        <h5 class="notes-subheading mt-4">How <code>continue</code> Works</h5>

                        <ul>
                            <li>In a for loop
                                <ul>
                                    <li>It skips to the next iteration of the loop, which means it goes back to the update expression and then evaluates the loop's condition again.</li>
                                </ul>
                            </li>

                            <li>In a while or do...while loop
                                <ul>
                                    <li>It skips to the next condition check.</li>
                                </ul>
                            </li>
                        </ul>



                        <h5 class="notes-subheading">Use Cases</h5>
                        <ul>
                            <li>Skipping unwanted iterations in loops (e.g., skipping even numbers or skipping empty array elements).</li>
                            <li>Improving code readability by reducing nested if conditions.</li>
                        </ul>

                        <h4 class="notes-heading">Examples of <code>continue</code> in JavaScript</h4>

                        <h5 class="notes-subheading">1. Example with for loop</h5>
                        <p>In this example, we use <code>continue</code> to skip even numbers and print only the odd numbers.</p>
                        <pre><code class="language-javascript">for (let i = 1; i <= 10; i++) {
    if (i % 2 === 0) {
        continue;  // Skip the even numbers
    }
    console.log(i);  // Print only odd numbers
</code></pre>
                        <strong>Output</strong>
                        <pre><code class="language-javascript">1
3
5
7
9</code></pre>

                        <h5 class="notes-subheading mt-4">2. Example with while loop</h5>
                        <p>Here, the <code>continue</code> statement is used to skip numbers that are divisible by 3.</p>
                        <pre><code class="language-javascript">let i = 1;
    while (i <= 10) {
        if (i % 3 === 0) {
            i++;
            continue;  // Skip numbers divisible by 3
        }
        console.log(i);
        i++;
    }</code></pre>
                        <strong>Output</strong>
                        <pre><code class="language-javascript">1
2
4
5
7
8
10</code></pre>

                        <h5 class="notes-subheading mt-4">3. Example with do...while loop</h5>
                        <p>This example shows the use of <code>continue</code> in a do...while loop to skip over numbers divisible by 5.</p>
                        <pre><code class="language-javascript">let i = 1;
    do {
        if (i % 5 === 0) {
            i++;
            continue;  // Skip numbers divisible by 5
        }
        console.log(i);
        i++;
    } while (i <= 15);</code></pre>
                        <p>Output</p>
                        <pre><code class="language-javascript">1
2
3
4
6
7
8
9
11
12
13
14</code></pre>

                        <h5 class="notes-subheading mt-4">4. Using <code>continue</code> with Labels in Nested Loops</h5>
                        <p>In nested loops, you can use a labeled <code>continue</code> to skip iterations in an outer loop. Here's how it works</p>
                        <pre><code class="language-javascript">outerLoop  // Label the outer loop
    for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
            if (j === 1) {
                continue outerLoop;  // Skip the rest of the inner loop and continue to the next iteration of the outer loop
            }
            console.log(`i = ${i}, j = ${j}`);
        }
    }</code></pre>
                        <p>Output</p>
                        <pre><code class="language-javascript">i = 0, j = 0
i = 1, j = 0
i = 2, j = 0</code></pre>


                        <p>In this case, the inner loop is skipped when j equals 1, and the control jumps to the next iteration of the outer loop (i).</p>

                        <h5 class="notes-subheading">5. Using <code>continue</code> with Arrays</h5>
                        <p>Here, we demonstrate how <code>continue</code> can be used to skip empty values or null entries in an array.</p>
                        <pre><code class="language-javascript">let arr = [1, 2, null, 4, 5, undefined, 7];
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == null) {
            continue;  // Skip the null or undefined values
        }
        console.log(arr[i]);
    }</code></pre>
                        <p>Output</p>
                        <pre><code class="language-javascript">1
2
4
5
7</code></pre>

                        <h5 class="notes-subheading mt-4">Key Points to Remember</h5>
                        <ul>
                            <li> <strong>Works Only in Loops </strong> The <code>continue</code> statement can only be used inside loops (for, while, do...while), and it skips to the next iteration of the loop.</li>
                            <li> <strong>Works with Labels</strong> In the case of nested loops, you can use <code>continue</code> with a label to skip an outer loop’s iteration.</li>
                            <li> <strong>Does Not Exit the Loop</strong> Unlike <code>break</code>, which exits the loop entirely, <code>continue</code> simply skips the remaining code for the current iteration and moves to the next iteration.</li>
                            <li> <strong>Avoid Overuse</strong> While <code>continue</code> is useful for skipping iterations, excessive use can make code harder to read and maintain, especially in complex loops.</li>
                        </ul>

                        <h5 class="notes-subheading">Note</h5>
                        <ul>
                            <li>The <code>continue</code> statement is useful for skipping certain iterations in loops based on conditions.</li>
                            <li>It can make code cleaner by avoiding nested if statements.</li>
                            <li>It works in all loop types, and in nested loops, you can even label which loop you want to skip.</li>
                        </ul>

                        <p>Let me know if you need more examples or clarifications!</p>

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