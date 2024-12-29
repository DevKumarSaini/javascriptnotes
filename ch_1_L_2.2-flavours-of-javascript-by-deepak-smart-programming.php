<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords"
        content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Flavours of javascript</title>

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
            <?php include 'content-menu-bar.php' ?>
        </div>



        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">

                    <h3 class="text-center"> Flavours of JavaScript </h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading mt-5"><i class="bi bi-brightness-low-fill"></i>JavaScript Flavours</h4>
                        <p class="mb-4 ms-4">JavaScript has several flavors or variants that extend its capabilities or
                            enhance its usability by adding new features, syntax, or tools. These flavors are typically
                            not separate languages but transpile into JavaScript to run in standard environments.</p>

                    </section>

                    <section>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="table-dark">
                                    <th>No.</th>
                                    <th>Flavour</th>
                                    <th>Definition</th>
                                    <th>Key Features</th>
                                    <th>Use Case</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>TypeScript</strong></td>
                                    <td>TypeScript is a superset of JavaScript developed by Microsoft. It introduces
                                        static typing, classes, and interfaces to JavaScript.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Static Typing</strong>: Enables defining variable types.</li>
                                            <li><strong>Interfaces</strong>: Define structures and enforce type rules.
                                            </li>
                                            <li><strong>Advanced Tooling</strong>: Auto-completion and error checking in
                                                IDEs.</li>
                                            <li><strong>Backward Compatibility</strong>: Compiles to JavaScript.</li>
                                        </ul>
                                    </td>
                                    <td>Large-scale applications where maintainability and scalability are critical.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong>CoffeeScript</strong></td>
                                    <td>CoffeeScript is a lightweight language that compiles into JavaScript, improving
                                        readability and conciseness.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Cleaner Syntax</strong>: Removes unnecessary punctuation.</li>
                                            <li><strong>Shortened Functions</strong>: Simplifies function declarations
                                                with `->` syntax.</li>
                                            <li><strong>Automatic Variable Declaration</strong>: No need for `var`,
                                                `let`, or `const`.</li>
                                        </ul>
                                    </td>
                                    <td>Developers who want less verbose JavaScript code.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><strong>Dart (with JS)</strong></td>
                                    <td>Dart, developed by Google, is a language that can compile to JavaScript for web
                                        applications.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Optional Typing</strong>: Similar to TypeScript.</li>
                                            <li><strong>Built-in Libraries</strong>: Extensive libraries for async
                                                programming, collections, etc.</li>
                                            <li><strong>Object-Oriented</strong>: Supports classes, inheritance.</li>
                                        </ul>
                                    </td>
                                    <td>Applications where Dart's ecosystem is preferred, with JavaScript compatibility
                                        for the web.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><strong>JSX (JavaScript XML)</strong></td>
                                    <td>JSX is a syntax extension for JavaScript, allowing HTML-like syntax within JS
                                        for React components.</td>
                                    <td>
                                        <ul>
                                            <li><strong>HTML in JS</strong>: Combines logic and markup.</li>
                                            <li><strong>Dynamic Rendering</strong>: Updates UI with React components.
                                            </li>
                                            <li><strong>Transpilation</strong>: Needs Babel to transpile to JS.</li>
                                        </ul>
                                    </td>
                                    <td>Front-end development with React to create interactive UIs.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><strong>Flow</strong></td>
                                    <td>Flow, developed by Facebook, is a static type checker for JavaScript, similar to
                                        TypeScript but without new syntax.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Type Inference</strong>: Automatically deduces types.</li>
                                            <li><strong>Optional Typing</strong>: Gradually introduce types.</li>
                                            <li><strong>Seamless Integration</strong>: Works with Babel to compile to
                                                JS.</li>
                                        </ul>
                                    </td>
                                    <td>Projects needing type-checking without migrating to TypeScript.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><strong>Elm</strong></td>
                                    <td>Elm is a functional language for front-end development, compiling to JavaScript,
                                        known for its reliability and absence of runtime errors.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Functional Paradigm</strong>: Emphasizes immutability and pure
                                                functions.</li>
                                            <li><strong>No Runtime Exceptions</strong>: Strong type system ensures
                                                correctness.</li>
                                            <li><strong>Efficient Rendering</strong>: Optimized for UIs.</li>
                                        </ul>
                                    </td>
                                    <td>Applications where functional programming is preferred and reliability is
                                        crucial.</td>
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
                    <a href="history-of-java-by-deepak-smart-programming.html" class="btn btn-success">Next Topic <i
                            class="bi bi-arrow-right-short"></i></a>
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
                                    <a href="core-java-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Core Java Free Course</a>
                                </li>
                                <li>
                                    <a href="advance-java-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Advance Java Free Course</a>
                                </li>
                                <li>
                                    <a href="spring-framework-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Spring Framework Free Course</a>
                                </li>
                                <li>
                                    <a href="springboot-framework-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Springboot Free Course</a>
                                </li>
                                <li>
                                    <a href="android-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Android Free Course</a>
                                </li>
                                <li>
                                    <a href="java-logical-questions-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Java Logical Questioning Free Course</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Core-Java-With-5-Projects"
                                        target="_blank" class="footer-link">Core Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Advance-Java" target="_blank"
                                        class="footer-link">Advance Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Framework" target="_blank"
                                        class="footer-link">Spring Framework Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Boot-Framework"
                                        target="_blank" class="footer-link">Springboot Premium Course</a>
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
                        <a href="https://www.youtube.com/c/SmartProgramming" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com/smartprogramming.india" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/smart_programming/" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://t.me/smart_programming_deepak" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-telegram"></i>
                        </a>
                        <a href="https://discord.gg/Up9dQ3gP6k" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-discord"></i>
                        </a>
                        <a href="https://whatsapp.com/channel/0029Va6n2Gs42Dckpa2T1U1i" target="_blank"
                            class="me-2 text-decoration-none">
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