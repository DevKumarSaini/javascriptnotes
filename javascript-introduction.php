<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Learn the basics of JavaScript, its role in web development, and why it's a key language for building interactive websites." />
    <meta name="keywords" content="JavaScript, introduction to JavaScript, web development, JavaScript basics, programming languages" />

    <title>Javascript Introduction</title>

    <link rel="icon" href="images/favicon.png" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
            <?php include 'content-menu-bar.php';   ?>
        </div>



        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">

                    <h3 class="text-center">JavaScript Introduction</h3>
                    <hr />

                    <section>

                        <!-- Introduction to JavaScript -->
                        <div class="">
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> What is JavaScript?</h4>
                            <div class="alert alert-info mb-4 ms-4">
                                <strong>JavaScript</strong> is a <strong>high-level, interpreted programming language</strong> that powers modern web development and interactive experiences.
                            </div>
                            <ul class="feature-list">
                                <li><strong>Creator:</strong> Developed by <strong>Brendan Eich</strong> in <strong>May 1995</strong> at <strong>Netscape Communications Corporation</strong></li>
                                <li><strong>Evolution:</strong> From <strong>"Mocha"</strong> → <strong>LiveScript</strong> → <strong>JavaScript</strong></li>
                                <li><strong>Standardization:</strong> Became an <strong>ECMA standard in 1997</strong></li>
                                <li><strong>Core Technology:</strong> One of the three pillars of web development alongside <strong>HTML</strong> and <strong>CSS</strong></li>
                                <li><strong>Purpose:</strong> Created as a <strong>"glue language"</strong> to make web pages dynamic and interactive</li>
                                <li><strong>Capabilities:</strong> Can perform:
                                    <ul>
                                        <li><strong>Dynamic calculations</strong></li>
                                        <li><strong>Data manipulation</strong></li>
                                        <li><strong>Form validation</strong></li>
                                        <li><strong>DOM manipulation</strong></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- Features and Capabilities -->
                        <div class=" mt-5">
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Features And Capabilities</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered ms-4 mt-2">
                                    <thead>
                                        <tr class="table-dark">
                                            <th>Points</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><strong>Lightweight and Interpreted</strong> </td>
                                            <td>JavaScript is a lightweight language that doesn't require a <strong>compiler to run</strong> . It's interpreted directly by the <strong>browser</strong> <strong>JavaScript</strong> or a engine like <strong> Node.js</strong>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dynamic Typing</strong></td>
                                            <td>Variables don't have <strong>fixed data types</strong>, allowing for <strong>flexibility</strong> in data <strong>manipulation</strong>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>First-Class Functions</strong></td>
                                            <td>Functions are treated as <strong>values</strong> , allowing them to be <strong>assigned to variables</strong> , <strong>passed as arguments</strong> , and <strong>returned from other functions.</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Single-Threaded</strong></td>
                                            <td>JavaScript executes code in a <strong>Single thread</strong>, but it can handle <strong>asynchronous</strong> operations using mechanisms like <strong>callbacks, Promises, and async/await</strong>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Multi-Paradigm</strong></td>
                                            <td>It supports <strong>object-oriented, </strong> <strong>imperative,</strong> and <strong>functional programming</strong>     styles.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>DOM Manipulation</strong></td>
                                            <td>JavaScript can interact and modify with the <strong>Document Object Model (DOM)</strong>, allowing <strong>dynamic updates</strong> to web page content.</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Prototype-Based</strong></td>
                                            <td>JavaScript uses <strong>prototypes</strong>  to <strong>create objects,</strong>  providing a <strong>flexible</strong> and <strong>Dynamic</strong>    <strong>Object-Oriented</strong>  model.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Standards and Evolution -->
                        <div class=" mt-5">
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Standards and Evolution</h4>
                            <div class="alert alert-secondary ms-4">
                                <ul class="mb-0">
                                    <li><strong>Official Standard:</strong> <a target="_blank" href="https://262.ecma-international.org/15.0/index.html" class="text-decoration-none"><strong>ECMA-262</strong></a></li>
                                    <li><strong>Latest Version:</strong> ECMAScript 2024 (ES15)</li>
                                    <li><strong>Development Cycle:</strong> Annual updates with new features and improvements</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Benefits of JavaScript -->
                        <div class=" mt-5">
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Benefits of JavaScript</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered ms-4 mt-2">
                                    <thead>
                                        <tr class="table-dark">
                                            <th>Feature</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Client-Side Scripting</strong> </td>
                                            <td>JavaScript can <strong>execute code directly</strong>  within the user's web browser, <strong>reducing server load</strong> and <strong>improving website performance</strong>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dynamic Web Pages </strong> </td>
                                            <td>JavaScript enables the creation of interactive web pages with features like <strong>animations, </strong> <strong>form validation,</strong> and <strong>real-time updates</strong>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cross-Platform Compatibility</strong> </td>
                                            <td>JavaScript can run on various platforms, including <strong>Windows, macOS, Linux, and mobile devices</strong>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Large and Active Community</strong> </td>
                                            <td>A vast and active community of developers contributes to JavaScript's continuous growth and development.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Rich Ecosystem of Libraries and Frameworks</strong> </td>
                                            <td>A wide range of libraries and frameworks, such as <strong>React, Angular, and Vue.js,</strong>  simplify web development and offer powerful features.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Server-Side Development</strong> </td>
                                            <td>With <strong>Node.js,</strong> JavaScript can be used to <strong>build server-side applications</strong>, enabling full-stack development with a single language.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Game Development </strong></td>
                                            <td>JavaScript can be used to create games, both for web browsers and mobile devices, with frameworks like Phaser and PixiJS.</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Mobile App Development</strong></td>
                                            <td>Developing <strong>cross-platform</strong> mobile apps with frameworks like <strong>React Native and Ionic.</strong> </td>
                                        </tr>

                                        <tr>
                                            <td><strong>Data Visualization</strong></td>
                                            <td>Creating interactive <strong>Data visualizations</strong> with libraries like <strong>D3.js </strong> and <strong>Chart.js</strong>.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


            <!-- next Button Section -->
            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-history.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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