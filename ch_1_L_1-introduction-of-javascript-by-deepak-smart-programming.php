<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords"
        content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Introduction of javascript</title>

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

                    <h3 class="text-center">Introduction to JavaScript</h3>
                    <hr />

                    <section>

                        <!-- Introduction to javascript -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>What is JavaScript?</h4>
                            <ul>
                                <li>JavaScript is a high-level, interpreted programming language that's primarily used to create dynamic and interactive web pages. It's one of the core technologies of the web, alongside HTML and CSS.</li>
                                <li>Netscape, founded in 1994, aimed to make the web more dynamic.</li>
                                <li>JavaScript was first introduced in 1995 by Brendan Eich, a programmer at Netscape Communications Corporation.</li>
                                <li>Netscape Communications Corporation, a pioneer in web browser technology, launched JavaScript.</li>
                                <li>To achieve this, Netscape sought a "glue language" to enhance HTML's capabilities.</li>
                                <li>Brendan Eich was hired to implement Scheme, but due to corporate mergers and strategic shifts, JavaScript was born.</li>
                                <li>The language was initially called "Mocha" and later "LiveScript."</li>
                                <li>In December 1995, the language was officially named "JavaScript."</li>
                            </ul>

                            <p class="text-danger">JavaScript has since become a cornerstone of web development, enabling interactive and dynamic web experiences.</p>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Core COncepts of javascript -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Core Concepts</h4>
                            <ul>
                                <li><strong>Lightweight and Interpreted:</strong> JavaScript is a lightweight language that doesn't require a compiler to run. It's interpreted directly by the browser or a JavaScript engine like Node.js.</li>
                                <li><strong>First-Class Functions:</strong> Functions are treated as values, allowing them to be assigned to variables, passed as arguments, and returned from other functions.</li>
                                <li><strong>Prototype-Based:</strong> JavaScript uses prototypes to create objects, providing a flexible and dynamic object-oriented model.</li>
                                <li><strong>Multi-Paradigm:</strong> It supports object-oriented, imperative, and functional programming styles.</li>
                                <li><strong>Single-Threaded:</strong> JavaScript executes code in a single thread, but it can handle asynchronous operations using mechanisms like callbacks, Promises, and async/await.</li>
                                <li><strong>Dynamic Typing:</strong> Variables don't have fixed data types, allowing for flexibility in data manipulation.</li>
                            </ul>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Key Features and Capabilities of javascript -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Key Features / Capabilities of JavaScript</h4>
                            <ul>
                                <li><strong>DOM Manipulation:</strong> JavaScript can interact with and modify the Document Object Model (DOM), allowing dynamic updates to web page content.</li>
                                <li><strong>Event Handling:</strong> It can respond to user interactions, such as clicks, mouse movements, and keypresses.</li>
                                <li><strong>Asynchronous Programming:</strong> JavaScript supports asynchronous operations, enabling non-blocking execution and efficient handling of tasks like network requests.</li>
                                <li><strong>Web Storage:</strong> It can store data locally on the user's device, improving performance and user experience.</li>
                                <li><strong>Canvas Graphics:</strong> JavaScript can create 2D and 3D graphics using the HTML5 Canvas API.</li>
                            </ul>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Usage Scenarios of javascript -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Usage Scenarios</h4>
                            <ul>
                                <li><strong>Web Development:</strong> Creating interactive web pages, web applications, and web games.</li>
                                <li><strong>Server-Side Development:</strong> Building server-side applications with Node.js.</li>
                                <li><strong>Mobile App Development:</strong> Developing cross-platform mobile apps with frameworks like React Native and Ionic.</li>
                                <li><strong>Game Development:</strong> Creating games for web browsers and mobile devices.</li>
                                <li><strong>Data Visualization:</strong> Creating interactive data visualizations with libraries like D3.js and Chart.js.</li>
                            </ul>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Standards and Evolution -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Standards and Evolution</h4>
                            <ul>
                                <li><strong>ECMAScript:</strong> The official standard for JavaScript.</li>
                                <li><strong>Regular Updates:</strong> JavaScript continues to evolve with new features and improvements.</li>
                            </ul>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Additional Points -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Additional Points</h4>
                            <ul>
                                <li><strong>JavaScript Frameworks and Libraries:</strong> A plethora of frameworks and libraries like React, Angular, Vue.js, and jQuery simplify web development and provide advanced features.</li>
                                <li><strong>JavaScript for Machine Learning:</strong> Libraries like TensorFlow.js enable machine learning models to run directly in the browser.</li>
                                <li><strong>JavaScript for IoT:</strong> JavaScript can be used to control IoT devices and build IoT applications.</li>
                                <li><strong>JavaScript for Game Development:</strong> Frameworks like Phaser and PixiJS allow the creation of 2D and 3D games.</li>
                                <li><strong>JavaScript for Data Visualization:</strong> Libraries like D3.js and Chart.js enable the creation of interactive data visualizations.</li>
                            </ul>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- Benefits of javascript -->
                        <div>
                            <h5 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Benefits of JavaScript Over Other Languages</h5>
                            <ul>
                                <li><strong>Client-Side Scripting:</strong> JavaScript can execute code directly within the user's web browser, reducing server load and improving website performance.</li>
                                <li><strong>Dynamic Web Pages:</strong> JavaScript enables the creation of interactive web pages with features like animations, form validation, and real-time updates.</li>
                                <li><strong>Cross-Platform Compatibility:</strong> JavaScript can run on various platforms, including Windows, macOS, Linux, and mobile devices.</li>
                                <li><strong>Large and Active Community:</strong> A vast and active community of developers contributes to JavaScript's continuous growth and development.</li>
                                <li><strong>Rich Ecosystem of Libraries and Frameworks:</strong> A wide range of libraries and frameworks, such as React, Angular, and Vue.js, simplify web development and offer powerful features.</li>
                                <li><strong>Server-Side Development:</strong> With Node.js, JavaScript can be used to build server-side applications, enabling full-stack development with a single language.</li>
                                <li><strong>Game Development:</strong> JavaScript can be used to create games, both for web browsers and mobile devices, with frameworks like Phaser and PixiJS.</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>


            <!-- next Button Section -->
            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="ch_1_L_2-history-of-javascript-by-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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