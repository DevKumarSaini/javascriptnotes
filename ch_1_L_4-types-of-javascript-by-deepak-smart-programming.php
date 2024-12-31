<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords"
        content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Types of javaScript</title>

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
            <?php include 'content-menu-bar.php'; ?>
        </div>



        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">

                    <h3 class="text-center"> Types of JavaScript </h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading mt-3"><i class="bi bi-brightness-low-fill"></i>JavaScript Types</h4>
                        <p class="mb-4 ms-4">The history of JavaScript is a <strong>rich and fascinating</strong> journey that highlights
                            its evolution from a niche project into one of the most widely used programming languages in
                            the world. Below is a detailed timeline of <strong>Javascript history</strong> , broken down into key
                            milestones.</p>

                    </section>

                    <section>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th></th>
                                    <th>Type of JavaScript</th>
                                    <th>Description</th>
                                    <th>Usage</th>
                                    <th>Examples</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>Client-Side JavaScript / DOM Manipulation JavaScript</strong></td>
                                    <td>
                                        <ul>
                                            <li>This is the JavaScript that runs in the browser (client-side) and is responsible for managing user interactions, manipulating the DOM, and handling events on the web page.</li>
                                        </ul>

                                    </td>

                                    <td>
                                        <ul>
                                            <li>Used to add interactivity to websites, such as form validation, animations, event handling, and dynamic content updates without needing to reload the page.</li>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul>
                                            <li>Handling user clicks, input validation, image sliders, etc.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong>Server-Side JavaScript / Node.js (JavaScript Runtime)</strong></td>
                                    <td>
                                        <ul>
                                            <li>This is JavaScript that runs on the server rather than the client’s browser. It is commonly used for backend development to handle requests, interact with databases, and process data.</li>
                                            <li>Node.js is a runtime environment for executing JavaScript code outside of a web browser. It allows developers to use JavaScript for server-side development.</li>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul>
                                            <li>Used to create web servers, APIs, REST APIs, real-time applications, server-side applications, scalable network applications and microservices.</li>
                                        </ul>

                                    </td>

                                    <td>

                                        <ul>
                                            <li>Web servers, real-time apps like messaging platforms, and online collaboration tools.</li>
                                            <li>Node.js, creating RESTful APIs, handling requests, reading/writing to a database.</li>
                                        </ul>

                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td><strong>ECMAScript Versions</strong></td>
                                    <td>
                                        <ul>
                                            <li>ECMAScript is the standard specification for JavaScript. Different versions of ECMAScript have introduced new features and syntax enhancements.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Defines features, improvements, and functionalities for JavaScript.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>ES5: Strict mode, JSON support; ES6: Arrow functions, classes, promises; ES7+: Async/await, optional chaining, nullish coalescing.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><strong>JavaScript Frameworks</strong></td>
                                    <td>
                                        <ul>
                                            <li>Pre-written collections of JavaScript code that provide specific functionality or structure for building web applications. </li>
                                            <li>They simplify development by offering ready-made solutions to common problems.</li>
                                        </ul>

                                    </td>
                                    <td>
                                        <ul>
                                            <li>Used to streamline development by providing tools, libraries, and components to build scalable and maintainable applications.</li>
                                        </ul>

                                    </td>
                                    <td>
                                        <ul>
                                            <li>Frontend: React, Angular, Vue.js, Svelte; Backend: Express.js (Node.js framework for APIs).</li>
                                        </ul>

                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><strong>JavaScript Libraries</strong></td>
                                    <td>
                                        <ul>
                                            <li>Pre-written collections of code designed to simplify and optimize common tasks such as DOM manipulation, animations, event handling, and AJAX requests.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Used to abstract away repetitive tasks and offer utility functions to speed up development.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>jQuery, Lodash, D3.js.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td><strong>JavaScript for Mobile Apps</strong></td>
                                    <td>
                                        <ul>
                                            <li>JavaScript is widely used for mobile app development, thanks to frameworks and tools that allow developers to create cross-platform apps with a single codebase.</li>
                                            <li>
                                                Below are the main frameworks and their details
                                                <ul>
                                                    <li>
                                                        <strong>React Native</strong>
                                                        <ul>
                                                            <li>A JavaScript framework developed by Facebook for building native mobile apps.</li>
                                                            <li>Uses JavaScript and React for app development.</li>
                                                        </ul>
                                                    </li>

                                                    <hr>
                                                    <li>
                                                        <strong>Ionic</strong>
                                                        <ul>
                                                            <li>A hybrid mobile app framework that uses web technologies (HTML, CSS, JavaScript) to build mobile apps.</li>
                                                            <li>Based on Angular or React.</li>
                                                        </ul>
                                                    </li>

                                                    <hr>
                                                    <li>
                                                        <strong>NativeScript</strong>
                                                        <ul>
                                                            <li>A framework for building truly native mobile apps using JavaScript, TypeScript, Angular, or Vue.js.</li>

                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <br><br><br><br><br><br><br>
                                            <li>Ideal for building performant mobile apps quickly with a shared codebase. </li> <br><br>
                                            <hr>
                                            <br>
                                            <li>Great for lightweight apps that require quick development and integration with web technologies.</li> <br>
                                            <hr>
                                            <br>
                                            <li>Suitable for apps that require high performance and access to native device features.</li>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul>
                                            <br><br><br><br><br><br><br>
                                            <li>Used for building the Instagram app for iOS and Android, enabling a shared codebase with a native feel. </li>
                                            <hr>
                                            <br>
                                            <li> Used for creating the IKEA Store App, leveraging web technologies for a cross-platform shopping experience.</li>
                                            <hr>
                                            <br>
                                            <li>Used for developing the Strudel Weather App, offering native performance and seamless access to device APIs.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td><strong>JavaScript for Game Development</strong></td>
                                    <td>
                                        <ul>
                                            <li>JavaScript is increasingly used in game development, especially for web-based and casual games. Here are the primary tools and frameworks:</li>
                                            <li>Below are the main frameworks and there details.
                                                <ul>
                                                    <li><strong>Phaser.js</strong>
                                                        <ul>
                                                            <li>A 2D game framework for building browser-based games.</li>
                                                        </ul>
                                                    </li>

                                                    <br><br><br>
                                                    <hr>
                                                    <li><strong>Three.js</strong>
                                                        <ul>
                                                            <li>A JavaScript library for creating 3D games and visualizations.</li>
                                                        </ul>
                                                    </li>

                                                    <br><br>
                                                    <hr>
                                                    <li><strong>PlayCanvas</strong>
                                                        <ul>
                                                            <li>A web-based game engine for creating 2D and 3D games.</li>
                                                        </ul>
                                                        <br>
                                                    </li>

                                                    <br>
                                                    <hr>
                                                    <li><strong>Babylon.js</strong>
                                                        <ul>
                                                            <li>A powerful 3D engine for creating games, simulations, and VR experiences.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <br><br><br><br><br><br><br>
                                            <li>Perfect for creating 2D arcade-style games and educational games.</li><br><br>
                                            <hr><br>
                                            <li>Ideal for 3D games, simulations, and interactive visualizations.</li><br>
                                            <hr><br>
                                            <li>Perfect for team collaborations and browser-based games with advanced visuals.</li>
                                            <hr><br>
                                            <li>Suitable for developing high-quality 3D games and virtual reality experiences.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <br><br><br><br><br><br><br>
                                        <ul>
                                            <li>Used to create the Cookie Clicker Clone, a simple browser-based clicker game with 2D graphics and animations.</li>
                                            <hr>
                                            <li>Used in Google's "Stars" Project, an interactive 3D visualization of constellations and the solar system.</li>
                                            <hr>
                                            <li>Used to build the Robostorm.io multiplayer online battle game, combining 3D graphics with real-time gameplay.</li>
                                            <hr>
                                            <li>Used for the BMW Virtual Product Visualizer, an interactive 3D experience for exploring car features in virtual reality.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td><strong>Vanilla JavaScript</strong></td>
                                    <td>
                                        <ul>
                                            <li>"Vanilla JavaScript" refers to using plain JavaScript without any additional libraries or frameworks. It involves using the core features and APIs provided by the language and the browser.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Used when developers don’t want to include external libraries or frameworks, relying on standard JavaScript features.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Writing JavaScript without using libraries like jQuery or frameworks like React.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><strong>Asynchronous JavaScript</strong></td>
                                    <td>
                                        <ul>
                                            <li>Asynchronous JavaScript refers to the code that allows tasks to run in the background without blocking the main thread. It is used to improve performance, particularly for operations that take time (e.g., network requests, timers, file I/O).</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Used to make web pages more responsive by allowing JavaScript to run operations without freezing the user interface.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Callbacks, Promises, async/await.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="ch_1_L_5-flavours-of-javascript-by-deepak-smart-programming.php" class="btn btn-success">Next Topic <i
                            class="bi bi-arrow-right-short"></i></a>
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