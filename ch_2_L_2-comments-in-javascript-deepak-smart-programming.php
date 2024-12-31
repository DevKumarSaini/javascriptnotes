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

                    <h3 class="text-center">JavaScript Comments</h3>
                    <hr />

                    <section>
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> In JavaScript, Comments</h4>
                            
                            <!-- Single Line Comment -->
                            <div class="ms-4">
                                <p>In JavaScript, comments are used to annotate the code, making it easier to understand for anyone reading it later, including your future self. Comments can be single-line or multi-line, and they are ignored by the JavaScript interpreter. Here's a detailed explanation of the types of comments available in JavaScript:</p>
        
                                <h5 class="notes-subheading">1. Single-Line Comments</h5>
                                <p>Single-line comments are created using <code>//</code>. Everything following <code>//</code> on that line will be treated as a comment and ignored by the interpreter.</p>
        
<pre><code class="language-javascript">// This is a single-line comment
let x = 10; // This comment explains that x is initialized to 10</code></pre>
        
                                <h5 class="notes-subheading">Usage</h5>
                                <ul>
                                    <li>To explain a line of code or a specific operation.</li>
                                    <li>To temporarily disable code during debugging.</li>
                                </ul>
                            </div>




                            <!-- Multi-line Comments -->
                            <div class="ms-4">
                                <h5 class="notes-subheading mt-4">2. Multi-Line Comments</h5>
                                <p>Multi-line comments are enclosed between <code>/*</code> and <code>*/</code>. This allows you to write comments that span multiple lines.</p>
                                <pre><code class="language-javascript">/*
        This is a multi-line comment.
        It can span multiple lines.
        Useful for longer explanations or documentation.
        */
        let y = 20;
        </code></pre>
        
                                <h5 class="notes-subheading">Usage</h5>
                                <ul>
                                    <li>To provide detailed explanations or documentation for a section of code.</li>
                                    <li>To comment out large blocks of code while debugging.</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Best Practice Using Comments -->
                        <div>
                            <h5 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Best Practices for Using Comments</h5>
                            <ol class="ms-3">
                                <li><strong>Be Clear and Concise</strong>: Write comments that are easy to understand. Avoid overly complicated language.</li>
                                <li><strong>Explain Why, Not What</strong>: Often, the code itself explains what it does. Use comments to clarify the reasoning behind decisions or complex logic.</li>
                                <li><strong>Keep Comments Updated</strong>: As the code evolves, ensure that comments remain accurate and relevant.</li>
                                <li><strong>Avoid Obvious Comments</strong>: Comments that simply repeat what the code does are usually unnecessary. For example:
                                    <pre><code class="language-javascript">let a = 5; // Set a to 5</code></pre>
                                    Instead, focus on the purpose:
                                    <pre><code class="language-javascript">let a = 5; // The initial value for the counter</code></pre>
                                </li>
                            </ol>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Examples of comments in Javascript -->
                        <div>
                            <h5 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Example of Comments in a JavaScript Program</h5>
                            <div class="ms-4">
                                <p>Here’s a simple JavaScript program that uses both single-line and multi-line comments:</p>
<pre><code class="language-javascript">// Function to calculate the area of a rectangle
function calculateArea(length, width) {
    return length * width; // Multiply length by width
}

/*
Define the dimensions
length = 5
width = 10
*/
let length = 5;
let width = 10;

// Call the function and store the result
let area = calculateArea(length, width);
console.log("Area of the rectangle: " + area); // Log the area</code></pre>
        
                                <h5 class="notes-subheading mt-4">Note</h5>
                                <ul>
                                    <li><strong>Single-Line Comments (<code>//</code>)</strong>: Used for brief notes or to annotate specific lines of code.</li>
                                    <li><strong>Multi-Line Comments (<code>/* */</code>)</strong>: Useful for longer explanations or commenting out sections of code.</li>
                                    <li><strong>Best Practices</strong>: Write clear, concise, and relevant comments, focusing on explaining why code is written a certain way rather than simply describing what it does.</li>
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
                    <a href="ch_2_L_3-keywords-in-javascript-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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