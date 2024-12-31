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

                    <h3 class="text-center"> JavaScript do...while Loop</h3>
                    <hr />

                    <section>
                        <!-- Introduction  to do...while -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> do...while Loop</strong></h2>
                                <div class="ms-4">
                                    <p>The <code>do...while</code> loop in JavaScript is similar to the <code>while</code> loop, but with a key difference: the condition is checked after the code inside the loop is executed. This guarantees that the code inside the loop will be executed at least once, even if the condition is false initially.</p>
                                    <div class="ms-4">
                                        <strong>Syntax:</strong></h5>
                                        <pre><code class="language-javascript">do {
    // Code to be executed
} while (condition);</code></pre>
                                        <ul>
                                            <li>Code to be executed:</strong> The block of code that runs inside the loop.</li>
                                            <li>Condition:</strong> A boolean expression that is evaluated after each iteration. The loop continues running as long as the condition is true. If the condition evaluates to false, the loop stops.</li>
                                        </ul>

                                        <strong>How the <code>do...while</code> Loop Works:</strong></h5>
                                        <ol>
                                            <li>The code inside the loop is executed first, regardless of whether the condition is true or false.</li>
                                            <li>After the loop executes, the condition is evaluated.</li>
                                            <li>If the condition is true, the loop continues.</li>
                                            <li>If the condition is false, the loop terminates, and the program continues with the code after the loop.</li>
                                        </ol>

                                        <strong>Key Points About <code>do...while</code>:</strong></h5>
                                        <ul>
                                            <li>The condition is checked after the loop executes, which means the loop will always run at least once, even if the condition is false initially.</li>
                                            <li>It's useful when you need the loop body to run at least once, such as when prompting the user for input or performing a task that requires one execution before checking the condition.</li>
                                        </ul>
                                    </div>
                                </div>
                        </div>


                        <hr class="mt-4 mb-4">


                        <!-- 1  Example of do-while loop  -->
                        <div>
                            <h5 class="notes-subheading">1. Basic Example of <code>do...while</code> Loop:</strong></h5>
                            <div class="ms-3">
                                <p>This example prints the numbers from 1 to 5 using a <code>do...while</code> loop:</p>
                                <pre><code class="language-javascript">let i = 1;
        
        do {
            console.log(i);  // Code to execute
            i++;  // Increment
        } while (i <= 5);  // Condition checked after each iteration</code></pre>
                                <strong>Output:</strong>
                                <pre><code class="language-javascript">1
        2
        3
        4
        5</code></pre>

                                <strong>Explanation:</strong></h5>
                                <ul>
                                    <li>The loop starts with <code>i = 1</code>.</li>
                                    <li>The code inside the loop is executed first, so <code>console.log(i)</code> prints 1.</li>
                                    <li>Then <code>i</code> is incremented (<code>i++</code>), and the condition <code>i <= 5</code> is checked.</li>
                                    <li>This continues until <code>i</code> becomes 6, at which point the condition evaluates to false, and the loop stops.</li>
                                </ul>

                                <strong>Key Difference from <code>while</code> Loop:</strong></h5>
                                <ul>
                                    <li><code>while</code> loop:</strong> The condition is checked before the loop body is executed. If the condition is false initially, the loop may not run at all.</li>
                                    <li><code>do...while</code> loop:</strong> The condition is checked after the loop body executes, so the loop will always execute at least once.</li>
                                </ul>
                            </div>
                        </div>


                        <!-- 2 Run program at lest once -->
                        <div>
                            <h5 class="notes-subheading">2. Loop Runs at Least Once</strong></h5>
                            <div class="ms-3">
                                <pre><code class="language-javascript">let input;
        
        do {
            input = prompt("Enter a number (or 'exit' to quit):");
            console.log(`You entered: ${input}`);
        } while (input !== 'exit');</code></pre>

                                <strong>Explanation:</strong></h5>
                                <ul>
                                    <li>This loop will prompt the user for input at least once. If the user types 'exit', the loop will stop; otherwise, it will continue prompting for input.</li>
                                    <li>Even if the user does not enter anything the first time, the loop will still run once before checking the condition.</li>
                                </ul>

                                <strong>Example: Using <code>do...while</code> for User Validation</strong></h5>
                                <pre><code class="language-javascript">let number;
        
        do {
            number = parseInt(prompt("Enter a number greater than 0:"));
        } while (number <= 0);
        
        console.log(`You entered a valid number: ${number}`);</code></pre>
                                <strong>Explanation:</strong>
                                <ul>
                                    <li>The loop ensures the user cannot proceed until they enter a number greater than 0.</li>
                                    <li>The condition <code>number <= 0</code> is checked after the user input is processed, ensuring the loop runs at least once even if the user enters an invalid number initially.</li>
                                </ul>
                            </div>
                        </div>



                        <!-- 3 Example where condition is initially false -->
                        <div>
                            <h5 class="notes-subheading">3. Example Where Condition is Initially False (Still Executes Once):</strong></h5>
                            <div class="ms-3">
                                <pre><code class="language-javascript">let number = 10;
        
        do {
            console.log(number);  // This will print 10 once
            number--;  // Decrement number
        } while (number < 5);  // Condition is false initially</code></pre>
                                <p>Output:</strong></p>
                                <pre><code class="language-javascript">10</code></pre>

                                <strong>Explanation:</strong>
                                <ul>
                                    <li>The <code>do...while</code> loop will execute at least once, even though the condition <code>number < 5</code> is false initially.</li>
                                    <li>In this case, it prints 10 before checking the condition, and since the condition is false, the loop stops after one iteration.</li>
                                </ul>
                            </div>
                        </div>


                        <!-- 4 Example with use input -->
                        <div>
                            <h5 class="notes-subheading">4. Example with User Input (Simulated)</h5>
                            <div class="ms-3">
                                <pre><code class="language-javascript">let userInput;
        
        do {
            userInput = prompt('Enter a number greater than 10 (or "exit" to stop):');
            console.log(`You entered: ${userInput}`);
        } while (userInput !== 'exit');</code></pre>

                                <strong>Explanation:</strong></h5>
                                <ul>
                                    <li>The loop will prompt the user for input at least once.</li>
                                    <li>If the user does not enter "exit", it will keep prompting them until they do so.</li>
                                    <li>The loop ensures that the code is executed at least once, even if the user enters something on the first prompt.</li>
                                </ul>
                            </div>
                        </div>


                        <!-- 5  Using break and continue in do while loop -->
                        <div>
                            <h5 class="notes-subheading">5. Using <code>break</code> and <code>continue</code> in a <code>do...while</code> Loop</strong></h5>
                            <div class="ms-3">
                                <ul>
                                    <li><code>break</code></strong>: Exits the loop early.</li>
                                    <li><code>continue</code></strong>: Skips to the next iteration of the loop.</li>
                                </ul>

                                <!-- First example of continue -->
                                <strong>1 . Example with <code>break</code>:</strong>
                                <div class="ms-4">
                                    <pre><code class="language-javascript">let counter = 0;    
    do {
        console.log(counter);
        counter++;
    if (counter === 3) {
        break;  // Exit the loop when counter reaches 3
    }
} while (counter < 5);</code></pre>
                                    <strong>Output:</strong></p>
                                    <pre><code class="language-javascript">0
1
2</code></pre>
                                </div>

                                <!-- Second example of continue -->
                                <strong>2. Example with <code>continue</code>:</strong>
                                <div class="ms-4">
                                    <pre><code class="language-javascript">let counter = 0;
do {
counter++;
if (counter === 3) {
continue;  // Skip this iteration when counter is 3
}
console.log(counter);
} while (counter < 5);</code></pre>

                                    <p>Output:</strong></p>
                                    <pre><code class="language-javascript">1
2
4
5</code></pre>
                                </div>
                            </div>
                        </div>


                        <!-- When to use do...while -->
                        <div>
                            <div class="ms-3">
                                <h5 class="notes-subheading">When to Use <code>do...while</code> Loop:</strong></h5>
                                <ul>
                                    <li>When you need to ensure the loop body runs at least once, even if the condition is false initially. For example, when asking for user input or performing a task that requires one iteration before checking the condition.</li>
                                    <li>When you want to execute code based on a condition that is evaluated after the first iteration.</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">


                        
                        <!-- Difference between do...while  and while-->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Difference Between <code>do...while</code> and <code>while</code> Loops:</strong></h5>
                            <div class="ms-4">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
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
                            </div>
                        </div>


                        <!-- Points to remember -->
                        <div>
                            <h5 class="notes-subheading">Point to remember </h5>
                            <div class="ms-3">
                                <ul>
                                    <li>The <code>do...while</code> loop is used to execute a block of code at least once, and then repeatedly execute it as long as the given condition remains true.</li>
                                    <li>The condition is checked after the loop runs, so the loop is guaranteed to run at least once.</li>
                                    <li>It is particularly useful when you need to perform an action that should happen before checking a condition, such as prompting the user for input or validating data.</li>
                                </ul>
                            </div>
                        </div>

                    </section>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="ch_5_L_1-object-oriented-paradigm-in-javascript-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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