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
                        <div class="table-responsive">

                            
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
                                                <li><strong>May 1995 Brendan Eich</strong>, working at <strong>Netscape Communications,</strong>  created <strong>JavaScript</strong>.
                                                <li>The language was initially called <strong>"Mocha"</strong>, then renamed <strong>"LiveScript"</strong> and finally settled on the name <strong>"JavaScript"</strong>.</li>
                                                
                                                <li>The original goal was to add basic <strong>client-side scripting </strong> to websites, such as form <strong>validation</strong>  and <strong>interactive content</strong> , without the need for full page reloads.</li>
                                                </li>
                                            </ul>

                                            <hr>
                                            <strong>1995: First Use in Netscape Navigator</strong>
                                            <ul>
                                                <li>JavaScript was first included in <strong>Netscape Navigator 2.0</strong> , which was released in <strong>September 1995</strong> .</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>Standardization and Growth (1996-1997)</strong> </td>
                                        <td>
                                            <strong>1996: ECMA Standardization Process</strong>
                                            <ul>
                                                <li><strong>June 1996 </strong>JavaScript was submitted to <strong>ECMA International</strong>  to be , with the goal of reducing <strong>browser fragmentation</strong>  and creating a consistent scripting language.</li>
                                                <li>The language was renamed to <strong>"ECMAScript"</strong>  following the <strong><a target="_blank" href="https://262.ecma-international.org/15.0/index.html?_gl=1*hwf5tm*_ga*OTAyNTYwMzMyLjE3NDIxOTQ4MTA.*_ga_TDCK4DWEPP*MTc0MjU4NTE2OC4zLjAuMTc0MjU4NTE3Ny4wLjAuMA..">ECMA-262</a></strong> specification.</li>
                                            </ul>

                                            <hr>
                                            <strong>1997: ECMAScript 1.0 and Early Adoption</strong>
                                            <ul>
                                                <li><strong>June 1997, ECMAScript 1.0</strong>  was officially finalized.</li>
                                                <li>Netscape <strong>Navigator 3.0</strong>  and <strong>Internet Explorer 4.0</strong> started adopting ECMAScript. </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>ECMAScript 2 & 3: Refinement (1998-1999)</strong></td>
                                        <td>
                                            <strong>1998: ECMAScript 2.0</strong>
                                            <ul>
                                                <li><strong>ECMAScript 2.0</strong>  was a minor update to <strong>ECMAScript 1.0</strong> , primarily addressing bug fixes and clarifications.</li>
                                            </ul>

                                            <hr>
                                            <strong>1999: ECMAScript 3.0</strong>
                                            <ul>
                                                <li><strong>ECMAScript 3.0</strong>  was released and became the foundation for JavaScript for the next decade.</li>
                                                <li>
                                                    <strong>Major features included</strong>
                                                    <ul>
                                                        <li><strong style="cursor: pointer;" title="A new pattern-matching syntax for strings, a powerful addition for handling text.">Regular Expressions</strong> </li>
                                                        <li><strong style="cursor: pointer;" title="Introduced structured exception handling to improve robustness.">Error Handling (try/catch)</strong> </li>
                                                        <li><strong style="cursor: pointer;" title="Such as forEach(), map(), and filter(), providing more powerful data manipulation tools.">Array Methods</strong> </li>
                                                        <li><strong style="cursor: pointer;" title="Better support for internationalization, enabling JavaScript to handle non-ASCII characters.">Unicode Support</strong> </li>
                                                    </ul>
                                                </li>
                                                <li><strong><a href="javascript-ecma-script-verson-and-feature.php">ECMAScript features</a></strong></li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>The "Browser Wars" and Stagnation (2000-2005)</strong> </td>
                                        <td>
                                            <strong>Early 2000s: Browser Wars (with JavaScript)</strong>
                                            <ul>
                                                <li><strong>2000-2005 : </strong> During this period, browsers like <strong>Internet Explorer</strong> , <strong>Netscape</strong> , and  <strong>Mozilla Firefox</strong> implemented JavaScript which leading to compatibility issues.</li>
                                                <li><strong>Internet Explorer 6</strong> (released in 2001) was the dominant browser for many years, but it lacked adherence to newer web standards, causing many developers to struggle with cross-browser issues.</li>
                                            </ul>

                                            <hr>
                                            <strong>Ajax and the Rise of Web 2.0</strong>
                                            <ul>
                                                <li>The term <strong>"AJAX" (Asynchronous JavaScript and XML)</strong>  was coined (invented) by <strong>Jesse James Garrett</strong> in <strong>February 2005</strong>. </li>
                                                <li> The concept of <strong>AJAX</strong> became popular, significantly changing the way web applications were built.</li>
                                                <li>AJAX allowed web pages to <strong>asynchronously communicate </strong>with the server and update parts of the page <strong>without reloading</strong> the entire page.</li>
                                                <li>This innovation led to the <strong>Web 2.0 era,</strong> where more <strong>dynamic and responsive websites</strong> (like Google Maps and Gmail) started to emerge.</li>
                                            </ul>

                                            <hr>
                                            <strong>2006: jQuery is Released </strong>
                                            <ul>
                                                <li><strong>JQuery</strong> was released in <strong>January 2006</strong> at <strong>BarCamp NYC</strong> by <strong>John Resig</strong>.</li>
                                                <li>He sought to simplify JavaScript development by creating a library that streamlined common tasks like <strong>DOM manipulation,</strong> <strong>event handling</strong> and <strong>AJAX interactions</strong></li>
                                                <li>jQuery, a JavaScript library make JavaScript easier to use and more consistent across different browsers.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td><strong>Server-Side JavaScript and Modern JavaScript Frameworks (2006-2010)</strong> </td>
                                        <td>
                                            <strong>2009: Node.js</strong>
                                            <ul>
                                                <li><strong>Ryan Dahl</strong> released <strong>Node.js</strong>, a server-side platform that allowed developers to write JavaScript on the server.</li>
                                                <li>This was revolutionary because it enabled JavaScript to be used for both <strong>front-end and back-end </strong>development, promoting the use of full-stack JavaScript.</li>
                                                <li>Node.js was built on the <strong>V8 JavaScript engine</strong> (from Google Chrome) and was designed to be fast and efficient for handling concurrent requests.</li>
                                            </ul>

                                            <hr>
                                            <strong>2009: ECMAScript 5 (ES5)</strong>
                                            <ul>
                                                <li>2009: ECMAScript 5 (ES5) was released, marking a major step forward for JavaScript. </li>
                                                <li>Key features included
                                                    <ul>
                                                        <li><strong title="A more secure, error-prone-free version of JavaScript that helped eliminate bad practices."><u>Strict Mode</u> </strong></li>
                                                        <li><strong title="Built-in support for working with JSON, a popular format for data exchange."> <u>JSON Support</u> </strong</li>
                                                        <li><strong title="Methods like forEach(), map(), and filter() were standardized."> <u>Array Methods</u> </strong></li>
                                                        <li><strong title="Allowed the definition of custom getter and setter functions for objects."> <u>Getter/Setter Methods</u> </strong></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>



                                    <!-- JavaScript Features -->
                                    <tr>
                                        <td>6</td>
                                        <td><strong>The ECMAScript 6 Revolution (2015)</strong> </td>
                                        <td>
                                            <strong>2015: ECMAScript 6 (ES6) / ECMAScript 2015</strong>
                                            <ul>
                                                <li>2015: <strong>ECMAScript 6 (ES6),</strong> also known as <strong>ECMAScript 2015,</strong> was released and completely transformed JavaScript.</li>
                                                <li>Major new features
                                                    <ul>
                                                        <li><strong title="Shorter syntax for function expressions (e.g., const add = (a, b) => a + b;)." ><u>Arrow Functions</u>  </strong> </li>
                                                        <li><strong title="Syntactic sugar for working with object-oriented programming." ><u>Classes </u> </strong>  </li>
                                                        <li><strong title="Multi-line strings and string interpolation (e.g., const greeting = `Hello, ${name}!`)." ><u>Template Literals</u>  </strong> </li>
                                                        <li><strong title="import and export syntax, making it easier to organize code into modules." ><u>Modules </u> </strong> </li>
                                                        <li><strong title="A native way to handle asynchronous operations more efficiently (e.g., .then(), .catch())." ><u>Promises </u> </strong> </li>
                                                        <li><strong title="A way to extract values from arrays or objects in a concise manner (e.g., const { name, age } = person;)." ><u>Destructuring </u> </strong> </li>
                                                        <li><strong title="New keywords for declaring variables with block-scoped functionality, replacing var." ><u>Let/Const </u> </strong> </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <hr>
                                            <strong>ES6 Adoption</strong>
                                            <ul>
                                                <li>Major frameworks and libraries, such as <strong>React, </strong> <strong>Angular, </strong>and <strong>Vue.js,</strong>  embraced ES6.</li>
                                                <li>Started requiring or recommending the use of ES6 features, making ES6 the standard for modern JavaScript development.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    
                                    <tr>
                                        <td>7</td>
                                        <td><strong>ECMAScript 7 to ECMAScript 15</strong> </td>
                                        <td>
                                            
                                            <strong><a href="javascript-ecma-script-verson-and-feature.php">MORE ECMAScript features</a></strong>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td><strong>Modern JavaScript Frameworks and Tools (2015-present) </strong> </td>
                                        <td>

                                            <strong>React, Angular, and Vue.js</strong>
                                            <ul>
                                                <li>The modern JavaScript ecosystem saw the rise of <strong>React (2013)</strong>, <strong>Angular (2010)</strong> and <strong>Vue.js (2014)</strong>, which revolutionized front-end development by encouraging component-based architectures and the development of <strong>Single-Page-Applications (SPAs)</strong>.</li>
                                                <li><strong>React, developed by Facebook</strong>, became the dominant framework for building dynamic user interfaces.</li>
                                            </ul>

                                            <hr>
                                            <strong>Node.js and npm</strong>
                                            <ul>
                                                <li><strong>Node.js</strong> grew rapidly, becoming the standard platform for building <strong>server-side applications</strong> with JavaScript.</li>
                                                <li>The <strong>npm (Node Package Manager)</strong> became the largest software registry, hosting millions of packages for JavaScript developers to use.</li>
                                            </ul>

                                            <hr>
                                            <strong>TypeScript</strong>
                                            <ul>
                                                <li><strong>TypeScript</strong>, a statically typed <strong>superset of JavaScript</strong>, grew in popularity as developers sought better tooling and type safety for large codebases.</li>
                                                <li><strong>TypeScript</strong> offered optional <strong>static typing</strong>, improving code quality and developer experience.</li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><strong>JavaScript Today</strong> </td>
                                        <td>
                                            <ul>
                                                <li>JavaScript has evolved from a simple scripting language for web pages to one of the most powerful and versatile programming languages in the world. </li>
                                                <li>Its growth is marked by</li>    
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