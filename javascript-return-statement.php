<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Understand the return statement in JavaScript, how it is used to exit functions and return values from them." />
    <meta name="keywords" content="JavaScript return statement, functions, returning values in JavaScript" />

    <title>Javascript Return</title>

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

                    <h3 class="text-center"> JavaScript Return Statement</h3>
                    <hr />

                    <section>

                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Return Statement in JavaScript</h4>
                            <div class="ms-4">
                                <p>The <code>return</code> statement in JavaScript is used to exit a function and optionally pass a value back to the function caller. When <code>return</code> is executed, the function stops executing, and the program control is transferred back to the point where the function was called.</p>
                                <h5 class="notes-subheading">The <code>return</code> statement can</h5>
                                <ul>
                                    <li>Return a value This is the most common usage, where a function computes or retrieves a value and returns it.</li>
                                    <li>Exit early from the function A <code>return</code> statement can also be used to stop the function execution prematurely without returning any value.</li>
                                </ul>

                                <h5 class="notes-subheading">Syntax</h5>
                                <pre><code class="language-javascript">return [expression];</code></pre>
                                <p><code>expression</code> The value (optional) that you want to return to the caller. This can be a <strong>number, string, object, array, function, or any JavaScript expression</strong>.
                                    If no expression is provided, the function returns <code>undefined</code> by default.</p>

                                <h5 class="notes-subheading">How <code>return</code> Works</h5>
                                <ul>
                                    <li>When <code>return</code> is called, the current execution of the function stops.</li>
                                    <li>The expression after the <code>return</code> keyword is evaluated and returned to the caller.</li>
                                    <li>If there is no <code>return</code> statement or if it's used without an expression, the function will return <code>undefined</code> by default.</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Examples of return statement -->
                        <div>
                            <h4 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Examples of <code>return</code> in JavaScript</h4>
                            <div class="ms-4">
                                <h6 class="notes-subheading">1. Basic Function Return</h6>
                                <p>Here, the <code>return</code> statement returns a value from a function.</p>
                                <pre><code class="language-javascript">function add(a, b) {
    return a + b;  // Return the sum of a and b
}

let result = add(5, 3);  // The function returns 8

console.log(result);  // Output 8</code></pre>

                                <strong>Output</strong>
                                <pre><code class="language-javascript">8</code></pre>

                                <strong>Explanation</strong>
                                <ul>
                                    <li>The <code>add()</code> function takes two parameters <code>a</code> and <code>b</code>, and it returns their sum.</li>
                                    <li>The value <code>8</code> is returned and stored in the variable <code>result</code>.</li>
                                </ul>






                                <h5 class="notes-subheading">2. Returning Multiple Values Using an Object</h5>
                                <p>In JavaScript, you can return multiple values from a function using an object or an array.</p>
                                <pre><code class="language-javascript">function getUserInfo() {
    return {
        name 'Alice',
        age 25,
        country 'USA'
    };
}

let user = getUserInfo();

console.log(user); </code></pre>

                                <strong>Output</strong>
                                <pre><code class="language-javascript">name 'Alice', age 25, country 'USA'</code></pre>
                                <strong>Explanation</strong>
                                <ul>
                                    <li>The function <code>getUserInfo</code> returns an object with multiple properties (<code>name</code>, <code>age</code>, <code>country</code>).</li>
                                </ul>





                                <h5 class="notes-subheading">3. Returning Early from a Function</h5>
                                <p>You can use <code>return</code> to exit a function early if a condition is met.</p>
                                <pre><code class="language-javascript">function checkAge(age) {
    if (age < 18) {
        return 'You are underage';  // Exit the function early if underage
    }
    return 'You are an adult';
}

console.log(checkAge(16));

console.log(checkAge(20));</code></pre>

                                <strong>Output</strong>
                                <pre><code class="language-javascript">You are underage 
You are an adult</code></pre>


                                <strong>Explanation</strong>
                                <ul>
                                    <li>If the condition <code>age &lt; 18</code> is true, the function returns the string <code>'You are underage'</code>, and the function exits without evaluating further code.</li>
                                    <li>If the condition is false, it proceeds to return <code>'You are an adult'</code>.</li>
                                </ul>






                                <h5 class="notes-subheading">4. <code>return</code> Without an Expression</h5>
                                <p>If the <code>return</code> statement is used without an expression, it returns <code>undefined</code>.</p>
                                <pre><code class="language-javascript">function sayHello() {
    console.log('Hello!');
    return;  // No expression, so undefined is returned
}

let result = sayHello();

console.log(result);</code></pre>

                                <strong>Output</strong>
                                <pre><code class="language-javascript">undefined</code></pre>
                                <strong>Explanation</strong>
                                <ul>
                                    <li>The <code>sayHello()</code> function does not return any value, so it implicitly returns <code>undefined</code>.</li>
                                </ul>







                                <h5 class="notes-subheading">5. Returning Functions</h5>
                                <p>In JavaScript, functions can return other functions, which is useful for closures and higher-order functions.</p>
                                <pre><code class="language-javascript">function greet(name) {
    return function(message) {
        return \`\${message}, \${name}!\`;
    };
}

let greetAlice = greet('Alice');

console.log(greetAlice('Hello'));</code></pre>

                                <strong>Output</strong>
                                <pre><code class="language-javascript">Hello, Alice!</code></pre>


                                <strong>Explanation</strong>
                                <ul>
                                    <li>The <code>greet</code> function returns a new function that takes a message as a parameter and returns a personalized greeting.</li>
                                    <li><code>greetAlice</code> is a new function with <code>name</code> set to 'Alice', so calling <code>greetAlice('Hello')</code> prints 'Hello, Alice!'.</li>
                                </ul>






                                <h7 class="notes-subheading">6. Returning Arrays or Objects</h7>
                                <p>You can return an array or object from a function to store multiple related values.</p>
                                <pre><code class="language-javascript">function getCoordinates() {
    return [40.7128, 74.0060];  // Returning an array with latitude and longitude
}

let coordinates = getCoordinates();

console.log(coordinates);</code></pre>

                                <strong>Output</strong>
                                <pre><code class="language-javascript">[40.7128, 74.0060]</code></pre>
                                <strong>Explanation</strong>
                                <ul>
                                    <li>The function <code>getCoordinates()</code> returns an array containing two values latitude and longitude.</li>
                                </ul>


                                <h5 class="notes-subheading">Important Points About <code>return</code> in JavaScript</h5>
                                <ul>
                                    <li>Stops Function Execution Once a <code>return</code> statement is executed, the function stops executing immediately. Any code after the <code>return</code> statement is not executed.</li>
                                    <li>Returning <code>undefined</code> by Default If no expression is provided after the <code>return</code> keyword, the function returns <code>undefined</code> by default.</li>
                                    <li>Return Value is Optional A function does not need to explicitly return a value. If you don't use <code>return</code>, the function will return <code>undefined</code>.</li>
                                    <li>Returning Functions (Closures) JavaScript functions can return other functions, which is often used in closures or callback patterns.</li>
                                    <li>Can Be Used for Recursion <code>return</code> can be used in recursive functions to pass the result back to previous function calls.</li>
                                </ul>


                                <h5 class="notes-subheading">Use Cases of <code>return</code></h5>
                                <ul>
                                    <li>Returning values from functions Functions typically return values that are used later in the program.</li>
                                    <li>Exiting early from a function Using <code>return</code> to exit a function based on some condition (e.g., error checking, validation).</li>
                                    <li>Function chaining Returning an object or function from a function to allow method chaining.</li>
                                    <li>Returning callbacks In asynchronous programming, functions may return callbacks or promises.</li>
                                </ul>

                                <!-- Note -->
                                <div class="alert alert-danger" role="alert">
                                    <strong>Note</strong>
                                    <ul>
                                        <li>The <code>return</code> statement is essential for controlling the flow of execution within functions.</li>
                                        <li>It allows functions to output values back to the caller and exit early if needed.</li>
                                        <li>It is an important tool in creating modular, reusable, and predictable functions in JavaScript.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    <a href="javascript-continue-statement.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-for-loop.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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