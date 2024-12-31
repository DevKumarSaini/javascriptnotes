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
                        <h4 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i>JavaScript Flavours</h4>
                        <p class="mb-4 ms-4">JavaScript has <strong>several flavors</strong> or <strong>variants</strong> that extend its capabilities or enhance its usability by <strong>Adding new features, syntax, or tools</strong> . These flavors are typically not separate languages but transpile into JavaScript to run in standard environments.</p>

                        <div class="ms-4">
                            <p><strong>Transpile </strong>Transpilation, a portmanteau of transformation and compilation, is the process of converting source code from one high-level programming language to another. Unlike traditional compilers, transpilers don't convert code into machine language; instead, they transform it into another source code language.</p>
                            <strong>Example</strong>
                            <pre><code>converting C++ code to C code</code></pre>
                        </div>


                    </section>

                    <section>
                        <table class="table table-striped table-bordered table-hover mt-4">
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
                    <a href="ch_1_L_6-places-where-we-put-Javascript-code-by-deepak-smart-programming.php" class="btn btn-success">Next Topic <i
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