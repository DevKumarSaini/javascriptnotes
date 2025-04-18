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

                    <h3 class="text-center"> History of JavaScript </h3>
                    <hr />

                    <!-- Information part -->
                    <section>
                        <h4 class="notes-heading mt-3"><i class="bi bi-brightness-low-fill"></i>JavaScript History</h4>
                        <ul class="mb-4 ms-4">
                            <li>The history of JavaScript is a rich and fascinating journey that highlights its evolution from a niche project into one of the most widely used programming languages in the world. Below is a detailed timeline of Javascript history, broken down into key milestones.</li>
                        </ul>
                    </section>


                    <!-- Table Part -->
                    <section class="ms-4">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th></th>
                                    <th>Event</th>
                                    <th>Event Journey</th>
                                </tr>
                            </thead>


                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>Early Beginnings (1995-1996)</strong> </td>
                                    <td>
                                        <strong>1995: Creation of JavaScript</strong>
                                        <ul>
                                            <li><strong>May 1995 </strong>Brendan Eich, working at Netscape Communications, created JavaScript. The language was initially called Mocha, then renamed LiveScript, and finally settled on the name JavaScript.
                                            <li>Reason for JavaScript: It was designed to enable interactivity and dynamic behavior within web pages, a novel concept at the time.</li>
                                            <li>The original goal was to add basic client-side scripting to websites, such as form validation and interactive content, without the need for full page reloads.</li>
                                            </li>
                                        </ul>

                                        <hr>
                                        <strong>1995: First Use in Netscape Navigator</strong>
                                        <ul>
                                            <li>JavaScript was first included in Netscape Navigator 2.0, which was released in September 1995.</li>
                                            <li>This version of JavaScript was quite simple and mainly focused on making basic web pages more interactive.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td><strong>Standardization and Growth (1996-1997)</strong> </td>
                                    <td>
                                        <strong>1996: ECMA Standardization Process</strong>
                                        <ul>
                                            <li><strong>June 1996 </strong>JavaScript was submitted to ECMA International to be , with the goal of reducing browser fragmentation and creating a consistent scripting language.</li>
                                            <li>The language was renamed to ECMAScript following the ECMA-262 specification.</li>
                                        </ul>

                                        <hr>
                                        <strong>1997: ECMAScript 1.0 and Early Adoption</strong>
                                        <ul>
                                            <li><strong>June 1997 </strong>ECMAScript 1.0 was officially finalized. The specification formalized JavaScript and provided a standard for browser vendors to follow.</li>
                                            <li>Netscape Navigator 3.0 and Internet Explorer 4.0 started adopting ECMAScript, solidifying JavaScript as a mainstream technology for web development.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td><strong>ECMAScript 2 & 3: Refinement (1998-1999)</strong></td>
                                    <td>
                                        <strong>1998: ECMAScript 2.0</strong>
                                        <ul>
                                            <li>1998: ECMAScript 2.0 was a minor update to ECMAScript 1.0, primarily addressing bug fixes and clarifications.</li>
                                            <li>This version wasn’t a major change but ensured more consistency across implementations.</li>
                                        </ul>

                                        <hr>
                                        <strong>1999: ECMAScript 3.0</strong>
                                        <ul>
                                            <li><strong>1999:</strong> ECMAScript 3.0 was released and became the foundation for JavaScript for the next decade.</li>
                                            <li>
                                                Major features included
                                                <ul>
                                                    <li>Regular Expressions: A new pattern-matching syntax for strings, a powerful addition for handling text.</li>
                                                    <li>Error Handling (try/catch): Introduced structured exception handling to improve robustness.</li>
                                                    <li>Array Methods: Such as forEach(), map(), and filter(), providing more powerful data manipulation tools.</li>
                                                    <li>Unicode Support: Better support for internationalization, enabling JavaScript to handle non-ASCII characters.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td><strong>The "Browser Wars" and Stagnation (2000-2005)</strong> </td>
                                    <td>
                                        <strong>Early 2000s: Browser Wars</strong>
                                        <ul>
                                            <li>2000-2005: During this period, browsers like Internet Explorer, Netscape, and Mozilla Firefox implemented JavaScript with varying degrees of support, leading to compatibility issues.</li>
                                            <li>Internet Explorer 6 (released in 2001) was the dominant browser for many years, but it lacked adherence to newer web standards, causing many developers to struggle with cross-browser issues.</li>
                                        </ul>

                                        <hr>
                                        <strong>Ajax and the Rise of Web 2.0</strong>
                                        <ul>
                                            <li>2005: The concept of AJAX (Asynchronous JavaScript and XML) became popular, significantly changing the way web applications were built.</li>
                                            <li>AJAX allowed web pages to asynchronously communicate with the server and update parts of the page without reloading the entire page.</li>
                                            <li>This innovation led to the Web 2.0 era, where more dynamic and responsive websites (like Google Maps and Gmail) started to emerge.</li>
                                        </ul>

                                        <hr>
                                        <strong>2006: jQuery is Released </strong>
                                        <ul>
                                            <li>2006: jQuery, a JavaScript library developed by John Resig, was released to make JavaScript easier to use and more consistent across different browsers.</li>
                                            <li>jQuery simplified DOM manipulation, event handling, and AJAX requests, and became the de facto library for web developers.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td><strong>Server-Side JavaScript and Modern JavaScript Frameworks (2006-2010)</strong> </td>
                                    <td>
                                        <strong>2009: Node.js</strong>
                                        <ul>
                                            <li>2009: Ryan Dahl released Node.js, a server-side platform that allowed developers to write JavaScript on the server.</li>
                                            <li>This was revolutionary because it enabled JavaScript to be used for both front-end and back-end development, promoting the use of full-stack JavaScript.</li>
                                            <li>Node.js was built on the V8 JavaScript engine (from Google Chrome) and was designed to be fast and efficient for handling concurrent requests.</li>
                                        </ul>

                                        <hr>
                                        <strong>2009: ECMAScript 5 (ES5)</strong>
                                        <ul>
                                            <li>2009: ECMAScript 5 (ES5) was released, marking a major step forward for JavaScript. </li>
                                            <li>Key features included
                                                <ul>
                                                    <li><strong>Strict Mode </strong>A more secure, error-prone-free version of JavaScript that helped eliminate bad practices.</li>
                                                    <li><strong>JSON Support </strong>Built-in support for working with JSON, a popular format for data exchange.</li>
                                                    <li><strong>Array Methods </strong>Methods like forEach(), map(), and filter() were standardized.</li>
                                                    <li><strong>Getter/Setter Methods </strong>Allowed the definition of custom getter and setter functions for objects.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td><strong>The ECMAScript 6 Revolution (2015)</strong> </td>
                                    <td>
                                        <strong>2015: ECMAScript 6 (ES6) / ECMAScript 2015</strong>
                                        <ul>
                                            <li>2015: ECMAScript 6 (ES6), also known as ECMAScript 2015, was released and completely transformed JavaScript.</li>
                                            <li>Major new features
                                                <ul>
                                                    <li><strong>Arrow Functions</strong> Shorter syntax for function expressions (e.g., const add = (a, b) => a + b;).</li>
                                                    <li><strong>Classes</strong> Syntactic sugar for working with object-oriented programming. </li>
                                                    <li><strong>Template Literals</strong> Multi-line strings and string interpolation (e.g., const greeting = `Hello, ${name}!`).</li>
                                                    <li><strong>Modules</strong> import and export syntax, making it easier to organize code into modules.</li>
                                                    <li><strong>Promises</strong> A native way to handle asynchronous operations more efficiently (e.g., .then(), .catch()).</li>
                                                    <li><strong>Destructuring</strong> A way to extract values from arrays or objects in a concise manner (e.g., const { name, age } = person;).</li>
                                                    <li><strong>Let/Const</strong> New keywords for declaring variables with block-scoped functionality, replacing var.</li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <hr>
                                        <strong>ES6 Adoption</strong>
                                        <ul>
                                            <li>Major frameworks and libraries, such as React, Angular, and Vue.js, embraced ES6 and started requiring or recommending the use of ES6 features, making ES6 the standard for modern JavaScript development.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td><strong>ECMAScript 7 to ECMAScript 2020 (2016-2020)</strong> </td>
                                    <td>
                                        <strong>2016: ECMAScript 7 (ES7)</strong>
                                        <ul>
                                            <li>
                                                <strong>2016: ECMAScript 7</strong> was released, introducing
                                                <ul>
                                                    <li><strong>Exponentiation Operator (**)</strong> A new operator for exponentiation (e.g., 2 ** 3 equals 8).</li>
                                                    <li><strong>Array.prototype.includes()</strong> A new method to check if an array contains a specific element.</li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <hr>
                                        <strong>2017: ECMAScript 8 (ES8)</strong>
                                        <ul>
                                            <li>
                                                <strong>2017: ECMAScript 8</strong> (also known as ES2017) introduced
                                                <ul>
                                                    <li><strong>Async/Await</strong> Simplified handling of asynchronous code, making it easier to write asynchronous functions in a synchronous style.</li>
                                                    <li><strong>Object.entries() and Object.values()</strong> Methods for iterating over object properties in a more useful way.</li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <hr>
                                        <strong>2018: ECMAScript 9 (ES9)</strong>
                                        <ul>
                                            <li><strong>2018: ECMAScript 9</strong> introduced
                                                <ul>
                                                    <li><strong>Rest/Spread Properties</strong> Enhanced object manipulation (e.g., let newObject = {...oldObject, newProp: value};).</li>
                                                    <li><strong>Asynchronous Iteration</strong> Support for async generators and for-await-of loops.</li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <hr>
                                        <strong>2019: ECMAScript 10 (ES10)</strong>
                                        <ul>
                                            <li>
                                                <strong>2019: ECMAScript 10 </strong>included
                                                <ul>
                                                    <li><strong>Array.prototype.flat() and flatMap() </strong> Methods to flatten arrays.</li>
                                                    <li><strong>Object.fromEntries() </strong> A method to transform key-value pairs into an object.</li>
                                                    <li><strong>String.prototype.trimStart() and trimEnd() </strong> New methods for trimming spaces from the start and end of strings.</li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <hr>
                                        <strong>2020: ECMAScript 11 (ES11)</strong>
                                        <ul>
                                            <li>
                                                <strong>2020: ECMAScript 11 </strong>included new features
                                                <ul>
                                                    <li><strong>BigInt </strong>A new primitive type for handling arbitrarily large integers.</li>
                                                    <li><strong>globalThis </strong>A global object that provides a consistent way to reference the global scope across different environments (browser, Node.js).</li>
                                                    <li><strong>Promise.allSettled() </strong>A new method for working with multiple promises and handling their results.</li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td><strong>Modern JavaScript Frameworks and Tools (2015-present) </strong> </td>
                                    <td>

                                        <strong>React, Angular, and Vue.js</strong>
                                        <ul>
                                            <li>The modern JavaScript ecosystem saw the rise of React (2013), Angular (2010), and Vue.js (2014), which revolutionized front-end development by encouraging component-based architectures and the development of single-page applications (SPAs).</li>
                                            <li>React, developed by Facebook, became the dominant framework for building dynamic user interfaces.</li>
                                        </ul>

                                        <hr>
                                        <strong>Node.js and npm</strong>
                                        <ul>
                                            <li>Node.js grew rapidly, becoming the standard platform for building server-side applications with JavaScript.</li>
                                            <li>The npm (Node Package Manager) became the largest software registry, hosting millions of packages for JavaScript developers to use.</li>
                                        </ul>

                                        <hr>
                                        <strong>TypeScript</strong>
                                        <ul>
                                            <li>TypeScript, a statically typed superset of JavaScript, grew in popularity as developers sought better tooling and type safety for large codebases.</li>
                                            <li>TypeScript offered optional static typing, improving code quality and developer experience.</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td><strong>JavaScript Today</strong> </td>
                                    <td>
                                        <ul>
                                            <li>JavaScript has evolved from a simple scripting language for web pages to one of the most powerful and versatile programming languages in the world. Its growth is marked by
                                                <ul>
                                                    <li>ECMAScript 6 bringing major new features and syntax improvements.</li>
                                                    <li>Node.js opening up full-stack JavaScript development.</li>
                                                    <li>The rise of modern frameworks like React, Vue, and Angular.</li>
                                                    <li>Widespread adoption of TypeScript for better development practices.</li>
                                                    <li>JavaScript continues to be at the heart of modern web development and is only growing in importance.</li>
                                                </ul>
                                            </li>
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