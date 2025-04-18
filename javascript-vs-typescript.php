<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Explore the key differences between JavaScript and TypeScript. Understand how TypeScript builds on JavaScript with static typing, better tooling, and advanced features for large-scale web development." />
    <meta name="keywords" content="JavaScript vs TypeScript, TypeScript features, JavaScript vs TypeScript comparison, static typing, TypeScript advantages, JavaScript syntax, web development, programming languages" />

    <title>JavaScript / Typescript</title>

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

                    <h3 class="text-center">Difference Between JavaScript Vs TypeScript</h3>
                    <hr />

                    <!-- Information of above topic -->
                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> General Difference between JavaScript and TypeScript</h4>

                        <div class="ms-4">
                            <ul>
                                <li><strong>JavaScript</strong> is a <strong>dynamic language</strong> with no type checking, which can lead to runtime errors.</li>
                                <li><strong>TypeScript</strong> is a <strong>superset of JavaScript</strong> that adds <strong>static typing</strong>. This allows for better <strong>code maintainability</strong>, improved <strong>code editor support</strong> (like autocompletion and refactoring), and early detection of potential errors during development.</li>
                                <li><strong>Why compare them?</strong> TypeScript offers significant advantages in <strong>larger projects</strong> and teams by enhancing <strong>code quality</strong> and <strong>developer productivity</strong>.</li>
                            </ul>
                        </div>
                    </section>

                    
                    <!-- Difference between JavaScript / Typescript -->
                    <section>

                        <div class="table-responsive ms-5 mt-3">

                            
                            <table class="table table-bordered table-hover table-striped mt-3">
                                <thead>
                                    <tr class="table-dark">
                                        <th><strong>No</strong></th>
                                        <th><strong>Aspect</strong></th>
                                        <th><strong>JavaScript</strong></th>
                                        <th><strong>TypeScript</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>Typing</strong></td>
                                        <td><strong>Dynamically typed:</strong> Variables are not explicitly typed, allowing flexibility but increasing runtime error risks.</td>
                                        <td><strong>Statically typed:</strong> Optional type annotations allow for better error detection during development.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><strong>Compilation</strong></td>
                                        <td><strong>Interpreted:</strong> JavaScript is executed directly by the browser or Node.js without prior compilation.</td>
                                        <td><strong>Compiled:</strong> TypeScript must be compiled into JavaScript before execution.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><strong>Tooling Support</strong></td>
                                        <td><strong>Basic tooling:</strong> Limited error checking and autocompletion.</td>
                                        <td><strong>Advanced tooling:</strong> Features like autocompletion, type inference, and error checking are available.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><strong>Type Safety</strong></td>
                                        <td><strong>No type checking:</strong> Errors are caught only at runtime.</td>
                                        <td><strong>Type checking:</strong> Errors are caught at compile time, reducing runtime bugs.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><strong>Syntax</strong></td>
                                        <td><strong>Simple and flexible:</strong> JavaScript syntax is straightforward and easy to learn.</td>
                                        <td><strong>Enhanced syntax:</strong> Includes additional features like interfaces, enums, and generics.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><strong>Community</strong></td>
                                        <td><strong>Larger community:</strong> JavaScript is widely used for web development.</td>
                                        <td><strong>Growing community:</strong> TypeScript is increasingly popular in large-scale applications.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><strong>Backward Compatibility</strong></td>
                                        <td><strong>Direct execution:</strong> JavaScript runs directly on all browsers without additional setup.</td>
                                        <td><strong>Requires compilation:</strong> TypeScript must be converted to JavaScript for browser compatibility.</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><strong>Learning Curve</strong></td>
                                        <td><strong>Easy to learn:</strong> JavaScript is beginner-friendly and widely used in web development.</td>
                                        <td><strong>Steeper learning curve:</strong> TypeScript introduces new concepts like type annotations and interfaces.</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><strong>Code Refactoring</strong></td>
                                        <td><strong>Error-prone:</strong> Refactoring JavaScript code in large projects can be challenging.</td>
                                        <td><strong>Type system:</strong> Helps in refactoring with fewer errors and better code structure.</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td><strong>Support for Modern Features</strong></td>
                                        <td><strong>ECMAScript standards:</strong> JavaScript supports modern features defined by ECMAScript.</td>
                                        <td><strong>Additional capabilities:</strong> TypeScript adds features like interfaces and type inference.</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td><strong>Popular Frameworks</strong></td>
                                        <td><strong>Widely used:</strong> JavaScript is used with frameworks like React, Angular, and Vue.js.</td>
                                        <td><strong>Preferred for type safety:</strong> TypeScript is often used with Angular, React, and NestJS.</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td><strong>Integration with Libraries</strong></td>
                                        <td><strong>Seamless:</strong> Works with most JavaScript libraries without additional setup.</td>
                                        <td><strong>Requires type definitions:</strong> Some libraries may need type definitions for better integration.</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td><strong>Error Detection</strong></td>
                                        <td><strong>Runtime errors:</strong> Errors are detected only during execution.</td>
                                        <td><strong>Compile-time errors:</strong> Errors are caught during compilation, reducing runtime bugs.</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td><strong>Runtime Performance</strong></td>
                                        <td><strong>Direct execution:</strong> JavaScript is interpreted directly by the browser or server.</td>
                                        <td><strong>Similar performance:</strong> After compilation, TypeScript runs as JavaScript with similar performance.</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td><strong>Interoperability</strong></td>
                                        <td><strong>Seamless:</strong> Works with other JavaScript code without issues.</td>
                                        <td><strong>Interoperable:</strong> Works with JavaScript but may require type definitions for some libraries.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                <a href="javascript-vs-java-vs-python.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-types.php" class="btn btn-success">Next Topic <i
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