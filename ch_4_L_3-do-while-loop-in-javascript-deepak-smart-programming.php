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

                    <h3 class="text-center"> JavaScript DO While Loop</h3>
                    <hr />

                    <section>


                        <h2><strong>`do...while` Loop in JavaScript</strong></h2>
                        <p>The <code>do...while</code> loop in JavaScript is similar to the <code>while</code> loop, but with a key difference: the condition is checked after the code inside the loop is executed. This guarantees that the code inside the loop will be executed at least once, even if the condition is false initially.</p>

                        <hr>

                        <h3><strong>Syntax:</strong></h3>
                        <pre><code>do {
    // Code to be executed
} while (condition);</code></pre>
                        <ul>
                            <li><strong>Code to be executed:</strong> The block of code that runs inside the loop.</li>
                            <li><strong>Condition:</strong> A boolean expression that is evaluated after each iteration. The loop continues running as long as the condition is true. If the condition evaluates to false, the loop stops.</li>
                        </ul>

                        <h3><strong>How the <code>do...while</code> Loop Works:</strong></h3>
                        <ol>
                            <li>The code inside the loop is executed first, regardless of whether the condition is true or false.</li>
                            <li>After the loop executes, the condition is evaluated.</li>
                            <li>If the condition is true, the loop continues.</li>
                            <li>If the condition is false, the loop terminates, and the program continues with the code after the loop.</li>
                        </ol>

                        <h3><strong>Key Points About <code>do...while</code>:</strong></h3>
                        <ul>
                            <li>The condition is checked after the loop executes, which means the loop will always run at least once, even if the condition is false initially.</li>
                            <li>It's useful when you need the loop body to run at least once, such as when prompting the user for input or performing a task that requires one execution before checking the condition.</li>
                        </ul>

                        <h3><strong>Basic Example of <code>do...while</code> Loop:</strong></h3>
                        <p>This example prints the numbers from 1 to 5 using a <code>do...while</code> loop:</p>
                        <pre><code>let i = 1;

do {
    console.log(i);  // Code to execute
    i++;  // Increment
} while (i <= 5);  // Condition checked after each iteration</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>1
2
3
4
5</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <ul>
                            <li>The loop starts with <code>i = 1</code>.</li>
                            <li>The code inside the loop is executed first, so <code>console.log(i)</code> prints 1.</li>
                            <li>Then <code>i</code> is incremented (<code>i++</code>), and the condition <code>i <= 5</code> is checked.</li>
                            <li>This continues until <code>i</code> becomes 6, at which point the condition evaluates to false, and the loop stops.</li>
                        </ul>

                        <h3><strong>Key Difference from <code>while</code> Loop:</strong></h3>
                        <ul>
                            <li><strong><code>while</code> loop:</strong> The condition is checked before the loop body is executed. If the condition is false initially, the loop may not run at all.</li>
                            <li><strong><code>do...while</code> loop:</strong> The condition is checked after the loop body executes, so the loop will always execute at least once.</li>
                        </ul>

                        <h3><strong>Example: Loop Runs at Least Once</strong></h3>
                        <pre><code>let input;

do {
    input = prompt("Enter a number (or 'exit' to quit):");
    console.log(`You entered: ${input}`);
} while (input !== 'exit');</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <ul>
                            <li>This loop will prompt the user for input at least once. If the user types 'exit', the loop will stop; otherwise, it will continue prompting for input.</li>
                            <li>Even if the user does not enter anything the first time, the loop will still run once before checking the condition.</li>
                        </ul>

                        <h3><strong>Example: Using <code>do...while</code> for User Validation</strong></h3>
                        <pre><code>let number;

do {
    number = parseInt(prompt("Enter a number greater than 0:"));
} while (number <= 0);

console.log(`You entered a valid number: ${number}`);</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <ul>
                            <li>The loop ensures the user cannot proceed until they enter a number greater than 0.</li>
                            <li>The condition <code>number <= 0</code> is checked after the user input is processed, ensuring the loop runs at least once even if the user enters an invalid number initially.</li>
                        </ul>

                        <h3><strong>Example Where Condition is Initially False (Still Executes Once):</strong></h3>
                        <pre><code>let number = 10;

do {
    console.log(number);  // This will print 10 once
    number--;  // Decrement number
} while (number < 5);  // Condition is false initially</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>10</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <ul>
                            <li>The <code>do...while</code> loop will execute at least once, even though the condition <code>number < 5</code> is false initially.</li>
                            <li>In this case, it prints 10 before checking the condition, and since the condition is false, the loop stops after one iteration.</li>
                        </ul>

                        <h3><strong>Example with User Input (Simulated):</strong></h3>
                        <pre><code>let userInput;

do {
    userInput = prompt('Enter a number greater than 10 (or "exit" to stop):');
    console.log(`You entered: ${userInput}`);
} while (userInput !== 'exit');</code></pre>

                        <h3><strong>Explanation:</strong></h3>
                        <ul>
                            <li>The loop will prompt the user for input at least once.</li>
                            <li>If the user does not enter "exit", it will keep prompting them until they do so.</li>
                            <li>The loop ensures that the code is executed at least once, even if the user enters something on the first prompt.</li>
                        </ul>

                        <hr>

                        <h3><strong>Using <code>break</code> and <code>continue</code> in a <code>do...while</code> Loop</strong></h3>
                        <ul>
                            <li><strong><code>break</code></strong>: Exits the loop early.</li>
                            <li><strong><code>continue</code></strong>: Skips to the next iteration of the loop.</li>
                        </ul>

                        <h4><strong>Example with <code>break</code>:</strong></h4>
                        <pre><code>let counter = 0;

do {
    console.log(counter);
    counter++;
    if (counter === 3) {
        break;  // Exit the loop when counter reaches 3
    }
} while (counter < 5);</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>0
1
2</code></pre>

                        <h4><strong>Example with <code>continue</code>:</strong></h4>
                        <pre><code>let counter = 0;

do {
    counter++;
    if (counter === 3) {
        continue;  // Skip this iteration when counter is 3
    }
    console.log(counter);
} while (counter < 5);</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre><code>1
2
4
5</code></pre>

                        <hr>

                        <h3><strong>When to Use <code>do...while</code> Loop:</strong></h3>
                        <ul>
                            <li>When you need to ensure the loop body runs at least once, even if the condition is false initially. For example, when asking for user input or performing a task that requires one iteration before checking the condition.</li>
                            <li>When you want to execute code based on a condition that is evaluated after the first iteration.</li>
                        </ul>

                        <hr>

                        <h3><strong>Difference Between <code>do...while</code> and <code>while</code> Loops:</strong></h3>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th><code>do...while</code> Loop</th>
                                    <th><code>while</code> Loop</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Condition Check</td>
                                    <td>Condition is checked after the loop body executes.</td>
                                    <td>Condition is checked before the loop body executes.</td>
                                </tr>
                                <tr>
                                    <td>Guaranteed Execution</td>
                                    <td>Loop body will execute at least once, even if the condition is false initially.</td>
                                    <td>Loop body might not execute at all if the condition is false initially.</td>
                                </tr>
                                <tr>
                                    <td>Use Case</td>
                                    <td>Use when you need to execute the block of code at least once before checking the condition.</td>
                                    <td>Use when you want to loop while a condition is true, with the possibility that it might never run if the condition is false initially.</td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>

                        <h3><strong>Summary of <code>do...while</code> Loop:</strong></h3>
                        <ul>
                            <li>The <code>do...while</code> loop is used to execute a block of code at least once, and then repeatedly execute it as long as the given condition remains true.</li>
                            <li>The condition is checked after the loop runs, so the loop is guaranteed to run at least once.</li>
                            <li>It is particularly useful when you need to perform an action that should happen before checking a condition, such as prompting the user for input or validating data.</li>
                        </ul>


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