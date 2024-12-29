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

                    <h3 class="text-center"> JavaScript Engine vs Runtime Environment</h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript Engine</h4>

                        <p>A <strong>JavaScript engine</strong> is a software component that interprets and executes JavaScript code. It takes the JavaScript code written by developers, processes it, and then runs it within the browser or a server-side environment.</p>

                        <ul>
                            <li><strong>Core Functionality</strong>
                                <ol>
                                    <li>The engine takes JavaScript code as input, parses it, compiles it (or interprets it), and executes it to produce the desired behavior.</li>
                                    <li>It handles the <strong>execution of JavaScript code</strong>, manages memory, performs garbage collection, and optimizes the execution speed of the code.</li>
                                </ol>
                            </li>
                            <li class="mt-2"><strong>How it Works</strong>
                                <ol>
                                    <li><strong>Parsing</strong>: The engine first parses the JavaScript code into an intermediate format, like an Abstract Syntax Tree (AST).</li>
                                    <li><strong>Compilation</strong>: It may convert the code into machine code (just-in-time compilation) for faster execution, or it may interpret it line-by-line.</li>
                                    <li><strong>Execution</strong>: The code is executed in the context of the runtime environment (browser, Node.js, etc.), and the engine handles tasks like variable scoping, function execution, and error handling.</li>
                                </ol>
                            </li>
                            <li class="mt-2"><strong>Popular JavaScript Engines</strong>
                                <ol>
                                    <li><strong>V8 Engine</strong> (used in Google Chrome and Node.js): Known for its speed and efficiency, V8 compiles JavaScript directly into machine code.</li>
                                    <li><strong>SpiderMonkey</strong> (used in Mozilla Firefox): The first JavaScript engine, developed by Mozilla, it also compiles JavaScript code for faster execution.</li>
                                    <li><strong>JavaScriptCore</strong> (used in Safari): Also known as Nitro, it is responsible for executing JavaScript in Safari.</li>
                                    <li><strong>Chakra</strong> (used in Microsoft Edge – Legacy): Earlier version of Edge used Chakra as its engine, though newer versions use V8.</li>
                                </ol>
                            </li>
                        </ul>

                        <hr>

                        <h4><strong>JavaScript Runtime Environment:</strong></h4>

                        <p>A <strong>runtime environment</strong> refers to the environment in which JavaScript code is executed, providing the necessary tools, APIs, and libraries for the JavaScript engine to perform its tasks.</p>

                        <ul>
                            <li><strong>Core Elements of a JavaScript Runtime Environment:</strong>
                                <ol>
                                    <li><strong>JavaScript Engine</strong>: As explained above, this is responsible for interpreting and executing JavaScript code.</li>
                                    <li><strong>Web APIs (for Browser)</strong>: In browsers, JavaScript code interacts with various <strong>Web APIs</strong> (such as the DOM, Fetch API, Canvas API, etc.), allowing it to manipulate the web page, make network requests, and perform other tasks.</li>
                                    <li><strong>Event Loop and Call Stack</strong>: The runtime environment manages the <strong>event loop</strong>, which handles asynchronous code execution. The <strong>call stack</strong> tracks function calls and handles the execution order.</li>
                                    <li><strong>Global Object</strong>: In a browser, this is typically the `window` object. In Node.js, the global object is `global`. It holds all globally accessible variables and functions.</li>
                                </ol>
                            </li>
                            <li class="mt-2"><strong>Types of JavaScript Runtime Environments:</strong>
                                <ol>
                                    <li><strong>Browser Environment</strong>: This is the most common runtime for JavaScript. Browsers like Google Chrome, Mozilla Firefox, and Safari provide the necessary runtime for executing JavaScript.
                                        <ul>
                                            <li><strong>Web APIs</strong> are available in the browser environment, such as `document`, `window`, `localStorage`, and more.</li>
                                            <li>The <strong>DOM (Document Object Model)</strong> is also part of the runtime, allowing JavaScript to manipulate the HTML content of a web page.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Node.js Environment</strong>: Node.js provides a JavaScript runtime for server-side development. It uses the <strong>V8 engine</strong> but provides additional built-in libraries for server tasks.
                                        <ul>
                                            <li>In Node.js, JavaScript can interact with the <strong>file system</strong>, <strong>networking</strong>, <strong>HTTP servers</strong>, <strong>streams</strong>, and other back-end capabilities.</li>
                                            <li>Unlike browsers, Node.js doesn't have a DOM or Web APIs; instead, it has libraries like `fs` (file system), `http`, `url`, etc.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Deno</strong>: Deno is a new runtime for JavaScript (and TypeScript) created by the original creator of Node.js, Ryan Dahl. It is designed with security, simplicity, and modern features in mind.</li>
                                </ol>
                            </li>
                        </ul>

                        <hr>

                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript Engine and Runtime Environment</h4>

                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                                <th><strong>Aspect</strong></th>
                                <th><strong>JavaScript Engine</strong></th>
                                <th><strong>JavaScript Runtime Environment</strong></th>
                            </tr>
                            <tr>
                                <td><strong>Definition</strong></td>
                                <td>The engine that executes JavaScript code.</td>
                                <td>The environment that provides the tools, APIs, and support for running JavaScript.</td>
                            </tr>
                            <tr>
                                <td><strong>Main Function</strong></td>
                                <td>Interprets, compiles, and executes JavaScript code.</td>
                                <td>Provides the context in which JavaScript runs, including APIs, event loop, and engine.</td>
                            </tr>
                            <tr>
                                <td><strong>Example</strong></td>
                                <td>V8 Engine (Google Chrome, Node.js), SpiderMonkey (Firefox), JavaScriptCore (Safari)</td>
                                <td>Browser environment (with Web APIs), Node.js, Deno</td>
                            </tr>
                            <tr>
                                <td><strong>Focus</strong></td>
                                <td>Code execution.</td>
                                <td>Environment for code execution, APIs, global objects, event handling.</td>
                            </tr>
                            <tr>
                                <td><strong>Interaction with Other Components</strong></td>
                                <td>Operates based on the runtime environment.</td>
                                <td>Provides Web APIs and manages interaction between JavaScript engine and global environment.</td>
                            </tr>
                        </table>
                    </section>

                    <section>
                        <hr class="mt-5 mb-4">

                        <h4 class="notes-heading mt-3"><i class="bi bi-brightness-low-fill"></i> How JavaScript Engine and Runtime Work Together</h4>

                        <ol>
                            <li>The <strong>JavaScript engine</strong> processes the JavaScript code, performing the core tasks of interpreting, compiling, and executing the code.</li>
                            <li>The <strong>runtime environment</strong> provides the context for this code to run by offering tools, APIs, event loops, and handling asynchronous tasks. The engine interacts with these tools to ensure JavaScript can manipulate the DOM, make HTTP requests, interact with databases, etc.</li>
                        </ol>

                        <h5 class="notes-subheading">Types of JavaScript Engine</h5>

                        <p>There are several types of JavaScript engines available, each developed by different organizations or for different environments. These engines are responsible for executing JavaScript code by parsing, compiling, and running it in a specific environment, such as web browsers or server-side platforms. Below are the main JavaScript engines:</p>

                        <h6>1. V8 Engine (Google)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Google Chrome, Node.js, and other Chromium-based browsers.</li>
                            <li><strong>Description</strong>: V8 is one of the most widely used JavaScript engines. It was developed by Google for the Chrome browser and is also used in Node.js for server-side JavaScript execution. V8 compiles JavaScript directly to machine code for faster execution.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Just-In-Time (JIT) compilation</li>
                                    <li>Optimized for speed and performance</li>
                                    <li>Garbage collection</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>2. SpiderMonkey (Mozilla)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Mozilla Firefox and other Mozilla-based browsers.</li>
                            <li><strong>Description</strong>: SpiderMonkey is the first JavaScript engine ever created and is used by Firefox. It is highly optimized for performance and supports modern JavaScript features. SpiderMonkey is capable of Just-In-Time (JIT) compilation and uses garbage collection to manage memory efficiently.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Supports ES6 and other modern JavaScript features</li>
                                    <li>Advanced optimization techniques</li>
                                    <li>First to implement features like `let` and `const` in ES6</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>3. JavaScriptCore (Nitro) (Apple)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Apple Safari and WebKit-based browsers.</li>
                            <li><strong>Description</strong>: JavaScriptCore, also known as Nitro, is the JavaScript engine used in Apple's Safari browser. It is optimized for performance and energy efficiency, especially in mobile environments like iPhones and iPads.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>JIT compilation</li>
                                    <li>Highly optimized for mobile devices and Apple platforms</li>
                                    <li>Supports ECMAScript 6 and beyond</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>4. Chakra (Microsoft - Legacy)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Microsoft Edge (legacy version before switching to Chromium) and Internet Explorer.</li>
                            <li><strong>Description</strong>: Chakra was the JavaScript engine used by the older versions of Microsoft Edge and Internet Explorer. It was optimized for performance and was one of the first engines to support modern JavaScript features like ES6.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>JIT compilation</li>
                                    <li>Supports modern JavaScript features (until the switch to Chromium)</li>
                                    <li>Integration with Microsoft's tooling ecosystem (Visual Studio, etc.)</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>5. V8 in Deno (Ryan Dahl's Deno runtime)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Deno (a new runtime for JavaScript and TypeScript).</li>
                            <li><strong>Description</strong>: Deno is a modern runtime created by Ryan Dahl (the creator of Node.js), which uses the V8 engine for JavaScript execution. It is designed to be more secure and modern compared to Node.js and offers built-in TypeScript support.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Built-in support for TypeScript</li>
                                    <li>V8 engine for JavaScript execution</li>
                                    <li>Secure by default (e.g., no file system access unless explicitly granted)</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>6. Rhino (Mozilla)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Rhino is primarily used in Java-based applications and environments.</li>
                            <li><strong>Description</strong>: Rhino is a JavaScript engine that runs in a Java Virtual Machine (JVM). It is developed by Mozilla and allows JavaScript to be executed within Java applications. Rhino is more commonly used in server-side applications and for integrating JavaScript in Java environments.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Runs within Java applications (JVM)</li>
                                    <li>Supports both interpreted and compiled modes</li>
                                    <li>Can be used to execute JavaScript on the server-side</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>7. Nashorn (Oracle - Deprecated)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Java environments (JVM).</li>
                            <li><strong>Description</strong>: Nashorn was a JavaScript engine that was introduced in JDK 8 and used in Java applications. It was designed to execute JavaScript on the JVM, allowing developers to mix JavaScript and Java code. Nashorn has been deprecated in JDK 11 and replaced by GraalVM.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Runs JavaScript in JVM-based applications</li>
                                    <li>High-performance JIT compilation</li>
                                    <li>Allows for interoperability with Java</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>8. GraalVM (Oracle)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Java-based applications, Node.js, and more.</li>
                            <li><strong>Description</strong>: GraalVM is a polyglot virtual machine capable of running multiple programming languages, including JavaScript. It supports JavaScript through the V8 engine but can also run other languages like Python, Ruby, and R. GraalVM aims to provide high-performance execution and cross-language interoperability.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Supports multiple languages, including JavaScript, Ruby, and Python</li>
                                    <li>JIT compilation and ahead-of-time (AOT) compilation</li>
                                    <li>Interoperability between languages</li>
                                    <li>Used for building high-performance and cross-language applications</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>9. QuickJS (Fabrice Bellard)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Various small, embedded systems, and minimal JavaScript applications.</li>
                            <li><strong>Description</strong>: QuickJS is a small and lightweight JavaScript engine that can be embedded in low-resource environments. It supports modern JavaScript features like ES6 and ES7 and is designed to be small and fast for embedding in applications with limited resources.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Small memory footprint, ideal for embedded systems</li>
                                    <li>Supports ES6 and ES7</li>
                                    <li>Extremely fast execution in a minimal package</li>
                                </ul>
                            </li>
                        </ul>

                        <h6>10. JScript (Microsoft - Legacy)</h6>
                        <ul>
                            <li><strong>Used in</strong>: Internet Explorer (pre-Edge).</li>
                            <li><strong>Description</strong>: JScript was Microsoft's proprietary implementation of JavaScript, used in Internet Explorer before the adoption of Chakra in Edge. It was similar to JavaScript but included some proprietary features specific to the Microsoft ecosystem.</li>
                            <li><strong>Key Features</strong>:
                                <ul>
                                    <li>Legacy support for older Microsoft browsers</li>
                                    <li>Compatible with ECMAScript 3 and 5 standards</li>
                                    <li>Limited usage outside of Internet Explorer and legacy Microsoft products</li>
                                </ul>
                            </li>
                        </ul>
                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="history-of-java-by-deepak-smart-programming.html" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

        </div>

        <div class="col-md-2 col-12 bg-secondary">this is for advertisement</div>

    </div>

    <!-- Footer -->
    <div class="footer mt-4">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <h5 class="text-white">Menus</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="footer-link">Home</a></li>
                        <li>
                            <a href="free-courses-by-smart-programming.html" class="footer-link">Free Courses</a>
                        </li>
                        <li>
                            <a href="premium-courses-by-smart-programming.html" class="footer-link">Premium Courses</a>
                        </li>
                        <li>
                            <a href="trainings-by-smart-programming.html" class="footer-link">Trainings</a>
                        </li>
                        <li>
                            <a href="development-by-smart-programming.html" class="footer-link">Development</a>
                        </li>
                        <li>
                            <a href="contact-smart-programming.html" class="footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h5 class="text-white">
                        Useful links for Industrial Training in Chandigarh
                    </h5>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="core-java-free-course-by-deepak-smart-programming.html" class="footer-link">Core Java Free Course</a>
                                </li>
                                <li>
                                    <a href="advance-java-free-course-by-deepak-smart-programming.html" class="footer-link">Advance Java Free Course</a>
                                </li>
                                <li>
                                    <a href="spring-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Spring Framework Free Course</a>
                                </li>
                                <li>
                                    <a href="springboot-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Springboot Free Course</a>
                                </li>
                                <li>
                                    <a href="android-free-course-by-deepak-smart-programming.html" class="footer-link">Android Free Course</a>
                                </li>
                                <li>
                                    <a href="java-logical-questions-free-course-by-deepak-smart-programming.html" class="footer-link">Java Logical Questioning Free Course</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Core-Java-With-5-Projects" target="_blank" class="footer-link">Core Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Advance-Java" target="_blank" class="footer-link">Advance Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Framework" target="_blank" class="footer-link">Spring Framework Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Boot-Framework" target="_blank" class="footer-link">Springboot Premium Course</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-8">
                    <footer>
                        <p>
                            &copy; 2024 Smart Programming, Chandigarh. All Rights Reserved.
                            <br />
                            <a href="privacy-policy.html" class="footer-link">Privacy Policy</a>
                            &nbsp; | &nbsp;
                            <a href="terms-of-service.html" class="footer-link">Terms Of Services</a>
                            &nbsp; | &nbsp;
                            <a href="cancellation-refund-policy.html" class="footer-link">Cancellation/Refund Policy</a>
                        </p>
                    </footer>
                </div>
                <div class="col-md-4">
                    <div class="social-icons">
                        <a href="https://www.youtube.com/c/SmartProgramming" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com/smartprogramming.india" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/smart_programming/" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://t.me/smart_programming_deepak" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-telegram"></i>
                        </a>
                        <a href="https://discord.gg/Up9dQ3gP6k" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-discord"></i>
                        </a>
                        <a href="https://whatsapp.com/channel/0029Va6n2Gs42Dckpa2T1U1i" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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