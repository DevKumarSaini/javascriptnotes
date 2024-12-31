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

                    <h3 class="text-center"> JavaScript Break Statement</h3>
                    <hr />

                    <section>

                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript <code>break</code> Statement</h4>
                            <div class="ms-4">
                                <p>The <code>break</code> statement in JavaScript is used to exit from a loop or a <code>switch</code> statement immediately. When the <code>break</code> statement is executed, control is transferred to the statement following the loop or the <code>switch</code>, effectively terminating the current execution context.</p>

                                <h5 class="notes-subheading">Usage of <code>break</code> Statement</h5>
                                <ol>
                                    <li><strong>Exiting Loops:</strong> The <code>break</code> statement is commonly used to terminate loops like <code>for</code>, <code>while</code>, or <code>do...while</code> when a specific condition is met.</li>
                                    <li><strong>Exiting Switch Statements:</strong> It is also used in <code>switch</code> statements to exit from the block after a matching case has been executed.</li>
                                </ol>
                            </div>
                        </div>

                        <hr class="mb-4 mt-4">

                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Using <code>break</code> in Loops</h4>
                            <div class="ms-4">
                                <h5 class="notes-subheading">1. Exiting a <code>for</code> Loop</h5>
                                <pre><code class="language-javascript">for (let i = 0; i &lt; 10; i++) {
    if (i === 5) {
        break; // Exit the loop when i is 5
    }
    console.log(i);
}
</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-javascript">0
1
2
3
4</code></pre>




                                <p>In this example, the loop will terminate when <code>i</code> equals <code>5</code>, so the numbers <code>0</code> through <code>4</code> are printed.</p>
                                <h5 class="notes-subheading mt-4">2. Exiting a <code>while</code> Loop</h5>
                                <pre><code class="language-javascript">let j = 0;
while (j &lt; 10) {
    if (j === 3) {
        break; // Exit the loop when j is 3
    }
    console.log(j);
    j++;
}</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-javascript">0
1
2</code></pre>

                                <p>In this case, the loop exits when <code>j</code> equals <code>3</code>.</p>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">

                        <div>
                            <h4 class="note-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Using <code>break</code> in Switch Statements</h4>
                            <div class="ms-4">

                                <p>The <code>break</code> statement is crucial in <code>switch</code> statements to prevent fall-through behavior, where multiple cases execute unintentionally.</p>
                                <pre><code class="language-javascript">let color = "red";
switch (color) {
    case "blue":
        console.log("Color is blue");
        break;
    case "red":
        console.log("Color is red");
        break; // Exits after this case
    case "green":
        console.log("Color is green");
        break;
    default:
        console.log("Color not recognized");
}</code></pre>
                                <p><strong>Output:</strong></p>
                                <pre><code class="language-javascript">Color is red</code></pre>


                                <p>In this example, the <code>break</code> statement after <code>console.log("Color is red")</code> ensures that the program does not execute the subsequent cases.</p>

                                <h5>Note</h5>
                                <ul>
                                    <li><strong>Purpose:</strong> The <code>break</code> statement is used to terminate the execution of loops and switch statements.</li>
                                    <li><strong>Control Flow:</strong> When <code>break</code> is encountered, control passes to the statement immediately following the loop or switch.</li>
                                    <li><strong>Importance in Switch:</strong> Using <code>break</code> in a <code>switch</code> statement prevents fall-through, allowing for distinct execution paths.</li>
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
                    <a href="ch_3_L_4-continue-in-javascript-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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