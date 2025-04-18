<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Master the while loop in JavaScript to execute a block of code repeatedly as long as a condition remains true." />
    <meta name="keywords" content="JavaScript while loop, while loop syntax, looping in JavaScript" />

    <title>Javascript While Loop</title>

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

                    <h3 class="text-center"> JavaScript while Loop</h3>
                    <hr />

                    <section>
                        <!-- Javascript while loop introduction -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> While Loop</h4>

                            <div class="ms-4">
                                <p>The <code>while</code> loop is one of the most fundamental looping structures in JavaScript. It is used to execute a block of code as long as a specified condition evaluates to <code>true</code>. The loop keeps running the code until the condition becomes <code>false</code>.</p>

                                <div class="ms-3">
                                    <h5 class="notes-subheading">Syntax</h5>
                                    <pre class="ms-4"><code class="language-javascript">while (condition) {
    // Code to be executed
}</code></pre>
                                    <ul>
                                        <li><strong>condition</strong> The condition is evaluated before each iteration. If it evaluates to <code>true</code>, the loop executes the code inside the block. If it evaluates to <code>false</code>, the loop exits and the code stops executing.</li>
                                    </ul>

                                    <h5 class="notes-subheading">How the <code>while</code> Loop Works</h5>
                                    <ol>
                                        <li>The <code>condition</code> is evaluated before each iteration.</li>
                                        <li>If the condition is <code>true</code>, the code inside the loop block is executed.</li>
                                        <li>After the code inside the loop block is executed, the condition is checked again.</li>
                                        <li>This process repeats until the condition evaluates to <code>false</code>.</li>
                                    </ol>

                                    <div class="mt-4">
                                        <h5 class="notes-subheading">1. While Basic Example</h5>
                                        <div class="ms-3">
                                            <p>Here’s a simple example of a <code>while</code> loop that prints numbers from 1 to 5</p>
                                            <pre><code class="language-javascript">let i = 1;

while (i <= 5) {
    console.log(i);
    i++;  // Incrementing i by 1
}</code></pre>
                                            <p><strong>Output</strong></p>
                                            <pre><code class="language-javascript">1
2
3
4
5</code></pre>

                                        </div>

                                        <h5 class="notes-subheading">Explanation</h5>
                                        <ul>
                                            <li><strong>Initialization</strong> The variable <code>i</code> is initialized to 1.</li>
                                            <li><strong>Condition</strong> The condition <code>i <= 5</code> is checked. As long as <code>i</code> is less than or equal to 5, the loop will continue.</li>
                                            <li><strong>Increment</strong> After each iteration, <code>i</code> is incremented by 1 (<code>i++</code>).</li>
                                        </ul>
                                    </div>
                                </div>


                                <!-- While loop with infinite loop -->
                                <div class="mt-4">
                                    <h5 class="notes-subheading">2. While with Infinite Loop (Caution)</h5>
                                    <div class="ms-3">
                                        <p>If you forget to modify the loop condition inside the loop block, you could accidentally create an infinite loop. Here’s an example</p>
                                        <strong>Example with infinite loop</strong></>
                                        <pre> <code class="language-javascript">let i = 1;

while (i <= 5) {
    console.log(i);
    // Missing increment, this creates an infinite loop
}</code></pre>
                                        <p><strong>Output</strong></p>
                                        <pre><code class="language-javascript">1
1
1
...</code></pre>

                                        <strong>Explanation</strong>
                                        <ul>
                                            <li>In this example, the value of <code>i</code> is never changed, so the condition <code>i <= 5</code> will always remain <code>true</code>, causing an infinite loop.</li>
                                            <li>To avoid infinite loops, always ensure that the loop condition will eventually become <code>false</code> or that the loop has a way to terminate after a set number of iterations.</li>
                                        </ul>
                                    </div>
                                </div>


                                <!-- While loop with break -->
                                <div class="mt-4">
                                    <h5 class="notes-subheading">3. While Loop with <code>break</code> and <code>continue</code></h5>
                                    <div class="ms-3">
                                        <ul>
                                            <li><strong><code>break</code></strong> Exits the loop entirely, even if the condition is still <code>true</code>.</li>
                                            <li><strong><code>continue</code></strong> Skips the current iteration and proceeds with the next one.</li>
                                        </ul>

                                        <strong>Example with <code>break</code></strong></>
                                        <pre><code class="language-javascript">let i = 1;
while (i <= 5) {
    if (i === 3) {
        break;  // Exit the loop when i equals 3
    }
    console.log(i);
    i++;
}</code></pre>
                                        <p><strong>Output</strong></p>
                                        <pre><code class="language-javascript">1
2</code></pre>

                                        <strong>Explanation</strong>
                                        <p>The loop stops when <code>i</code> equals 3 due to the <code>break</code> statement.</p>
                                    </div>
                                </div>


                                <!-- While with continue -->
                                <div class="mt-4">
                                    <h4 class="notes-subheading">4. While with <code>continue</code></h4>
                                    <div class="ms-3">
                                        <p>In while loop <code>continue</code> is used to skip an specific iteration according to specific conditions</p>
                                        <pre><code class="language-javascript">let i = 1;
while (i <= 5) {
    if (i === 3) {
        i++;
        continue;  // Skip the iteration when i equals 3
    }
    console.log(i);
    i++;
}</code></pre>
                                        <p><strong>Output</strong></p>
                                        <pre><code class="language-javascript">1
2
4
5</code></pre>

                                        <strong>Explanation</strong>
                                        <p>When <code>i</code> equals 3, the <code>continue</code> statement skips the current iteration, and the value 3 is not printed.</p>
                                    </div>
                                </div>


                                <hr class="mt-4 mb-4">

                                <div class="ms-3">
                                    <h5 class="notes-subheading">Selection of <code>while</code> Loop</h5>
                                    <ul>
                                        <li>Use the <code>while</code> loop when you don't know in advance how many times the loop will need to execute, but you know the loop should continue as long as a specific condition is true.</li>
                                        <li>It’s useful when you want to repeat something while a condition remains true and the number of iterations is not predetermined.</li>
                                    </ul>

                                    <div class="alert alert-danger mt-4" role="alert">
                                        <strong>Note</strong>
                                        <ul>
                                            <li>The <code>while</code> loop repeats a block of code as long as a specified condition evaluates to <code>true</code>.</li>
                                            <li>Make sure the condition will eventually become <code>false</code> to avoid infinite loops.</li>
                                            <li>Use <code>break</code> to exit the loop early and <code>continue</code> to skip the current iteration.</li>
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
                    <a href="javascript-for-in-for-of-loop.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-do-while-loop.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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