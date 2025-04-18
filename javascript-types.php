<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Explore the different types of JavaScript, including JavaScript in browsers, Node.js for server-side development, TypeScript as a statically typed superset, and more. Understand how each type is used in web development." />
    <meta name="keywords" content="types of JavaScript, JavaScript in browser, Node.js, TypeScript, JavaScript types, JavaScript frameworks, server-side JavaScript, JavaScript versions" />
    <title>Types of JavaScript</title>
    <link rel="icon" href="images/favicon.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Top Bar -->
    <?php include 'top-bar.php'; ?>

    <!-- Navigation Bar -->
    <?php include 'navigation-bar.php'; ?>

    <div class="row">
        <div class="col-lg-3 col-12">
            <!-- Left side navbar -->
            <?php include 'content-menu-bar.php'; ?>
        </div>

        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">
                    <h3 class="text-center">Types of JavaScript</h3>
                    <hr />

                    <!-- Introduction Section -->
                    <section>
                        <h4 class="notes-heading mt-3"><i class="bi bi-brightness-low-fill"></i> Overview Of JavaScript Types</h4>
                        <p class="ms-3"><strong>JavaScript</strong> is a <strong>versatile language</strong> with various types and applications. From <strong>client-side scripting</strong> to <strong>server-side development</strong>, JavaScript has evolved to support a wide range of use cases. Below is a detailed breakdown of the <strong>different types of JavaScript</strong> and their applications.</p>
                    </section>

                    <!-- Types of JavaScript Table -->
                    <section class="mt-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Usage</th>
                                        <th>Examples</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>Client-Side JavaScript</strong></td>
                                        <td><strong>Runs in the browser</strong> and is responsible for managing <strong>user interactions</strong>, <strong>DOM manipulation</strong>, and <strong>event handling</strong>.</td>
                                        <td>Used for adding <strong>interactivity</strong> to websites, such as <strong>form validation</strong>, <strong>animations</strong>, and <strong>dynamic content updates</strong>.</td>
                                        <td><strong>Form validation</strong>, <strong>image sliders</strong>, and handling <strong>user clicks</strong>.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><strong>Server-Side JavaScript (Node.js)</strong></td>
                                        <td><strong>Runs on the server</strong> and is used for <strong>backend development</strong>, handling requests, and interacting with databases.</td>
                                        <td>Used for creating <strong>web servers</strong>, <strong>APIs</strong>, <strong>real-time applications</strong>, and <strong>scalable network applications</strong>.</td>
                                        <td><strong>Node.js</strong>, <strong>REST APIs</strong>, real-time messaging platforms.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><strong>ECMAScript Versions</strong></td>
                                        <td>Defines the <strong>standard specification</strong> for JavaScript, introducing <strong>new features</strong> and <strong>syntax enhancements</strong>.</td>
                                        <td>Used to define <strong>features</strong> and <strong>improvements</strong> for JavaScript.</td>
                                        <td><strong>ES5:</strong> Strict mode, JSON support; <strong>ES6:</strong> Arrow functions, classes, promises; <strong>ES7+:</strong> Async/await, optional chaining.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><strong>JavaScript Frameworks</strong></td>
                                        <td>Pre-written collections of JavaScript code that simplify development by providing <strong>tools</strong> and <strong>components</strong>.</td>
                                        <td>Used to streamline development and build <strong>scalable applications</strong>.</td>
                                        <td><strong>React</strong>, <strong>Angular</strong>, <strong>Vue.js</strong>, <strong>Express.js</strong>.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><strong>JavaScript Libraries</strong></td>
                                        <td>Pre-written collections of code designed to simplify tasks like <strong>DOM manipulation</strong>, <strong>animations</strong>, and <strong>AJAX requests</strong>.</td>
                                        <td>Used to abstract repetitive tasks and <strong>speed up development</strong>.</td>
                                        <td><strong>jQuery</strong>, <strong>Lodash</strong>, <strong>D3.js</strong>.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><strong>JavaScript for Mobile Apps</strong></td>
                                        <td>Frameworks like <strong>React Native</strong> and <strong>Ionic</strong> allow developers to create <strong>cross-platform mobile apps</strong> using JavaScript.</td>
                                        <td>Used for building <strong>performant mobile apps</strong> with a shared codebase.</td>
                                        <td><strong>React Native (Instagram)</strong>, <strong>Ionic (IKEA Store App)</strong>.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><strong>JavaScript for Game Development</strong></td>
                                        <td>Used for creating <strong>2D and 3D games</strong>, simulations, and <strong>interactive visualizations</strong>.</td>
                                        <td>Perfect for <strong>browser-based games</strong> and <strong>VR experiences</strong>.</td>
                                        <td><strong>Phaser.js</strong>, <strong>Three.js</strong>, <strong>Babylon.js</strong>.</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><strong>Vanilla JavaScript</strong></td>
                                        <td>Refers to using <strong>plain JavaScript</strong> without any additional libraries or frameworks.</td>
                                        <td>Used for <strong>lightweight projects</strong> and when external dependencies are not required.</td>
                                        <td>Writing JavaScript without libraries like <strong>jQuery</strong> or frameworks like <strong>React</strong>.</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><strong>Asynchronous JavaScript</strong></td>
                                        <td>Allows tasks to run in the <strong>background</strong> without blocking the main thread, improving <strong>performance</strong>.</td>
                                        <td>Used for <strong>network requests</strong>, timers, and file I/O.</td>
                                        <td><strong>Callbacks</strong>, <strong>Promises</strong>, <strong>async/await</strong>.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    <a href="javascript-vs-typescript.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-flavours.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-12 bg-secondary">This is for advertisement</div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
        document.getElementById("notes-hamburger-btn").addEventListener("click", function() {
            document.getElementById("notes-sidebar").classList.toggle("active");
        });

        document.getElementById("notes-sidebar-close-btn").addEventListener("click", function() {
            document.getElementById("notes-sidebar").classList.remove("active");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/prism.min.js"></script>
</body>

</html>