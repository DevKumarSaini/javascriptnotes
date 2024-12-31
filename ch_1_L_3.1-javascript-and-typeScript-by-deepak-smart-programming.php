<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords"
        content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

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

                    <h3 class="text-center">Difference Between JavaScript / TypeScript</h3>
                    <hr />

                    <!-- Information of above topic -->
                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> General Difference between Javascript and Typescript</h4>

                        <div class="ms-4">
                            <p><strong>JavaScript</strong> is a dynamic language with no type checking, which can lead to runtime errors.</p>
                            <p><strong>TypeScript</strong> is a superset of JavaScript that adds static typing. This allows for better code maintainability, improved code editor support (like autocompletion and refactoring), and early detection of potential errors during development.</p>

                            <strong>Why compare them?</strong>
                            <p>TypeScript offers significant advantages in larger projects and teams by enhancing code quality and developer productivity.</p>
                        </div>
                    </section>

                    <hr class="mt-4 mb-4">
                    
                    <!-- Difference between JavaScript / Typescript -->
                    <section>
                        <h4 class="notes-heading mt-4 "><i class="bi bi-brightness-low-fill"></i> Difference between JavaScript and Typescript</h4>

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
                                    <td>Dynamically typed</td>
                                    <td>Statically typed (optional type annotations)</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong>Compilation</strong></td>
                                    <td>Interpreted directly by the browser or Node.js</td>
                                    <td>Compiled into JavaScript before execution</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><strong>Tooling Support</strong></td>
                                    <td>Basic tooling (limited error checking)</td>
                                    <td>Advanced tooling with features like autocompletion, type inference, and error
                                        checking</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><strong>Type Safety</strong></td>
                                    <td>No type checking, errors are caught at runtime</td>
                                    <td>Type checking at compile time, reducing runtime errors</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><strong>Syntax</strong></td>
                                    <td>Simple and flexible syntax</td>
                                    <td>Includes additional features like interfaces, enums, and generics</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><strong>Community</strong></td>
                                    <td>Larger community, widely used for web development</td>
                                    <td>Smaller but growing community, increasingly popular in large applications</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><strong>Backward Compatibility</strong></td>
                                    <td>Runs directly on all browsers without any setup</td>
                                    <td>Requires a compilation step to convert to JavaScript</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><strong>Learning Curve</strong></td>
                                    <td>Easy to learn and start coding</td>
                                    <td>Steeper learning curve due to the addition of type annotations and concepts</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><strong>Code Refactoring</strong></td>
                                    <td>Refactoring is error-prone and harder to manage in large codebases</td>
                                    <td>Type system helps in refactoring with fewer errors and better code structure
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><strong>Support for Modern Features</strong></td>
                                    <td>Supports modern JavaScript features with ECMAScript standards</td>
                                    <td>Supports modern features and adds additional capabilities (like interfaces and
                                        type inference)</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td><strong>Popular Frameworks</strong></td>
                                    <td>Widely used with frameworks like React, Angular, Node.js, Vue.js</td>
                                    <td>Preferred with frameworks like Angular, React, and NestJS for better type safety
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td><strong>Integration with Libraries</strong></td>
                                    <td>Works with most JavaScript libraries without additional setup</td>
                                    <td>Works with JavaScript libraries, but type definitions may be needed for some
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td><strong>Error Detection</strong></td>
                                    <td>Errors are only detected at runtime</td>
                                    <td>Errors are caught during the compile time, reducing runtime bugs</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td><strong>Runtime Performance</strong></td>
                                    <td>Directly interpreted by the browser or server at runtime</td>
                                    <td>After compilation, runtime performance is similar to JavaScript</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td><strong>Interoperability</strong></td>
                                    <td>Works seamlessly with other JavaScript code</td>
                                    <td>Interoperates well with JavaScript, but may require type definitions for some
                                        libraries</td>
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
                    <a href="ch_1_L_4-types-of-javascript-by-deepak-smart-programming.php" class="btn btn-success">Next Topic <i
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