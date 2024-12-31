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

                    <h3 class="text-center"> JavaScript Switch Statement</h3>
                    <hr />

                    <section>

                        <!-- Switch statement Introduction -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript <code>switch</code> Statement</h4>
                            <div class="ms-4">
                                <p>The <code>switch</code> statement is a control flow statement that allows you to execute different blocks of code based on the value of a variable or expression. It is often used as an alternative to <code>if...else</code> statements when dealing with multiple conditions, making the code cleaner and easier to read.</p>

                                <h5 class="notes-subheading">Syntax of <code>switch</code></h5>
                                <pre><code class="language-java">switch (expression) {
        case value1:
            // Code to be executed if expression equals value1
            break;
        case value2:
            // Code to be executed if expression equals value2
            break;
        // You can add more cases as needed
        default:
            // Code to be executed if expression doesn't match any case
    }
    </code></pre>

                                <h5 class="notes-subheading mt-4">How the <code>switch</code> Statement Works</h5>
                                <ol>
                                    <li><strong>Expression Evaluation:</strong> The <code>switch</code> statement evaluates the expression once.</li>
                                    <li><strong>Case Matching:</strong> It compares the result with each <code>case</code> value.</li>
                                    <li><strong>Code Execution:</strong> If a match is found, the corresponding block of code runs until a <code>break</code> statement is encountered, which exits the <code>switch</code>.</li>
                                    <li><strong>Default Case:</strong> If no cases match, the code in the <code>default</code> block runs (if provided).</li>
                                </ol>

                                <h5 class="notes-subheading ">Example of <code>switch</code> Statement</h5>
                                <p>Here's a simple example using the <code>switch</code> statement:</p>
                                <pre><code class="language-java">let fruit = "apple";
switch (fruit) {
    case "banana":
        console.log("You selected a banana.");
        break;
    case "apple":
        console.log("You selected an apple.");
        break;
    case "orange":
        console.log("You selected an orange.");
        break;
    default:
        console.log("Unknown fruit.");
}
</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-java">You selected an apple.</code></pre>

                                <h6 class="notes-sub-subheading mt-3">Important Points</h6>
                                <ul>
                                    <li><strong>Break Statement:</strong> Each <code>case</code> should end with a <code>break</code> statement to prevent the execution from falling through to the next case.</li>
                                    <li><strong>Fall-Through Behavior:</strong> If <code>break</code> is omitted, execution will continue into the next case, which might be desirable in some scenarios.</li>
                                </ul>
                            </div>
                        </div>


                        <hr class="mt-4 mb-4">


                        <!-- Javascript switch statement Explanation-->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript <code>switch</code> Statement Explanation</h4>
                            <div class="ms-4">
                                <ol>
                                    <li><strong>Evaluation:</strong> The <code>switch</code> statement first evaluates the expression provided within its parentheses.</li>
                                    <li><strong>Comparison:</strong> The evaluated expression is then compared to each case value using strict equality (<code>===</code>).</li>
                                    <li><strong>Execution:</strong>
                                        <ul>
                                            <li>If a case value matches the expression, the code block following that case is executed.</li>
                                            <li>If no case matches, the code within the <code>default</code> block (if present) is executed.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Fall-through Behavior:</strong> If a <code>break</code> statement is not encountered within a case block, execution continues to the next case block, even if that subsequent case does not match the expression. This is called "fall-through" behavior.</li>
                                </ol>

                                <strong>Example:</strong>
                                <pre><code class="language-javascript">let day = "Sunday";
        
switch (day) {
    case "Sunday":
        console.log("It's the weekend!"); 
        // Fall-through: Execution continues to the next case
    case "Saturday":
        console.log("Time to relax!"); 
        break; // Stops the fall-through 
    case "Monday":
        console.log("Back to work!");
        break;
    default:
        console.log("Weekday");
}
</code></pre>

                                <p>In this example, if <code>day</code> is "Sunday," both "It's the weekend!" and "Time to relax!" will be logged to the console because of the fall-through behavior.</p>
                            </div>
                        </div>

                        <hr class="mb-4 mt-4">


                        <!-- Fall-Through Behavior of Switch -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Fall-Through Behavior Of Switch</h4>
                            <div class="ms-4">
                                <ul>
                                    <li>When a case matches the expression in the switch statement, the code within that case block is executed.
                                    </li>
                                    <li>If a break statement is not encountered within that case block, execution will continue to the next case block, even if that subsequent case does not match the expression.</li>
                                </ul>
                                <pre><code class="language-java">let day = 2;
let dayName;

switch (day) {
    case 1:
        dayName = "Monday";
        break;
    case 2:
    case 3:
        dayName = "Tuesday or Wednesday";
        break;
    case 4:
        dayName = "Thursday";
        break;
    case 5:
        dayName = "Friday";
        break;
    default:
        dayName = "Weekend";
}

console.log(dayName);
</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-java">Tuesday or Wednesday</code></pre>

                                <h5 class="notes-subheading mt-4">Important Point</h5>
                                <ul>
                                    <li>Fall-through behavior can be intentional in some cases, such as when you want to execute the same code for multiple case values.</li>
                                    <li>However, it's often unintentional and can lead to unexpected results. Always use break statements within each case block to prevent unintended fall-through.</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">


                        <!-- Using Expressions in switch -->
                        <div>
                            <h4 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Using Expressions in <code>switch</code></h4>
                            <div class="ms-4">
                                <p>You can also use expressions in the <code>switch</code> statement. For example:</p>
                                <pre><code class="language-java">let num = 10;
switch (true) {
    case (num &lt; 5):
        console.log("Number is less than 5");
        break;
    case (num &lt; 15):
        console.log("Number is less than 15");
        break;
    default:
        console.log("Number is 15 or more");
}</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-java">Number is less than 15</code></pre>

                                <h4 class="notes-subheading mt-4">Summary of <code>switch</code> Statement Types</h4>
                                <ol>
                                    <li><strong>Simple <code>switch</code>:</strong> Used for straightforward comparisons.</li>
                                    <li><strong>Fall-Through Behavior:</strong> Multiple cases can execute the same block of code.</li>
                                    <li><strong>Expressions in <code>switch</code>:</strong> Allows for more complex condition checks.</li>
                                </ol>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">


                        <!-- Example of switch program -->
                        <div>
                            <h4 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i>Another Program of Switch</h4>
                            <div class="ms-4">
                                <p>Here’s a complete program demonstrating various aspects of the <code>switch</code> statement:</p>
                                <pre><code class="language-java">let score = 85;
let grade;

switch (true) {
    case (score &gt;= 90):
        grade = "A";
        break;
    case (score &gt;= 80):
        grade = "B";
        break;
    case (score &gt;= 70):
        grade = "C";
        break;
    case (score &gt;= 60):
        grade = "D";
        break;
    default:
        grade = "F";
}

console.log(`Your grade is: ${grade}`);
</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-java">Your grade is: B</code></pre>

                                <p>The <code>switch</code> statement in JavaScript provides a flexible way to handle multiple conditions based on a single variable or expression, making it a valuable tool for controlling program flow. If you have any further questions or need more examples, feel free to ask!</p>
                            </div>
                        </div>



                        <hr class="mt-4 mb-4">

                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Comparison of <code>if-else</code> Statement and <code>switch</code> Statement</h4>
                            <div class="ms-4">

                                <table class="table table-bordered table-striped table-hover">
                                    <tr class="table-dark">
                                        <th><strong>Feature</strong></th>
                                        <th>If-else Statement</th>
                                        <th>Switch Statement</th>
                                    </tr>
                                    <tr>
                                        <td><strong>Purpose</strong></td>
                                        <td>Evaluate conditions based on logical expressions.</td>
                                        <td>Evaluate a single expression and execute code based on its strict equality to specific values.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Conditions</strong></td>
                                        <td>Can handle various logical expressions (e.g., >, <,>=, <=, &&, !=).</td>
                                        <td>Strictly compares against specific values.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Flexibility</strong></td>
                                        <td>More flexible for complex conditions and ranges of values.</td>
                                        <td>Less flexible for complex conditions or comparisons beyond strict equality.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Efficiency</strong></td>
                                        <td>Can be less efficient for multiple comparisons, especially with nested if-else blocks.</td>
                                        <td>Can be more efficient for multiple comparisons with a single expression.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Readability</strong></td>
                                        <td>Readability can decrease with deeply nested if-else blocks.</td>
                                        <td>Often more readable for multiple comparisons with a single expression.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Fall-through</strong></td>
                                        <td>Not applicable.</td>
                                        <td>Can have fall-through behavior if break statements are omitted.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>



                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="ch_3_L_3-break-statement-in-javascript-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

        </div>

        <div class="col-md-2 col-12 bg-secondary">this is for advertisement</div>

    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

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