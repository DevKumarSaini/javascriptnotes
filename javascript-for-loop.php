<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Learn how to use the for loop in JavaScript to repeat actions based on a condition for a specified number of times." />
    <meta name="keywords" content="JavaScript for loop, for loop syntax, looping in JavaScript" />

    <title>Javascript For loop</title>

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

                    <h3 class="text-center"> JavaScript For Loop</h3>
                    <hr />

                    <section>
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> For Loop in JavaScript</h4>
                            <div class="ms-4">
                                <p>The <code>for</code> loop is one of the most commonly used loops in JavaScript. It allows you to execute a block of code a specific number of times, based on a condition. The loop's syntax is designed to be compact and flexible, making it ideal for iterating over arrays, numbers, or other iterable objects.</p>

                                <strong>Syntax</strong>
                                <pre><code class="language-javascript">for (initialization; condition; increment) {
// Code to be executed for each iteration
}</code></pre>

                                <h5 class="notes-subheading mt-3">Statements of for-loop</h5>
                                <ul>
                                    <li><strong>Initialization</strong> This is where you typically define and initialize the loop counter (e.g., <code>let i = 0</code>).</li>
                                    <li><strong>Condition</strong> This is the test condition that determines whether the loop will continue to execute. The loop will run as long as this condition evaluates to true. Once the condition evaluates to false, the loop stops.</li>
                                    <li><strong>Increment</strong> This is the update expression that modifies the loop counter after each iteration (e.g., <code>i++</code> or <code>i += 2</code>).</li>
                                </ul>

                                <h5 class="notes-subheading">How the <code>for</code> Loop Works</h5>
                                <ul>
                                    <li>Initialization is executed once, before the loop starts.</li>
                                    <li>The condition is evaluated before each iteration. If it's true, the code block inside the loop is executed.</li>
                                    <li>After the code block is executed, the increment expression is evaluated.</li>
                                    <li>The loop repeats steps 2 and 3 until the condition is no longer true.</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">






                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Types of Looping Examples</h4>
                            <div class="ms-4">
                                <h5 class="notes-subheading">1. Simple example of for loop</h5>
                                <div class="ms-4">
                                    <p>Here's a simple example of a <code>for</code> loop that prints numbers from 1 to 5</p>
                                    <pre><code class="language-javascript">for (let i = 1; i <= 5; i++) {
    console.log(i);
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">1
2
3
4
5</code></pre>

                                    <p><strong>Explanation</strong></p>
                                    <ul>
                                        <li><strong>Initialization</strong> <code>let i = 1</code> – This sets the starting point of the loop (starting from 1).</li>
                                        <li><strong>Condition</strong> <code>i &lt;= 5</code> – The loop will continue as long as <code>i</code> is less than or equal to 5.</li>
                                        <li><strong>Increment</strong> <code>i++</code> – This increments <code>i</code> by 1 after each iteration.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>






                        <div>
                            <div class="ms-4">
                                <h5 class="notes-subheading">2. Example with Different Increments</h5>
                                <div class="ms-4">
                                    <p>You can customize the increment value to control how the loop counter changes.</p>
                                    <pre><code class="language-javascript">for (let i = 0; i <= 10; i += 2) {
    console.log(i);
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">0
2
4
6
8
10</code></pre>

                                    <p><strong>Breaking Down the Code</strong></p>
                                    <ul>
                                        <li><strong>Initialization</strong> <code>let i = 0</code> – Start the loop counter at 0.</li>
                                        <li><strong>Condition</strong> <code>i &lt;= 10</code> – Keep running the loop as long as <code>i</code> is less than or equal to 10.</li>
                                        <li><strong>Increment</strong> <code>i += 2</code> – Increase <code>i</code> by 2 after each iteration.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>






                        <div class="mt-2">
                            <div class="ms-4">
                                <h5 class="notes-subheading">3. Example with Decrement</h5>
                                <div class="ms-4">
                                    <p>You can also use a <code>for</code> loop to decrease the value of the loop counter.</p>
                                    <pre><code class="language-javascript">for (let i = 10; i >= 1; i--) {
    console.log(i);
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">10
9
8
7
6
5
4
3
2
1</code></pre>
                                </div>
                            </div>
                        </div>






                        <div class="mt-3">
                            <div class="ms-4">
                                <h5 class="notes-subheading">4. Nested <code>for</code> Loops</h5>
                                <div class="ms-4">
                                    <p>You can nest one <code>for</code> loop inside another, which is useful for iterating over multi-dimensional arrays (e.g., matrices).</p>
                                    <pre><code class="language-javascript">for (let i = 1; i <= 3; i++) {
    for (let j = 1; j <= 3; j++) {
        console.log(\`i = \${i}, j = \${j}\`);
    }
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">i = 1, j = 1
i = 1, j = 2
i = 1, j = 3
i = 2, j = 1
i = 2, j = 2
i = 2, j = 3
i = 3, j = 1
i = 3, j = 2
i = 3, j = 3</code></pre>
                                </div>
                            </div>
                        </div>






                        <div class="mt-4">
                            <div class="ms-4">
                                <h5 class="notes-subheading">5. Using <code>for</code> Loop with Arrays</h5>
                                <div class="ms-4">
                                    <p>A common use of the <code>for</code> loop is iterating through the elements of an array.</p>
                                    <pre><code class="language-javascript">let fruits = ["apple", "banana", "cherry", "date"];

for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">apple
banana
cherry
date</code></pre>
                                </div>
                            </div>
                        </div>





                        <div>
                            <div class="ms-4 mt-3">
                                <h5 class="notes-subheading">6. Using <code>for</code> Loop with Break and Continue</h5>
                                <div class="ms-4">
                                    <p>You can control the flow of the <code>for</code> loop using <code>break</code> and <code>continue</code></p>
                                    <ul>
                                        <li><strong>break</strong> Exits the loop entirely.</li>
                                        <li><strong>continue</strong> Skips the current iteration and moves to the next one.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>






                        <div class="mt-4">
                            <div class="ms-4">
                                <strong>1. Example with break</strong>
                                <div class="ms-4">
                                    <pre><code class="language-javascript">for (let i = 1; i <= 5; i++) {
    if (i === 3) {
        break;  // Exit the loop when i is 3
    }
    console.log(i);
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">1
2</code></pre>
                                </div>
                            </div>
                        </div>






                        <div class="mt-4">
                            <div class="ms-4">
                                <strong>2. Example with continue</strong>
                                <div class="ms-4">
                                    <pre><code class="language-javascript">for (let i = 1; i <= 5; i++) {
    if (i === 3) {
        continue;  // Skip the iteration when i is 3
    }
    console.log(i);
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">1
2
4
5</code></pre>
                                </div>
                            </div>
                        </div>


                        <hr class="mt-4 mb-4">


                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>For...in Loop vs. For Loop</h4>
                            <div class="ms-2">
                                <p>The <code>for...in</code> loop is used to iterate over the properties of an object, not the values in an array. It is not generally used for arrays because it iterates over keys, not values. Here’s a quick comparison</p>

                                <strong>1. for loop (used for arrays or when you know the number of iterations)</strong>
                                <div class="ms-3">
                                    <pre><code class="language-javascript">let arr = [10, 20, 30];

for (let i = 0; i < arr.length; i++) {
    console.log(arr[i]);  // Accessing elements by index
}</code></pre>
                                </div>
                            </div>







                            <div class="ms-2 mt-3">
                                <strong>2. for...in loop (used for objects, or for iterating through the properties of an object)</strong>
                                <div class="ms-3">
                                    <pre><code class="language-javascript">let person = {
    name "John",
    age 30,
    country "USA"
};

for (let key in person) {
    console.log(key + " " + person[key]);  // Accessing properties by key
}</code></pre>
                                    <p><strong>Output</strong></p>
                                    <pre><code class="language-javascript">name John
age 30
country USA</code></pre>

                                    <!-- Note -->
                                    <div class="alert alert-danger mt-4" role="alert">
                                        <strong>Note</strong>
                                        <ul>
                                            <li>The <code>for</code> loop is used to iterate over a block of code a specific number of times.</li>
                                            <li>It’s particularly useful for iterating over arrays, numbers, and ranges.</li>
                                            <li>The <code>for</code> loop allows you to set the initial value, condition, and increment/decrement expression.</li>
                                            <li>It’s flexible and can be combined with <code>break</code> and <code>continue</code> to control the flow of the loop.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    <a href="javascript-return-statement.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-for-in-for-of-loop.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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