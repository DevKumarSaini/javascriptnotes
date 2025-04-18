<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Explore the history of JavaScript, from its creation by Brendan Eich to its evolution into one of the world's most popular programming languages." />
    <meta name="keywords" content="JavaScript history, JavaScript evolution, Brendan Eich, JavaScript development, programming language history" />

    <title>Javascript History</title>

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

                    <h3 class="text-center">ECMAScript Versions and Features</h3>
                    <hr />

                    <!-- Introduction Section -->
                    <section>
                        <h4 class="notes-heading mt-3"><i class="bi bi-brightness-low-fill"></i> About ECMAScript</h4>
                        <div class="alert alert-info mb-4 ms-4">
                            <strong>ECMAScript</strong> is the standardized specification for JavaScript. Each version brings new features and improvements to the language.
                        </div>
                    </section>

                    <!-- Versions Table -->
                    <section class="ms-4">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr class="table-dark">
                                        <th>ECMAScript Version</th>
                                        <th>JavaScript Version</th>
                                        <th>Year</th>
                                        <th>Major Features</th>
                                        <th>Deep Context / Impact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>ES1</strong></td>
                                        <td><strong>JS 1.0</strong></td>
                                        <td>1997</td>
                                        <td>
                                            <ul>
                                                <li><strong>First standardized version of JavaScript</strong></li>
                                                <li><strong>Basic language features</strong></li>
                                                <li><strong>Core syntax definition</strong></li>
                                                <li><strong>Number, String, Object, Array</strong></li>
                                                <li><strong>Function, Date, RegExp</strong></li>
                                            </ul>
                                        </td>
                                        <td>First standardization of JavaScript by ECMA. Aimed to unify browser behavior.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES2</strong></td>
                                        <td><strong>JS 1.2</strong></td>
                                        <td>1998</td>
                                        <td>
                                            <ul>
                                                <li><strong>Align with ISO/IEC 16262</strong></li>
                                                <li><strong>Minor modifications</strong></li>
                                            </ul>
                                        </td>
                                        <td>Very minor changes, mostly harmonization with international standards.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES3</strong></td>
                                        <td><strong>JS 1.5</strong></td>
                                        <td>1999</td>
                                        <td>
                                            <ul>
                                                <li><strong>Regular expressions</strong></li>
                                                <li><strong>try/catch error handling (Exception Handling)</strong></li>
                                                <li><strong>Better Switch statement</strong></li>
                                                <li><strong>do-while</strong></li>
                                                <li><strong title="do-while loops">New Loop Handling</strong></li>
                                                <li><strong>New string/array methods</strong></li>
                                            </ul>
                                        </td>
                                        <td>Big leap for developers. Laid foundation for error handling & regex.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES4 (Abandoned)</strong></td>
                                        <td>—</td>
                                        <td>—</td>
                                        <td>
                                            <ul>
                                                <li><strong>Classes, modules, static typing, generators, etc.</strong></li>
                                            </ul>
                                        </td>
                                        <td>Project was too ambitious and politically divisive ultimately split into ES3.1 (ES5).</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES5</strong></td>
                                        <td><strong>JS 1.8.5</strong></td>
                                        <td>2009</td>
                                        <td>
                                            <ul>
                                                <li><strong>Strict mode</strong></li>
                                                <li><strong>JSON support</strong></li>
                                                <li><strong>Getter/Setter Functions</strong></li>
                                                <li><strong>Array Methods / Array.prototype.forEach, map, reduce</strong></li>
                                                <li><strong>Object.create, Object.defineProperty</strong></li>
                                            </ul>
                                        </td>
                                        <td>Marked start of modern JS. Strict mode helped avoid silent bugs.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES5.1</strong></td>
                                        <td>—</td>
                                        <td>2011</td>
                                        <td>
                                            <ul>
                                                <li><strong>Minor spec clarifications to align with ECMAScript ISO standard</strong></li>
                                            </ul>
                                        </td>
                                        <td>No major new features maintenance release.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES6 / ES2015</strong></td>
                                        <td><strong>JS 6</strong></td>
                                        <td>2015</td>
                                        <td>
                                            <ul>
                                                <li><strong>Block-Scoped Variables (let, const)</strong></li>
                                                <li><strong>Arrow functions ()=>{}</strong></li>
                                                <li><strong>Classes</strong></li>
                                                <li><strong>Modules (import/export)</strong></li>
                                                <li><strong>Template literals / Template Strings ``</strong></li>
                                                <li><strong>Destructuring</strong></li>
                                                <li><strong>Promises</strong></li>
                                                <li><strong>Default Parameters</strong></li>
                                                <li><strong>... Spread / Rest Operators</strong></li>
                                                <li><strong>Generators function*</strong></li>
                                                <li><strong>Symbol type</strong></li>
                                                <li><strong>Map, Set, WeakMap, WeakSet</strong></li>
                                            </ul>
                                        </td>
                                        <td>The "modern JS revolution." Introduced syntactic sugar & new paradigms. Modules brought long-awaited native support.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES7 / ES2016</strong></td>
                                        <td>—</td>
                                        <td>2016</td>
                                        <td>
                                            <ul>
                                                <li><strong>Array.prototype.includes</strong></li>
                                                <li><strong>Exponentiation operator **</strong></li>
                                            </ul>
                                        </td>
                                        <td>Smallest yearly update. Made code more expressive.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES8 / ES2017</strong></td>
                                        <td>—</td>
                                        <td>2017</td>
                                        <td>
                                            <ul>
                                                <li><strong>async/await</strong></li>
                                                <li><strong>Shared memory / Atomics</strong></li>
                                                <li><strong>Object.values, Object.entries</strong></li>
                                                <li><strong>String padding, padStart, padEnd</strong></li>
                                                <li><strong>Trailing commas in functions</strong></li>
                                            </ul>
                                        </td>
                                        <td>Async/await revolutionized async programming Memory features aimed at parallelism (e.g., web workers).</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES9 / ES2018</strong></td>
                                        <td>—</td>
                                        <td>2018</td>
                                        <td>
                                            <ul>
                                                <li><strong>Rest/spread in objects</strong></li>
                                                <li><strong>Asynchronous iteration (for await)</strong></li>
                                                <li><strong>Promise.prototype.finally</strong></li>
                                                <li><strong>RegExp enhancements</strong></li>
                                            </ul>
                                        </td>
                                        <td>Improved dev ergonomics Better async tools & regex power.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES10 / ES2019</strong></td>
                                        <td>—</td>
                                        <td>2019</td>
                                        <td>
                                            <ul>
                                                <li><strong>Array.prototype.flat, flatMap</strong></li>
                                                <li><strong>Object.fromEntries</strong></li>
                                                <li><strong>String.prototype.trimStart, trimEnd</strong></li>
                                                <li><strong>Optional catch binding</strong></li>
                                                <li><strong>Well-formed JSON stringify</strong></li>
                                                <li><strong>Symbol.description</strong></li>
                                            </ul>
                                        </td>
                                        <td>Enhanced working with nested structures, object manipulation, and developer readability.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES11 / ES2020</strong></td>
                                        <td>—</td>
                                        <td>2020</td>
                                        <td>
                                            <ul>
                                                <li><strong>BigInt</strong></li>
                                                <li><strong>Promise.allSettled</strong></li>
                                                <li><strong>Nullish coalescing ??</strong></li>
                                                <li><strong>Optional chaining ?.</strong></li>
                                                <li><strong>Dynamic import()</strong></li>
                                                <li><strong>globalThis</strong></li>
                                                <li><strong>matchAll()</strong></li>
                                            </ul>
                                        </td>
                                        <td>BigInt finally allowed safe handling of large integers. Optional chaining & nullish coalescing made cleaner code.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES12 / ES2021</strong></td>
                                        <td>—</td>
                                        <td>2021</td>
                                        <td>
                                            <ul>
                                                <li><strong>Logical assignment &&=, ||=, ??=s </li>
                                            </ul>
                                        </td>
                                        <td>Simplified conditional assignments improved code clarity.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES13 / ES2022</strong></td>
                                        <td>—</td>
                                        <td>2022</td>
                                        <td>
                                            <ul>
                                                <li><strong>Class static blocks</strong></li>
                                                <li><strong>Ergonomic brand checks #private</strong></li>
                                                <li><strong>.at() method for arrays</strong></li>
                                                <li><strong>Error cause (Error.prototype.cause)</strong></li>
                                            </ul>
                                        </td>
                                        <td>Private fields became more robust. .at() made accessing end of arrays simpler.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES14 / ES2023</strong></td>
                                        <td>—</td>
                                        <td>2023</td>
                                        <td>
                                            <ul>
                                                <li><strong>Array grouping: groupBy, groupByToMap</strong></li>
                                                <li><strong>Symbol.dispose (proposal phase)</strong></li>
                                                <li><strong>Explicit resource management</strong></li>
                                                <li><strong>Import attributes</strong></li>
                                                <li><strong>JSON modules</strong></li>
                                            </ul>
                                        </td>
                                        <td>groupBy helps with data analytics-style grouping in native JS.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ES15 / ES2024 (Proposed)</strong></td>
                                        <td>—</td>
                                        <td>2024</td>
                                        <td>
                                            <ul>
                                                <li><strong>Pipeline operator `|>` (Stage 2)</strong></li>
                                                <li><strong>Record & Tuple (Stage 2)</strong></li>
                                                <li><strong>Pattern matching (Stage 3)</strong></li>
                                                <li><strong>More decorators support</strong></li>
                                                <li><strong>Immutable data structures</strong></li>
                                            </ul>
                                        </td>
                                        <td>These features aim to make code more expressive and functional-style programming more viable.</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </section>

                    
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    <a href="javascript-introduction.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-vs-java-vs-python.php" class="btn btn-success">Next Topic <i
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