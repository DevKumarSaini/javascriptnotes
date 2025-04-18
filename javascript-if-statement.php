<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Master the use of the if statement in JavaScript to make decisions in your code based on conditions." />
    <meta name="keywords" content="JavaScript if statement, conditional statements, JavaScript control flow" />

    <title>Javascript If statement</title>

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

                    <h3 class="text-center">JavaScript If Statement</h3>
                    <hr />

                    <section>

                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript <code>if</code> Statements</h4>
                            <div class="ms-4">
                                <p>The <code>if</code> statement in JavaScript is a control flow statement that allows you to execute a block of code based on a specified condition. If the condition evaluates to <code>true</code>, the code within the <code>if</code> block runs; if it evaluates to <code>false</code>, the code is skipped.</p>

                                <h5 class="notes-subheading">Types of <code>if</code> Statements</h5>
                                <ol>
                                    <li><strong>Simple <code>if</code> Statement</strong></li>
                                    <li><strong><code>if...else</code> Statement</strong></li>
                                    <li><strong><code>if...else if...else</code> Statement</strong></li>
                                    <li><strong>Nested <code>if</code> Statement</strong></li>
                                    <li><strong>Ternary Operator (Conditional Operator)</strong></li>
                                </ol>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">

                        <div>
                            <h4 class="notes-heading">1. Simple <code>if</code> Statement</h4>
                            <!-- Simple if statement -->
                            <div class="ms-4">
                                <p><strong>Definition:</strong> Executes a block of code if the condition is true.</p>
                                <pre><code class="language-javascript">let age = 18;

if (age &gt;= 18) {
    console.log("You are an adult.");
}
</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-javascript">You are an adult.</code></pre>
                            </div>


                            <!-- If else statement -->
                            <h4 class="notes-heading mt-5">2. <code>if...else</code> Statement</h4>
                            <div class="ms-4">
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
                            </div>


                            <!-- If else if statement -->
                            <h4 class="notes-heading mt-5">3. <code>if...else if...else</code> Statement</h4>
                            <div class="ms-4">
                                <p><strong>Definition:</strong> Allows you to check multiple conditions. If the first condition is false, it checks the next condition, and so on.</p>
                                <pre><code class="language-javascript">let score = 85;

if (score &gt;= 90) {
    console.log("Grade: A");
} 
else if (score &gt;= 80) {
    console.log("Grade: B");
} 
else if (score &gt;= 70) {
    console.log("Grade: C");
} 
else {
    console.log("Grade: F");
}
</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-javascript">Grade: B</code></pre>
                            </div>







                            <!-- Nested if Statement -->
                            <h4 class="notes-heading mt-5">4. Nested <code>if</code> Statement</h4>
                            <div class="ms-4">
                                <p><strong>Definition:</strong> An <code>if</code> statement inside another <code>if</code> statement, allowing for more complex conditions.</p>
                                <pre><code class="language-javascript">let age = 20;

let hasLicense = true;

if (age &gt;= 18) {
    if (hasLicense) {
        console.log("You can drive.");
    } else {
        console.log("You cannot drive without a license.");
    }
} 
else {
    console.log("You are not old enough to drive.");
}</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-javascript">You can drive.</code></pre>
                            </div>






                            <!-- Ternary Operator -->
                            <h4 class="notes-heading mt-5">5. Ternary Operator (Conditional Operator)</h4>
                            <div class="ms-4">
                                <p><strong>Definition:</strong> A shorthand way to write an <code>if...else</code> statement. It uses the syntax: <code>condition ? exprIfTrue : exprIfFalse</code>.</p>
                                <pre><code class="language-javascript">let age = 17;

let canVote = (age &gt;= 18) ? "You can vote." : "You cannot vote.";

console.log(canVote);</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-javascript">You cannot vote.</code></pre>

                            </div>
                            <div class="alert alert-danger mt-4" role="alert">
                                <strong>Note: </strong>These examples illustrate how <code>if</code> statements work in JavaScript, providing flexibility in controlling the flow of execution based on conditions. If you have any further questions or need additional examples, feel free to ask!.
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    <a href="javascript-operators.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-switch-statement.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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