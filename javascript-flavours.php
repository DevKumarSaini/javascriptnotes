<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Discover the different flavors of JavaScript, including TypeScript, CoffeeScript, Dart, JSX, and more, and how they enhance JavaScript development." />
    <meta name="keywords" content="flavours of JavaScript, TypeScript, CoffeeScript, Dart, JSX, JavaScript variations" />

    <title>JavaScript Flavours</title>

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
                        <h4 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Overview Of JavaScript Flavours</h4>
                        <p class="ms-3"><strong>JavaScript</strong> has several <strong>flavours</strong> or <strong>variants</strong> that extend its capabilities by adding new features, syntax, or tools. These flavours are not separate languages but typically <strong>transpile into JavaScript</strong> to run in standard environments.</p>
                    </section>

                    <section class="ms-3 mt-4">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="table-dark">
                                    <th>No.</th>
                                    <th>Flavor</th>
                                    <th>Definition</th>
                                    <th>Key Features</th>
                                    <th>Common Use Cases</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>CoffeeScript</strong> (2010)</td>
                                    <td>A <strong>syntactic sugar language</strong> that compiles to JavaScript, designed to make code <strong>shorter</strong> and <strong>cleaner</strong>.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Cleaner, Python-like syntax</strong></li>
                                            <li><strong>Implicit returns</strong></li>
                                            <li><strong><code>-&gt;</code> for functions</strong></li>
                                            <li>No need for <strong><code>var</code>, <code>let</code>, or <code>const</code></strong></li>
                                        </ul>
                                    </td>
                                    <td>Simplifying JavaScript code with a <strong>less verbose syntax</strong>; early alternatives to verbose JS.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong>Dart (with JS)</strong> (2011)</td>
                                    <td>A <strong>Google-developed language</strong> that can compile to JavaScript for frontend development (mostly for apps built with Flutter Web).</td>
                                    <td>
                                        <ul>
                                            <li><strong>Optional typing</strong></li>
                                            <li><strong>Extensive async and UI libraries</strong></li>
                                            <li><strong>Compiles to JS</strong> or runs in Dart VM</li>
                                            <li><strong>Object-oriented features</strong></li>
                                        </ul>
                                    </td>
                                    <td>When using the <strong>Dart/Flutter ecosystem</strong> but targeting web platforms through JavaScript output.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><strong>Elm</strong> (2012)</td>
                                    <td>A <strong>pure functional language</strong> that compiles to JavaScript, designed to build <strong>reliable front-end apps</strong> with no runtime exceptions.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Strong static type system</strong></li>
                                            <li><strong>No null/undefined errors</strong></li>
                                            <li><strong>Immutable data</strong> and <strong>pure functions</strong></li>
                                            <li>The <strong>Elm Architecture (TEA)</strong></li>
                                        </ul>
                                    </td>
                                    <td>Frontend apps where <strong>reliability</strong> and <strong>functional programming paradigms</strong> are preferred (e.g., finance, healthcare).</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><strong>TypeScript</strong> (2012)</td>
                                    <td>A <strong>typed superset of JavaScript</strong> developed by Microsoft that compiles to plain JavaScript. It introduces <strong>types</strong>, <strong>interfaces</strong>, and <strong>classes</strong>.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Static typing</strong> and <strong>interfaces</strong></li>
                                            <li><strong>Rich IDE support</strong> (autocomplete, refactoring)</li>
                                            <li><strong>ESNext feature support</strong></li>
                                            <li><strong>Excellent tooling</strong> (TSLint, tsconfig)</li>
                                        </ul>
                                    </td>
                                    <td>Large-scale applications where <strong>maintainability</strong>, <strong>collaboration</strong>, and <strong>tooling</strong> are crucial (e.g., Angular apps).</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><strong>JSX</strong> (2013)</td>
                                    <td>A <strong>syntax extension</strong> for JavaScript that allows writing <strong>HTML-like code</strong> within JavaScript, used primarily with React.</td>
                                    <td>
                                        <ul>
                                            <li><strong>HTML + JS in one file</strong> (component-based)</li>
                                            <li><strong>Requires transpilation</strong> (via Babel)</li>
                                            <li><strong>Encourages declarative UI structure</strong></li>
                                            <li><strong>Type-safe</strong> with TS or Flow</li>
                                        </ul>
                                    </td>
                                    <td>Building UIs with <strong>React</strong>; combining logic and markup in a seamless developer experience.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><strong>Flow</strong> (2014)</td>
                                    <td>A <strong>static type checker</strong> for JavaScript developed by Facebook that adds <strong>type safety</strong> without introducing new language syntax.</td>
                                    <td>
                                        <ul>
                                            <li><strong>Type inference</strong> and optional annotations</li>
                                            <li>Detects <strong>type-related bugs</strong> at compile-time</li>
                                            <li>Integrates with <strong>Babel</strong></li>
                                        </ul>
                                    </td>
                                    <td>Projects needing <strong>gradual type-checking</strong> without switching to TypeScript.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    <a href="javascript-types.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-where-to-put-code.php" class="btn btn-success">Next Topic <i
                            class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

        </div>

        <div class="col-md-2 col-12 bg-secondary">This is for advertisement</div>

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